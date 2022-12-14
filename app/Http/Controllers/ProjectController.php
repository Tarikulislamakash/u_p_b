<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Appointment;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Models\Appointment as AppointmentRequest;
use Illuminate\Support\Facades\Validator;
use Newsletter;
use Illuminate\Support\Facades\URL;
use App\Models\UtrRegistration;


class ProjectController extends Controller
{
    public function home()
    {
        return view('layouts.index');
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function bookkeeping()
    {
        return view('layouts.bookkeeping');
    }

    public function cis()
    {
        return view('layouts.cis');
    }

    public function contact()
    {
        return view('layouts.contact');
    }

    public function my_account()
    {
        return view('layouts.my-account');
    }

    public function payment()
    {
        return view('layouts.payment');
    }

    public function register()
    {
        return view('layouts.register');
    }

    public function self()
    {
        return view('layouts.self');
    }

    public function thank_you()
    {
        return view('layouts.thank-you');
    }

    public function utr()
    {
        return view('layouts.utr');
    }

    public function utrRegister()
    {
        return view('layouts.utrRegister');
    }



    public function utrRegisterStore(Request $request)
    {
        if (str_word_count($request->name) < 2) {
            return redirect(url()->previous() . '#register')->with('word_count_err', "Name can't be single word.")->withInput();
        }
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'email' => 'email:rfc,dns|unique:utr_registrations',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous() . '#register')
                ->withErrors($validator)
                ->withInput();
        }


        if (strlen($request->number) != 10) {
            return redirect(url()->previous() . '#register')->with('number_range', "Phone Number is not valid.")->withInput();
        }

        if (!preg_match('|^[0-9]+$|', $request->number)) {
            return redirect(url()->previous() . '#register')->with('number_range', "Phone Number is not valid.")->withInput();
        }

        if( $request->requiredCISYes == null && $request->requiredCISNo == null )
        {
            return redirect(url()->previous() . '#register')->with('required_CIS', "Please Select One.")->withInput();
        }

        $user = UtrRegistration::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->number,
            'address' => $request->address,
            'town' => $request->town,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'national_insurance' => $request->nationalInsurance,
            'work_type' => $request->typeOfWork,
            'start_work_date' => $request->dateStart,
            'birth_date' => $request->birth,
            'required_cis_registration' => $request->requiredCISYes ? $request->requiredCISYes : $request->requiredCISNo,
        ]);

        // Mailchimp Api Intigration
        $email = $request->email;
        $name = $request->name;
        $number = $request->number;
        $address = $request->address;

        if (!Newsletter::isSubscribed($email)) {
            Newsletter::subscribe($email, ['NAME' => $name, 'NUMBER' => $number, 'ADDRESS' => $address]);
        }
        // Mailchimp Api Intigration


        return redirect()->back()->with('utr_registration', "UTR Number Registration SUccessfully Done.");
    }



    public function vat_filing()
    {
        return view('layouts.vat-filing');
    }



    public function appointment(Request $request)
    {

        if (str_word_count($request->name) < 2) {
            return redirect(url()->previous() . '#book-appointment')->with('word_count_err', "Name can't be single word.")->withInput();
        }


        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'email:rfc,dns',
            ]
        );


        if ($validator->fails()) {
            return redirect(url()->previous() . '#book-appointment')
                ->withErrors($validator)
                ->withInput();
        }


        if (strlen($request->number) != 10) {
            return redirect(url()->previous() . '#book-appointment')->with('number_range', "Phone Number is not valid.")->withInput();
        }

        if (!preg_match('|^[0-9]+$|', $request->number)) {
            return redirect(url()->previous() . '#book-appointment')->with('number_range', "Phone Number is not valid.")->withInput();
        }


        $name = $request->name;
        $email = $request->email;
        $number = $request->number;


        AppointmentRequest::create([
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'request_page' => URL::previous()
        ]);

        Mail::to('tarikulislamakash@gmail.com')->send(new Appointment($name, $email, $number));

        if (!Newsletter::isSubscribed($email)) {
            Newsletter::subscribe($email, ['NAME' => $name, 'NUMBER' => $number]);
        }

        return redirect()->back()->with('appointment_success', 'Appointment Request Successfully Send.');
    }



    public function terms()
    {
        return view('layouts.terms');
    }


    public function privacyStatement()
    {
        return view('layouts.privacy-statement');
    }


    public function communicationPolicy()
    {
        return view('layouts.communication-policy');
    }
}

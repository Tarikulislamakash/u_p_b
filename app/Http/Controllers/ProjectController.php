<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Appointment;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Models\Appointment as AppointmentRequest;


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

    public function vat_filing()
    {
        return view('layouts.vat-filing');
    }

    public function appointment(Request $request)
    {
        // $mail = new PHPMailer(true);

        // try {
        //     $mail->SMTPDebug = 1;
        //     $mail->isSMTP();
        //     $mail->Mailer = 'smtp';
        //     $mail->Host       = 'smtp.googlemail.com';
        //     $mail->SMTPAuth   = true;
        //     $mail->Username   = 'tarikulislamakash@gmail.com';
        //     $mail->Password   = 'alcteacgfumbqzbe';
        //     $mail->SMTPSecure = 'ssl';
        //     $mail->Port       = 465;
        //     $mail->setFrom($request->email);
        //     $mail->addAddress('tarikulislamakash@gmail.com');
        //     $mail->isHTML(true);
        //     $mail->Subject = 'Appointment Request';
        //     $mail->Body    = 'Appointment Request From<br><b>Name : ' . $request->name . '</b><br>' . '<b>Email : ' . $request->email . '</b><br>' . '<b>Message : ' . $request->message . '</b><br>';
        //     $mail->SMTPOptions = array(
        //         'ssl' => array(
        //             'verify_peer' => false,
        //             'verify_peer_name' => false,
        //             'allow_self_signed' => true
        //         )
        //     );

        //     $mail->send();
        //     return redirect()->back()->with('appointment_success', 'Appointment Request Successfully Send.');
        // } catch (Exception $e) {
        //     return redirect()->back()->with('appointment_error', 'Appointment Request Failed.');
        // }

        if (str_word_count($request->name) < 2)
        {
            return redirect()->back()->with('word_count_err', "Name can't be single word.");
        }

        $validated = $request->validate([
            'email' => 'required|email:rfc',
            'name' => 'required',
            'number' => 'required|integer|max:10|min:3',
        ]);

        $name = $request->name;
        $email = $request->email;
        $number = $request->number;

        AppointmentRequest::create([
            'name' => $name,
            'email' => $email,
            'number' => $number,
        ]);

        Mail::to('tarikulislamakash@gmail.com')->send(new Appointment($name, $email, $number));
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

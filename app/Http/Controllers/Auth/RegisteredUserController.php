<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Newsletter;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->number,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'national_insurance' => $request->nationalInsurance,
            'work_type' => $request->typeOfWork,
            'start_work_date' => $request->dateStart,
            'birth_date' => $request->birth,
        ]);

        event(new Registered($user));

        Auth::login($user);

        // Mailchimp Api Intigration
        $auth_user = User::where('email', auth()->user()->email)->first();
        // dd($auth_user->address);
        $auth_user_name = $auth_user->name;
        $auth_user_number = $auth_user->phone;
        $auth_user_address = $auth_user->address;


        if (!Newsletter::isSubscribed(auth()->user()->email)) {
            Newsletter::subscribe(auth()->user()->email, ['NAME' => $auth_user_name, 'NUMBER' => $auth_user_number, 'ADDRESS' => $auth_user_address]);
            // Newsletter::subscribe(auth()->user()->email, ['NAME' => auth()->user()->name]);
        }

        // Mailchimp Api Intigration

        return redirect(RouteServiceProvider::HOME);
    }
}

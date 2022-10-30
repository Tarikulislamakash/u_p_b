<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

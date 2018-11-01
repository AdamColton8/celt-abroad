<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Response;
use Validator, Input, Redirect;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('language');
    }

    public function locate($language)
    {
        Session::put('language', ($language != '') ? $language : 'en');
        \App::setLocale(($language != '') ? $language : 'en');
        return Redirect::back();
    }

    public function error_page(){
        return view('404/index');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Response;
use Validator, Input, Redirect;

class RepresentativeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('language');
    }

    public function index()
    {
        return view('representative.index');
    }

    public function profile()
    {
        return view('representative.profile');
    }

    public function institution()
    {
        return view('representative.institution');
    }

    public function institutionPrograms()
    {
        return view('representative.institutionPrograms');
    }

    public function programs()
    {
        return view('representative.programs');
    }

    public function application()
    {
        return view('representative.application');
    }
}
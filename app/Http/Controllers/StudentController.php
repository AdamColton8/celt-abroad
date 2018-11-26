<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Response;
use Validator, Input, Redirect;

class StudentController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('language');
    }

    public function index()
    {
        return view('student.index');
    }

    public function personalInfo()
    {
        return view('student.personalInfo');

    }

    public function InfoSummary()
    {
        return view('student.InfoSummary');
    }

    public function InfoDestination()
    {
        return view('student.InfoDestination');
    }

    public function InfoScores()
    {
        return view('student.InfoScores');
    }

    public function profile()
    {
        return view('student.profile');
    }

    public function programs()
    {
        return view('student.programs');
    }

    public function favorites()
    {
        return view('student.favorites');
    }
}

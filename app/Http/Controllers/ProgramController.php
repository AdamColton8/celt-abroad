<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Response;
use Validator, Input, Redirect;

class ProgramController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('language');
    }
    public function index()
    {
        return view('program.index');
    }
}
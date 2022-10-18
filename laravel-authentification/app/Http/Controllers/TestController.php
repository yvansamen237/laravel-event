<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['bar']);
    }

    public function foo()
    {
        return view('test.foo');
    }


    public function bar()
    {

        // Mail::to('samenyvan@gmail.com')->send(new TestMail());

        // return view('test.bar');

        return view('test.bar');
    }
}
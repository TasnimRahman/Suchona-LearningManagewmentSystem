<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function main(){
        return view('frontend/main');
    }
    function webCourse(){
        return view('frontend/webCourse');
    }
    function graphicCourse(){
        return view('frontend/graphicCourse');
    }
    function digitalMarketCourse(){
        return view('frontend/digitalMarketCourse');
    }
    function success(){
        return view('frontend/success');
    }
    function successP2(){
        return view('frontend/successP2');
    }
    function successP3(){
        return view('frontend/successP3');
    }
    function blogs(){
        return view('frontend/blogs');
    }
    function contact(){
        return view('frontend/contact');
    }
    function login(){
        return view('frontend/login');
    }
    function register(){
        return view('frontend/register');
    }
}

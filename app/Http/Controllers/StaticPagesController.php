<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){

        return view('static_pages/home');
    }

    public function help(){

        return view('staitc_pages/help');
    }

    public function about(){

        return '关于页';
    }
}

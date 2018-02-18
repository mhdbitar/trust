<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($lang){

        app()->setlocale($lang);
        return view('layout');
    }
}

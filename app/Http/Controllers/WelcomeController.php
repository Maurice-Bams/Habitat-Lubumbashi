<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //controller de la vue welcome

    public function index()
    {
    	return view('welcome');

    }
}

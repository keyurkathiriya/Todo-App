<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestCon extends Controller
{
    public function index(){

    	$test  = Test::all();
    	 return $rest;

    }
}

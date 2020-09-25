<?php

namespace App\Http\Controllers;


use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{
    //
    public function index(){
        return view('sample');
    }
    public function show(){
       echo "hello Show me";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    function index(){
        $addr = $_SERVER['REQUEST_URI'];
        return $addr;
    } 
    function second(){
        return "This is second function";
    }
}

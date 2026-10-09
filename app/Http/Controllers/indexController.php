<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return "Hello welcome to the library";
    }

    public function create(){
        return "Create";
    }
}

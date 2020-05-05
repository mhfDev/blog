<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function show(){
        return "string world";
    }
    public function index(){
        return view('master');
    }
}

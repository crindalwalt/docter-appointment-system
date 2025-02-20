<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class UserController extends Controller
{
    public function home(){
        return view("patient.home");
    }
public function doctors(){
    return view('patient.doctors');
}
public function appointment(){
    return view('patient.appointment');
} 
public function contact(){
    return view('patient.contact');
}
public function about(){
    return view('patient.about');
}
}

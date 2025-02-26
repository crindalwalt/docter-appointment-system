<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use View;

class UserController extends Controller
{
    public function home(){
        return view("patient.home");
    }
public function doctors(){
    $data['doctors'] = Doctor::all();
    return view('patient.doctors')->with($data);
}
public function appointment(Doctor $doctor){
    $data['doctor'] = $doctor;
    return view('patient.appointment')->with($data);
}
public function contact(){
    return view('patient.contact');
}
public function about(){
    return view('patient.about');
}
}

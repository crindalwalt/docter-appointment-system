<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Doctor;
use App\Models\User;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function patients()
    {
        $patients = User::all();
        // dd($patients);
        return view("doctor.patients",[
            "patients" => $patients,
        ]);
    }
public function dashboard(){
    return view('doctor.dashboard');
}
  public function appointment(){
    return view('doctor.appointement');
  } 
  public function settings(){
    return view('doctor.settings');
  }
}

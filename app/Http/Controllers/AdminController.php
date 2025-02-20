<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =Doctor::all();

        // dd($product->category->name);
        return view("admin.doctors", [
            "products" => $products,
        ]);
    }
    public function patients()
    {
        $products =User::all();

        // dd($product->category->name);
        return view("admin.patients", [
            "products" => $products,
        ]);
    }
    public function appointment (){
        return view ("admin.appointment");
    }
    public function doctors (){
        return view ("admin.departments");
    }
    public function setting(){
        return view ("admin.settings");
    }
    public function dashboard(){
        return view ("admin.dashboard");
    }
   
  
}



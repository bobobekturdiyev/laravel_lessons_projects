<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;

class PageController extends Controller
{
    public function displayMainPage()
    {
        // get All Data records from DB
        //$universities = University::all();
        
        $universities = University::select("id", "name", "students_number")
        ->get();


        return view("university", ["data" => $universities]);
    }
}
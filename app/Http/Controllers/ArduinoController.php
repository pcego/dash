<?php

namespace App\Http\Controllers;

use App\Arduino;

class ArduinoController extends Controller
{

    public function index(){

        $arduinos = Arduino::paginate(10);
        $temp = [];
        return view('reports.report', compact('arduinos'), compact('temp'));
    }

    public function gravacao(){

    }
}

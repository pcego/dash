<?php

namespace App\Http\Controllers;

use App\Arduino;

class ArduinoController extends Controller
{

    public function index(){

        $arduinos = Arduino::paginate(10);

        return view('reports.report', compact('arduinos'));
    }

    public function gravacao(){

    }
}

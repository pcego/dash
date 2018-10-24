<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::paginate(10);
        $temp = [];

        return view('settings.usersettings', compact('users'), compact('temp'));
    }
}

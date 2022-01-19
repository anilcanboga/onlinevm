<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(){
//        $users = User::where('role_id',1)->paginate(50);
        $users = User::all();
        return view('auth.user_list',["users" => $users]);
    }
}

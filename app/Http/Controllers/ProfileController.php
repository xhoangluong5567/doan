<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function profile()
    {
        $users = User::all();

        return view('frontend.user.profile', ['users' =>  $users]);
    }
    //
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Kuisioner;
use App\User;

class UserController extends Controller
{
    public function kuisione()
    {
        $data = Kuisioner::all();
        return view('user', compact(['data']));
        // echo "$data";
    }

    public function datauser()
    {
        $user = User::all();
        return view('user', compact(['user']));
        // echo "$user";
    }

}

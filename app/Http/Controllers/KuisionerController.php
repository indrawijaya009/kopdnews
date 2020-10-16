<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Kuisioner;
use App\User;

class KuisionerController extends Controller
{
    public function datedua()
    {
        $data = "data";
        return view('user', compact(['data']));
        // echo "$data";
    }

    public function showdata()
    {
        $data = User::all();
        return view('dashboard', compact(['data']));
       
    }

    public function create()
    {
        $kuisi =User::all();
        return view('user', compact(['kuisi']));

        // print_r($req->input());
        // $ksr = new Kuisioner;
        // $ksr->tingkat_I= $req->tingkat_I;
        // $ksr->tingkat_II= $req->tingkat_II;
        // $ksr->user_id= $req->user_id;

    //     $tingkat_I = $req->input('tingkat_I');

    //     echo $ksr->create();
    }


}

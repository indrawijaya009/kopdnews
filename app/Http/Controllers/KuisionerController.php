<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Kuisioner;
use App\User;

class KuisionerController extends Controller
{
    public function kuisione()
    {
        $data = User::all();
        return view('dashboard', compact(['data']));
        // echo "$data";
    }

    public function datauser()
    {
        $user = User::all();
        return response()->json(['message'=>'Success','data'=>$user],200);
       
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        
    }
   

}

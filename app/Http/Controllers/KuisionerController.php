<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Kuisioner;
use App\User;
use App\Rcppem;

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
        $kuisi =User::all();
        // return view('user.create');
        return view('user', compact(['kuisi']));
       
    }

    public function create()
    {
        $kuisi =User::all();
        // return view('user.create');
        return view('user', compact(['kuisi']));

        // print_r($request->input());
        // $user = new Rcppem;
        // $user->name=$request->name;
        // $user->datapem=$request->datapem;
        // $user->save();

        // $tingkat_I = $req->input('tingkat_I');

    //     echo $ksr->create();
    }

    public function insert(Request $request)
    {
        // $kuisi =User::all();
        // // return view('user.create');
        // return view('user', compact(['kuisi']));

    //     $user = new Kuisioner;
    //     $user->name=$request->name;
    //     $user->datasatu=$request->datasatu;
    //     $user->datadua=$request->datadua;
    //     $user->datatiga=$request->datatiga;
    //     $user->user_id=$request->user_id;
    //    echo $user->save();

        $user =new Kuisioner([
            'user_id'        =>$request->get('user_id'),
            'name'           =>$request->get('name'),
            'datasatu'       =>$request->get('datasatu'),
            'datadua'        =>$request->get('datadua'),
            'datatiga'       =>$request->get('datatiga'),
        ]);
        $user->save();
        return redirect('userroles')->with('succes','Kuisioner add');
    }

    // public function insert(Request $request)
    // {
    //     $tingkat_I = $request->input('tingkat_I');

    // }


}

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
    }

    public function insert(Request $request)
    {
        $user =new Kuisioner([
            'user_id'        =>$request->get('user_id'),
            // 'name'           =>$request->get('name'),
            // 'datasatu'       =>$request->get('datasatu'),
            // 'datadua'        =>$request->get('datadua'),
            // 'datatiga'       =>$request->get('datatiga'),
            ]);

            $pathnam= $request->file('name')->store('public/tingkatI');
            $user->name = $pathnam;

            $pathsat= $request->file('datasatu')->store('public/tingkatI');
            $user->datasatu = $pathsat;

            $pathdua= $request->file('datadua')->store('public/tingkatI');
            $user->datadua = $pathdua;

        $path= $request->file('datatiga')->store('public/tingkatI');
        $user->datatiga = $path;
        
        $user->save();
        return redirect('userroles')->with('succes','Kuisioner add');
    }


    public function post_rcppemba(Request $request)
    {
        $path= $request->file('datapem')->store('public');
        // print_r($path);
        $user =new Rcppem();
        $user->name = $request->name;
        $user->datapem = $path;
        $user->save();
    }


}

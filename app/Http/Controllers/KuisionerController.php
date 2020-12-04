<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Kuisioner;
use App\User;
use App\Rcppem;
use Storage;
use Auth;
// use Request;

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
        return view('Kuisioner');
    }

    public function insert(Request $request)
    {
        // dd($request);
        $user = Auth::user()->id;
        $data =new Kuisioner([
            'user_id'        => $user,
            'tingkat'        => $request->tingkat,
            'no_dokumen'     => $request->no_dokumen
            
            ]);

            if($request->file('file1') == null ){
                $pathnam = "";
            } else {
                $pathnam= $request->file('file1');
                
                $extensi = $pathnam->getClientOriginalExtension();
                $name = $pathnam->getClientOriginalName();
                $new_name = date('y-m-d').'-'.$name;
                $pathnam->move(public_path('storage/kuisioner'),$new_name);
                $data->file1 = $new_name;
            }

            if($request->file('file2') == null ){
                $pathsat = "";
            } else {
                $pathsat= $request->file('file2');
                
                $extensi = $pathsat->getClientOriginalExtension();
                $name = $pathsat->getClientOriginalName();
                $new_name = date('y-m-d').'-'.$name;
                $pathsat->move(public_path('storage/kuisioner'),$new_name);
                $data->file2 = $new_name;
            }

            // if($request->file('file2') == null){
            //     $pathsat = "";
            // } else {
            //     $pathsat= $request->file('file2')->store('public/tingkatI');
            //     $data->file2 = $pathsat;
            // }

            if($request->file('file3') == null ){
                $pathdua = "";
            } else {
                $pathdua= $request->file('file3');
                
                $extensi = $pathdua->getClientOriginalExtension();
                $name = $pathdua->getClientOriginalName();
                $new_name = date('y-m-d').'-'.$name;
                $pathdua->move(public_path('storage/kuisioner'),$new_name);
                $data->file3 = $new_name;
            }

            // if($request->file('file3') == null){
            //     $pathdua = "";
            // } else {
            //     $pathdua= $request->file('file3')->store('public/tingkatI');
            //     $data->file3 = $pathdua;
            // }

            if($request->file('file4') == null ){
                $path = "";
            } else {
                $path= $request->file('file4');
                
                $extensi = $path->getClientOriginalExtension();
                $name = $path->getClientOriginalName();
                $new_name = date('y-m-d').'-'.$name;
                $path->move(public_path('storage/kuisioner'),$new_name);
                $data->file4 = $new_name;
            }
            
            // if($request->file('file4') == null){
            //     $path = "";
            // }else {
            //     $path= $request->file('file4')->store('public/tingkatI');
            //     $data->file4 = $path;
            // }

        
        $data->save();
        return redirect('/home')->with('status','Data berhasil disimpan');
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

    public function downloadFile()
    {
       try{
        return Storage::disk('local')->download("public/uploadkuisioner/20-12-01-datapen.xlsx");
       }catch(\Exception $e){

           return $e->getMessage();
       }
    }

    


}
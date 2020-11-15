<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Rancangan_pembangunan;
use App\User;
use App\Rcppem;
use Storage;
use Auth;
// use Request;

class RancanganPembangunanController extends Controller
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
        return view('rancangan-pembangunan');
    }

    public function insert(Request $request)
    {
        // dd($request);
        $user = Auth::user()->id;
        $data =new Rancangan_pembangunan([
            'user_id'        => $user,
            'tingkat'        => $request->tingkat,
            'no_dokumen'     => $request->no_dokumen
            
            ]);

            if($request->file('file1') == null ){
                $pathnam = "";
            } else {
                $pathnam= $request->file('file1')->store('public/tingkatI');
                $data->file1 = $pathnam;
            }

            if($request->file('file2') == null){
                $pathsat = "";
            } else {
                $pathsat= $request->file('file2')->store('public/tingkatI');
                $data->file2 = $pathsat;
            }

            if($request->file('file3') == null){
                $pathdua = "";
            } else {
                $pathdua= $request->file('file3')->store('public/tingkatI');
                $data->file3 = $pathdua;
            }

            if($request->file('file4') == null){
                $path = "";
            }else {
                $path= $request->file('file4')->store('public/tingkatI');
                $data->file4 = $path;
            }

        
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
        return Storage::disk('local')->download("public/datapen.docx");
       }catch(\Exception $e){

           return $e->getMessage();
       }
    }	


}

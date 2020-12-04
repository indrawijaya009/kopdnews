<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Upload_kuisioner;
use Storage;
use Auth;

class UploadkuisionerController extends Controller
{

    public function uploadfile(Request $request)
    {

        $data =new Upload_kuisioner;
        if($request->file('file') == null ){
            $file = "";
        } else {
            $file= $request->file('file');
            
            $extensi = $file->getClientOriginalExtension();
            $name = $file->getClientOriginalName();
            $new_name = date('y-m-d').'-'.$name;
            $file->move(public_path('storage/uploadkuisioner'),$new_name);
            $data->file = $new_name;
        }

            // if($request->file('file')){
            //     $file= $request->file('file');   
            //     // $extensi = $file->getClientOriginalExtension();
            //     $filename =time().''.$file->getClientOriginalExtension();
            //     $request->file->move(public_path('storage/kuisioner'),$filename);
            //     $data->file = $filename;
            // }

        $data->save();
        return redirect('/dashboard')->with('status','Data berhasil disimpan');
        // return $request;
    }

    public function downloadFile()
    {
       try{
        return Storage::disk('local')->download("public/datapen.xlsx");
       }catch(\Exception $e){

           return $e->getMessage();
       }
    }

    


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuisioner;
use Auth;
use Storage;

class ShowDataController extends Controller
{
    //

    public function kuisioner($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $kuisioner = Kuisioner::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
        // dd($kuisioner);
        return view('show_data', compact('kuisioner'));
    }
}

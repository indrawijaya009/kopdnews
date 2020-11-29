<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuisioner;
use Auth;
use Storage;

class DokumenController extends Controller
{
    //

    public function kuisioner($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $kuisioner = Kuisioner::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();

        return view('show_dokumen', compact('kuisioner'));
    }
}

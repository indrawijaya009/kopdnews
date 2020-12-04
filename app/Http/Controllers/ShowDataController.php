<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuisioner;
use App\Rancangan_pembangunan;
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
        $kuisioner = Kuisioner::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($kuisioner);
        return view('showdoc/show_data', compact('kuisioner'));
    }

    public function rancangan_pembangunan($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $rancangan_pembangunan = Rancangan_pembangunan::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($rancangan_pembangunan);
        return view('showdoc/show_rancangan_pembangunan', compact('rancangan_pembangunan'));
    }

    // {
    //     try {

    //     $data       = explode("_", $id);
    //     $tingkat    = $data[0];
    //     $user_id    = $data[1];
    //     $kuisione = Kuisioner::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->first();
    //     foreach( $kuisione as $dirNames ) {
    //         $kuisioner[] = basename($dirNames);
    //     }
    //     // dd($kuisioner);
    //     return view('show_data', compact('kuisioner'));
    // } catch ( Exception $ex ) {
    //     Log::error( $ex->getMessage() );
    // }

    // }
}

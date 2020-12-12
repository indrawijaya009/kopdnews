<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuisioner;
use App\Rancangan_pembangunan;
use\App\Penjaminan_mutu;
use\App\Standar_operasional;
use App\Pendidikan_pelatihan;
use App\Analisis_kebijakan;
use\App\Manajemen_sumber;
use\App\Manajemen_resiko;
use App\Pengukuran_kinerja;
use App\Pengembangan_inovasi;
use\App\Budaya_organisasi;
use\App\Pengendalian_pelaksana;

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

    public function penjaminan_mutu($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $penjaminan_mutu = Penjaminan_mutu::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Penjaminan_mutu);
        return view('showdoc/show_penjaminan_mutu', compact('penjaminan_mutu'));
    }

    public function standar_operasional($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $standar_operasional = Standar_operasional::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Standar_operasional);
        return view('showdoc/show_standar_operasional', compact('standar_operasional'));
    }

    public function pendidikan_pelatihan($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $pendidikan_pelatihan = Pendidikan_pelatihan::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Pendidikan_pelatihan);
        return view('showdoc/show_pendidikan_pelatihan', compact('pendidikan_pelatihan'));
    }

    public function analisis_kebijakan($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $analisis_kebijakan = Analisis_kebijakan::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Analisis_kebijakan);
        return view('showdoc/show_analisis_kebijakan', compact('analisis_kebijakan'));
    }

    public function manajemen_sumber($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $manajemen_sumber = Manajemen_sumber::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Manajemen_sumber);
        return view('showdoc/show_manajemen_sumber', compact('manajemen_sumber'));
    }

    public function manajemen_resiko($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $manajemen_resiko = Manajemen_resiko::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Manajemen_resiko);
        return view('showdoc/show_manajemen_resiko', compact('manajemen_resiko'));
    }

    public function pengukuran_kinerja($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $pengukuran_kinerja = Pengukuran_kinerja::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Pengukuran_kinerja);
        return view('showdoc/show_pengukuran_kinerja', compact('pengukuran_kinerja'));
    }

    public function pengembangan_inovasi($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $pengembangan_inovasi = Pengembangan_inovasi::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Pengembangan_inovasi);
        return view('showdoc/show_pengembangan_inovasi', compact('pengembangan_inovasi'));
    }

    public function budaya_organisasi($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $budaya_organisasi = Budaya_organisasi::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Budaya_organisasi);
        return view('showdoc/show_budaya_organisasi', compact('budaya_organisasi'));
    }

    public function pengendalian_pelaksana($id,$dokumen)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $user_id    = $data[1];
        $pengendalian_pelaksana = Pengendalian_pelaksana::where(['user_id'=>$user_id,'tingkat'=>$tingkat,'no_dokumen'=>$dokumen])->get();
        // dd($Pengendalian_pelaksana);
        return view('showdoc/show_pengendalian_pelaksana', compact('pengendalian_pelaksana'));
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
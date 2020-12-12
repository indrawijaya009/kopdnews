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

class DokumenController extends Controller
{
    //

    public function kuisioner($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $kuisioner = Kuisioner::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();

        return view('show_dokumen', compact('kuisioner', 'tingkat', 'id'));
    }

    public function rancangan_pembangunan($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $rancangan_pembangunan = Rancangan_pembangunan::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('rancangan_pembangunan', 'tingkat', 'id'));
    }

    public function penjaminan_mutu($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $penjaminan_mutu = Penjaminan_mutu::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('penjaminan_mutu', 'tingkat', 'id'));
    }

    public function standar_operasional($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $standar_operasional = Standar_operasional::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('standar_operasional', 'tingkat', 'id'));
    }

    public function pendidikan_pelatihan($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $pendidikan_pelatihan = Pendidikan_pelatihan::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('pendidikan_pelatihan', 'tingkat', 'id'));
    }

    public function analisis_kebijakan($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $analisis_kebijakan = Analisis_kebijakan::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('analisis_kebijakan', 'tingkat', 'id'));
    }
    
    public function manajemen_sumber($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $manajemen_sumber = Manajemen_sumber::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('manajemen_sumber', 'tingkat', 'id'));
    }

    public function manajemen_resiko($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $manajemen_resiko = Manajemen_resiko::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('manajemen_resiko', 'tingkat', 'id'));
    }

    public function pengukuran_kinerja($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $pengukuran_kinerja = Pengukuran_kinerja::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('pengukuran_kinerja', 'tingkat', 'id'));
    }

    public function pengembangan_inovasi($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $pengembangan_inovasi = Pengembangan_inovasi::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('pengembangan_inovasi', 'tingkat', 'id'));
    }

    public function budaya_organisasi($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $budaya_organisasi = Budaya_organisasi::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('budaya_organisasi', 'tingkat', 'id'));
    }

    public function pengendalian_pelaksana($id)
    {
        $data       = explode("_", $id);
        $tingkat    = $data[0];
        $id         = $data[1];

        $pengendalian_pelaksana = Pengendalian_pelaksana::where(['user_id'=>$id,'tingkat'=>$tingkat])->get();
        return view('show_dokumen', compact('pengendalian_pelaksana', 'tingkat', 'id'));
    }


}
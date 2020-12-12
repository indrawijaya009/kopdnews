@extends('layouts.app')

@section('content')
<div class="card uper">
    <div class="card-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard Dokumen</h3>
                    <!-- <div class="col-md-4">
                        <a href="{{route('dashboard')}}">Kembali</a>
                    </div> -->
                </div>
                <!-- </br>
                <div>
                    <p>Kuisioner</p>
                    <div class="row">
                        @for ($i = 1; $i < 4; $i++) <div class="col-sm-4">
                            <div class="card">
                                <a href="{{url('show-data/kuisioner/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a>
                                <div class="container">
                                    <h4><b>Dokumen <?= $i ?></b></h4>
                                </div>
                            </div>
                    </div>
                    @endfor

                </div>
            </div> -->
                </br>



                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Dokumen 1</th>
                            <th scope="col">Dokumen 2</th>
                            <th scope="col">Dokumen 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Kuisioner</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/kuisioner/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Rancangan pembangunan</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/rancangan_pembangunan/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>penjaminan mutu</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/penjaminan_mutu/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>standar operasional</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/standar_operasional/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>pendidikan pelatihan</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/pendidikan_pelatihan/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>analisis kebijakan</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/analisis_kebijakan/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>manajemen sumber</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/manajemen_sumber/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>penjaminan resiko</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/manajemen_resiko/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>pengukuran kinerja</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/pengukuran_kinerja/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>pengembangan inovasi</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/pengembangan_inovasi/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>budaya organisasi</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/budaya_organisasi/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>pengendalian pelaksana</td>
                            @for ($i = 1; $i < 4; $i++) <td> <a
                                    href="{{url('show-data/pengendalian_pelaksana/'.$tingkat.'_'.$id.'/'.$i)}}"
                                    style="margin:10px;">Dokumen <?=$i ?></a></td>
                                @endfor
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        @endsection
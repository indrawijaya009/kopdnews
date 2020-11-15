@extends('layouts.app')

@section('content')
<div class="card uper">
    <div class="card-body">
        <div class="col-md-12">
            <h3>Show Data</h3>
        </div>
        <div class="col-md-4">
            <a href="{{route('dashboard')}}">Kembali</a> 
        </div>



        <body>
            <div class="row">

                <div class="col-md-12">
                    <br />
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="2">Nomer</th>
                                <th rowspan="2">Nama</th>
                                <th colspan="3">Tingkat</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kuesioner</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rancangan Pembangunan</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Penjaminan Mutu</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Standar Operasional</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pendidikan dan Pelatihan</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Analisis Kebijakan</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Manajemen Sumber</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Manajemen Resiko</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Pengukuran Kinerjas</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                                <td>lihat dokumen</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </body>


        @endsection
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
                                <th colspan="5">Tingkat</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kuesioner</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/kuisioner/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rancangan Pembangunan</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/rancangan_pembangunan/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Penjaminan Mutu</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/penjaminan_mutu/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Standar Operasional</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/standar_operasional/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pendidikan dan Pelatihan</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/pendidikan_pelatihan/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Analisis Kebijakan</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/analisis_kebijakan/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Manajemen Sumber</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/manajemen_sumber/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Manajemen Resiko</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/manajemen_resiko/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Pengukuran Kinerja</td>
                                @for ($i = 1; $i <= 5; $i++)
                                    <td><a href="{{url('dokumen.show/pengukuran_kinerja/'.$i."_".$id)}}">lihat dokumen</td>
                                @endfor
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </body>


        @endsection
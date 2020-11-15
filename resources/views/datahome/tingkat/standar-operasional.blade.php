@extends('layouts.app')

@section('content')
<div class="card uper">
    <div class="card-body">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">Dashboard</div>
</div>
             </br>
                <div>
                    <div class="row">
                        @php
                            $tingkat = Request::segment(2);
                        @endphp

                        @for ($i = 1; $i < 4; $i++)
                            <div class="col-sm-4">
                                <div class="card">
                                    <a href="{{url('standar-operasional-dokumen/'.$tingkat.'/'.$i)}}" style="margin:10px;">Dokumen  <?=$i ?></a>
                                    <div class="container">
                                        <h4><b>Dokumen <?= $i ?></b></h4>
                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>
                </br>

                    <!-- 
                            <ul>
                                <li> <a href="/kuisioner">kuisoner</a></li>
                                <li> <a href="/">rancangan pembangunan</a></li>
                                <li> <a href="/">penjaminan mutu</a></li>
                                <li> <a href="/">standar operasional</a></li>
                                <li> <a href="/">pendidikan dan pelatihan</a></li>
                                <li> <a href="/">analisi kebijakan</a></li>
                                <li> <a href="/">manajemen sumber</a></li>
                                <li> <a href="/">manajemen resiko</a></li>
                                <li> <a href="/">pengukuran kinerja</a></li>
                                <li> <a href="/">pengembangan inovasi</a></li>
                                <li> <a href="/">budaya organisasi</a></li>
                            </ul> -->
        </div>
    </div>
    @endsection
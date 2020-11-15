@extends('layouts.app')

@section('content')
<div class="card uper">
    <div class="card-body">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">Dashboard</div>
</div>
        <div class="col-md-4">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
             </br>
                <div>
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/kuisioner" style="margin:10px;">kuisoner</a>
                                <div class="container">
                                    <h4><b><a href="/kuisioner" style="margin:10px;">kuisoner</a></b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/rancangan-pembangunan" style="margin:10px;">rancangan pembangunan</a>
                                <div class="container">
                                    <h4><b><a href="/rancangan-pembangunan" style="margin:10px;">Rancangan pembangunan</a></b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/penjaminan-mutu" style="margin:10px;">penjaminan mutu</a>
                                <div class="container">
                                    <h4><b><a href="/penjaminan-mutu" style="margin:10px;">Penjaminan Mutu</a></b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/standar-operasional" style="margin:10px;">standar operasional</a>
                                <div class="container">
                                    <h4><b><a href="/standar-operasional" style="margin:10px;">Standar Operasional</a></b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/pendidikan-pelatihan" style="margin:10px;">pendidikan dan pelatihan</a>
                                <div class="container">
                                        <h4><b><a href="/pendidikan-pelatihan" style="margin:10px;">Pendidikan dan Pelatihan</a></b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/analisis-kebijakan" style="margin:10px;">analisis kebijakan</a>
                                <div class="container">
                                        <h4><b><a href="/analisis-kebijakan" style="margin:10px;">Analisis Kebijakan</a></b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                        </br>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/manajemen-sumber" style="margin:10px;">manajemen sumber</a>
                                <div class="container">
                                        <h4><b><a href="/manajemen-sumber" style="margin:10px;">Manajemen Sumber</a></b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/manajemen-resiko" style="margin:10px;">manajemen resiko</a>
                                <div class="container">
                                        <h4><b><a href="/manajemen-resiko" style="margin:10px;">Manajemen Resiko</a></b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <a href="/pengukuran-kinerja" style="margin:10px;">pengukuran kinerja</a>
                                <div class="container">
                                        <h4><b><a href="/pengukuran-kinerja" style="margin:10px;">Pengukuran Kinerja</a></b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
              
            </div>
        </div>
    </div>
    @endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div>
<ul>
    <li > <a href="/kuisioner">kuisoner</a></li>
    <li > <a href="/">rancangan pembangunan</a></li>
    <li > <a href="/">penjaminan mutu</a></li>
    <li > <a href="/">standar operasional</a></li>
    <li > <a href="/">pendidikan dan pelatihan</a></li>
    <li > <a href="/">analisi kebijakan</a></li>
    <li > <a href="/">manajemen sumber</a></li>
    <li > <a href="/">manajemen resiko</a></li>
    <li > <a href="/">pengukuran kinerja</a></li>
    <li > <a href="/">pengembangan inovasi</a></li>
    <li > <a href="/">budaya organisasi</a></li>
</ul>
</div>
            </div>
        </div>
    </div>
</div>
@endsection

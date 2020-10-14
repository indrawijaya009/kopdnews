@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kuisioner data</div>

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
    <li > <a href="/kuisionertingkatI">Dokumen  I</a></li>
    <li > <a href="/">Dokumen II</a></li>
    <li > <a href="/">Dokumen III</a></li>
    <li > <a href="/">Dokumen IV</a></li>
</ul>
        </div>
            </div>
    </div>
</div>
@endsection

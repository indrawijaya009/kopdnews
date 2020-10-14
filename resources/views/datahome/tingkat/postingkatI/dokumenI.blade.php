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

                    Dokumen I
    <a href="/download" style="background:#333ab7; color:fff; padding:12px; margin:5px; display:block; text-decoration:none;">Download Now</a>

            <form action="/uploads" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <p>
            <label for="photo">
                <input type="file" name="photo" id="photo">
            </label>
        </p>
        <button>Upload</button>
    </form>
                </div>
           
            <div>
        </div>
            </div>
    </div>
</div>
@endsection
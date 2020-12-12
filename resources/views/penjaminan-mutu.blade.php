@extends('layouts.app')

@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>
@php
$tingkat = Request::segment(2);
$no_dokumen = Request::segment(3);
@endphp
<div class="card uper">
    <div class="card-header">
        Upload data Tingkat <?= $tingkat ?> No Dokumen <?= $no_dokumen ?> penjaminan mutu
        <!-- <a href="/downloadFile" >
     <button class="btn btn-primary" style ="margin-left:10px;">download</button>
      </a> -->
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{route('penjaminan-mutu')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                @csrf
                <input type="hidden" name="tingkat" value="<?= $tingkat ?>">
                <input type="hidden" name="no_dokumen" value="<?= $no_dokumen ?>">

                <label> upload</label>
                <input type="file" class="form-control" id="name" name="file1" />
            </div>
            <div class="form-group">
                <label>tambah upload</label>
                <input type="file" class="form-control" id="datasatu" name="file2" />
            </div>
            <div class="form-group">
                <label>tambah upload</label>
                <input type="file" class="form-control" id="datadua" name="file3" />
            </div>
            <!-- <div class="form-group">
              <label >tambah upload</label>
              <input type="file" class="form-control" id="datatiga" name="datatiga"/>
          </div> -->
            <div class="form-group">
                <label>tambah upload</label>
                <input type="file" class="form-control" id="datatiga" name="file4" />
            </div>
            <button type="submit" class="btn btn-primary">Upload file </button>
        </form>
    </div>
</div>

@endsection
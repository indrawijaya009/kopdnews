@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Upload data Tingkat I  | download kuisioner  
    <a href="/downloadFile" >
     <button class="btn btn-primary" style ="margin-left:10px;">download</button>
      </a>
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
      <form method="post" action="{{route('userroless')}}" enctype="multipart/form-data">
      @csrf
         <div class="form-group">
      <label >Pilih role sesua user login</label>
             <select class="form-control" id="user_id" name="user_id">
      @foreach($kuisi as $d)
             <option value="{{$d->id}}">{{$d->name }}</option>
      @endforeach
             </select>
          </div>
  
          <div class="form-group">
              @csrf
              <label > upload</label>
              <input type="file" class="form-control" id="name" name="name"/>
          </div>
          <div class="form-group">
              <label >tambah upload</label>
              <input type="file" class="form-control" id="datasatu" name="datasatu"/>
          </div>
          <div class="form-group">
              <label >tambah upload</label>
              <input type="file" class="form-control" id="datadua" name="datadua"/>
          </div>
          <!-- <div class="form-group">
              <label >tambah upload</label>
              <input type="file" class="form-control" id="datatiga" name="datatiga"/>
          </div> -->
          <div class="form-group">
              <label >tambah multipel upload</label>
              <input type="file" class="form-control" id="datatiga" multiple name="datatiga"/>
          </div>
          <button type="submit" class="btn btn-primary">Upload file </button>
      </form>
  </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Item
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
      <form method="post" action="{{route('userroles')}}">
      @csrf
         <div class="form-group">
             <select class="form-control" name="user_id">
      @foreach($kuisi as $d)
             <option value="{{$d->id}}">{{$d->name }}</option>
      @endforeach
             </select>
          </div>
  
          <div class="form-group">
              @csrf
              <label >Tingkat 1:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label >Tingkat 2</label>
              <input type="text" class="form-control" name="datasatu"/>
          </div>
          <div class="form-group">
              <label >Tingkat 3</label>
              <input type="text" class="form-control" name="datadua"/>
          </div>
          <div class="form-group">
              <label >Tingkat 4</label>
              <input type="text" class="form-control" name="datatiga"/>
          </div>
          <button type="submit" class="btn btn-primary">Create Item</button>
      </form>
  </div>
</div>

@endsection
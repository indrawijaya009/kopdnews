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
      <form method="post" action="submit">
      <div class="form-group">
             <select class="form-control" name="name">
      @foreach($kuisi as $d)
             <option value="{{$d->id}}">{{$d->id }} | {{$d->name }}</option>
      @endforeach
             </select>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Tingkat 1:</label>
              <input type="text" class="form-control" name="tingkat_I"/>
          </div>
          <div class="form-group">
              <label for="name">Tingkat 2</label>
              <input type="text" class="form-control" name="tingkat_II"/>
          </div>
          <div class="form-group">
              <label for="name">Tingkat 3</label>
              <input type="text" class="form-control" name="user_id"/>
          </div>
          <button type="submit" class="btn btn-primary">Create Item</button>
      </form>
  </div>
</div>

@endsection
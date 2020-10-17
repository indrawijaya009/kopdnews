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
    <li > <a href="/kuisionertingkatI">Tingkat I</a></li>
    <li > <a href="/">Tingkat II</a></li>
    <li > <a href="/">Tingkat III</a></li>
    <li > <a href="/">Tingkat IV</a></li>
</ul>
        </div>

        <form method="post" action="submit">

<div class="form-group">
    @csrf
    <label for="name">Tingkat 1:</label>
    <input type="text" class="form-control" name="name"/>
</div>
<div class="form-group">
    <label for="name">Tingkat 2</label>
    <input type="text" class="form-control" name="datapem"/>
</div>
<button type="submit" class="btn btn-primary">Create Item</button>
</form>

            </div>
    </div>
</div>
@endsection

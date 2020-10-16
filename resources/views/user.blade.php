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

                <!-- @foreach($data as $show)
                <div>

                {{$show->name}}
                </br>
                </div>
                @endforeach -->

                <head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>User</th>
    <th>email</th>
    <th>view</th>
  </tr>
  @foreach($data as $show)
                <div> 
  <tr>
    <td>{{$show->name}}</td>
    <td>{{$show->email}}</td>
    <td>
    <a href="{{url('/edit')}" class="btn btn-xs btn-primary">Edit</a> |
    <a href="#" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
    </td>
  </tr>
                </div>
                @endforeach
</table>
</body>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="card uper">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form class="form-inline" method="post" action="/files" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="file" readonly class="form-control-plaintext" name="file" />

                    </div>
                    <button type="submit" value="Submit" class="btn btn-primary mb-2">Upload Kuisioner</button>
                </form>
            </div>
            <div class="col-md-6">
                <!-- <div class="card-header">Dashboard</div> -->
                <a href="{{url('regis')}}" class="btn btn-primary" style="margin-left:42%;">Add user</a>

            </div>
        </div>

        <body>

            <div class="row">

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <div class="col-md-12">
                    <br />
                    <table class="table table-bordered">

                        <!-- Delet modal -->
                        <div>
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Launch demo
                            </button> -->

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> User Update</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit modal -->
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ondata as $key => $users)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>
                                    <a href="{{route('dashboard.show', ['id' => $users->id])}}"
                                        class="btn btn-primary">Show data</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Edit
                                    </button>
                                    <a href="{{route('dashboard.destroy', ['id' =>$users->id])}}" class="btn btn-danger"
                                        onclick="confirm('data akan dihapus?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </body>


        @endsection
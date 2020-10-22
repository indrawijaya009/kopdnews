@extends('layouts.app')

@section('content')
<div class="card uper">
    <div class="card-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
            </div>
            </br>
            <div>
                <div class="row">

                    <div class="col-sm-4">
                        <div class="card">
                            <a href="/kuisionertingkatI" style="margin:10px;">kuisoner tingkat 1</a>
                            <div class="container">
                                <h4><b>John Doe</b></h4>
                                <p>Architect & Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="/kuisioner" style="margin:10px;">kuisoner tingkat 2</a>
                            <div class="container">
                                <h4><b>John Doe</b></h4>
                                <p>Architect & Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="/kuisioner" style="margin:10px;">kuisoner tingkat 3</a>
                            <div class="container">
                                <h4><b>John Doe</b></h4>
                                <p>Architect & Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>
                </br>

                <!-- <a href="/downloadFile" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download  </a>

                <form method="post" action="{{route('post_rcppemba')}}" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>tambah multipel upload</label>
                        <input type="file" class="form-control" id="name" multiple name="name" />
                    </div>
                    <div class="form-group">
                        <label>tambah multipel upload</label>
                        <input type="file" class="form-control" id="datapem" multiple name="datapem" />
                    </div>
                    <button type="submit" class="btn btn-primary">Upload file </button>
                </form> -->

            </div>
        </div>
    </div>
    @endsection
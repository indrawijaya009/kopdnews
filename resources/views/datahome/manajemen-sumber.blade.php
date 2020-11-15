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

                    @for ($i = 1; $i < 4; $i++)
                     
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="{{url('/manajemen-sumber/'.$i)}}" style="margin:10px;">Manajemen Sumber Tingkat <?= $i ?></a>
                            <div class="container">
                                <h4><b>Manajemen Sumber Tingkat <?= $i ?></b></h4>
                            </div>
                        </div>
                    </div>
                    @endfor
                    
                   
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
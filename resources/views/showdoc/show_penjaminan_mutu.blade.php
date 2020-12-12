@extends('layouts.app')

@section('content')
<div class="card uper">
    <div class="card-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Show Data Penjaminan Mutu</div>
            </div>
            </br>
            <div class="container">

                <table class="table table-bordered">
                    <p>Name file 1</p>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    @foreach ($penjaminan_mutu as $file1)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $file1->id }}</th>
                            <td>{{ $file1->file1 }}</td>
                            <td> <a href="{{asset('storage/penjaminan_mutu/'.$file1['file1'])}}" target="_blank"
                                    class="btn btn-primary">Download</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <table class="table table-bordered">
                    <p>Name file 2</p>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    @foreach ($penjaminan_mutu as $file2)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $file2->id }}</th>
                            <td>{{ $file2->file2 }}</td>
                            <td> <a href="{{asset('storage/penjaminan_mutu/'.$file2['file2'])}}" target="_blank"
                                    class="btn btn-primary">Download</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <table class="table table-bordered">
                    <p>Name file 3</p>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    @foreach ($penjaminan_mutu as $file3)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $file3->id }}</th>
                            <td>{{ $file3->file3 }}</td>
                            <td> <a href="{{asset('storage/penjaminan_mutu/'.$file3['file3'])}}" target="_blank"
                                    class="btn btn-primary">Download</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <table class="table table-bordered">
                    <p>Name file 4</p>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    @foreach ($penjaminan_mutu as $file4)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $file4->id }}</th>
                            <td>{{ $file4->file4 }}</td>
                            <td> <a href="{{asset('storage/penjaminan_mutu/'.$file4['file4'])}}" target="_blank"
                                    class="btn btn-primary">Download</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
        </br>

        <!-- 
                            <ul>
                                <li> <a href="/penjaminan_mutu">kuisoner</a></li>
                                <li> <a href="/">rancangan pembangunan</a></li>
                                <li> <a href="/">penjaminan mutu</a></li>
                                <li> <a href="/">standar operasional</a></li>
                                <li> <a href="/">pendidikan dan pelatihan</a></li>
                                <li> <a href="/">analisi kebijakan</a></li>
                                <li> <a href="/">manajemen sumber</a></li>
                                <li> <a href="/">manajemen resiko</a></li>
                                <li> <a href="/">pengukuran kinerja</a></li>
                                <li> <a href="/">pengembangan inovasi</a></li>
                                <li> <a href="/">budaya organisasi</a></li>
                            </ul> -->
    </div>
</div>
@endsection
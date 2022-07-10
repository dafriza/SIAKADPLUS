@extends('Template.template')
@section('Content')
<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Course</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Studi</th>
                                    <th>Nama Course</th>
                                    <th>Tanggal Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->nim}}</td>
                                    <td>{{$d->studi}}</td>
                                    <td>{{$d->title}}</td>
                                    <td>{{$d->tanggal_pembayaran}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

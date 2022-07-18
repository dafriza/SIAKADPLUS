@extends('Template.template')
@section('Content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Mahasiswa</h6>
                        <a href="/admin/createForm" class="btn btn-success mb-5">+ Create</a>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>PIC</th>
                                        <th>Studi</th>
                                        <th>No HP</th>
                                        <th>Email Kampus</th>
                                        <th>Nama Course</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $d->nama }}</td>
                                            <td>{{ $d->nim }}</td>
                                            <td>{{ $d->PIC }}</td>
                                            <td>{{ $d->studi }}</td>
                                            <td>{{ $d->phone }}</td>
                                            <td>{{ $d->email_kampus }}</td>
                                            <td>{{ $d->title }}</td>
                                            <td>
                                                <a href="/admin/editForm/{{$d->id_mahasiswa}}" class="btn btn-success">
                                                    Edit
                                                </a>
                                                <a href="/admin/delForm/{{$d->id_mahasiswa}}" class="btn btn-danger">
                                                    Delete
                                                </a>
                                            </td>
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

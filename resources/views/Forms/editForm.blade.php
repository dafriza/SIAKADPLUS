@extends('Template.template')
@section('Content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Form</h6>
                    <form action="/admin/updateForm" method="post">
                        @csrf
                        <input type="hidden" name="id_mahasiswa" value="{{$d[0]->id_mahasiswa}}">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama"
                                value="{{ $d[0]->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim"
                                value="{{ $d[0]->nim }}" required>
                        </div>
                        <div class="form-group">
                            <label for="pic">PIC</label>
                            <input type="text" class="form-control" name="pic"
                                value="{{ $d[0]->PIC }}" required>
                        </div>
                        <div class="form-group">
                            <label for="studi">Studi</label>
                            <input type="text" class="form-control" name="studi"
                                value="{{ $d[0]->studi }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">No HP</label>
                            <input type="text" class="form-control" name="phone"
                                value="{{ $d[0]->phone }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email_kampus">Email Kampus</label>
                            <input type="text" class="form-control"
                                name="email_kampus" value="{{ $d[0]->email_kampus }}" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Nama Course</label>
                            <select name="title" class="form-control course">
                                <option value="{{ $d[0]->id_course }}">
                                    {{ $d[0]->title }}</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

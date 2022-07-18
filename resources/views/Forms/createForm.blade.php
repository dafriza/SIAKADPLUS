@extends('Template.template')
@section('Content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Create Form</h6>
                        <form action="/admin/insertForm" method="post">
                            @csrf
                            <input type="hidden" name="id_mahasiswa">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="number" class="form-control" name="nim" value="xxx10370311xxx" required>
                            </div>
                            <div class="form-group">
                                <label for="pic">PIC</label>
                                <input type="number" class="form-control" name="pic" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="studi">Studi</label>
                                <input type="text" class="form-control" name="studi" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">No HP</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="email_kampus">Email Kampus</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="email_kampus">Email Kampus</label>
                                <input type="text" class="form-control" name="email_kampus" required>
                            </div>
                            <div class="form-group">
                                <label for="email_kampus">Web</label>
                                <input type="text" class="form-control" name="web" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Nama Course</label>
                                <select name="title" class="form-control course">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Nama Domisili</label>
                                <select name="domisili" class="form-control course">
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

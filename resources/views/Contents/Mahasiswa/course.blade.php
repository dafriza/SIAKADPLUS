@extends('Template.Mahasiswa.Template')
@section('Content')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">{{ $courseSelect->title }}</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"
                    id="dashboardDate">
                    <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">{{ $courseSelect['sub_title'] }}</h6>
                        </div>
                        <br>
                        <div class="row">
                            <div class=" col-md-3 col-lg-3 col-xl-3">
                                <img src="{{ $courseSelect['img_title'] }}" alt="" width="250" height="150"
                                    class="img-fluid">
                            </div>
                            <div class="col mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-2">{{ $courseSelect['img_content'] }}</p>
                                    </div>
                                    <div class="col py-4">
                                        <h5 class="mb-2"> Price : {{ $courseSelect['harga'] }}</h5>
                                        <button class="btn btn-success "data-toggle="modal" data-target="#buyModal">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 py-5" style="text-align:center">
                                <button class="btn btn-secondary" disabled>
                                    <h3>Mindmap</h3>
                                </button>
                            </div>
                            <div class="col-12" style="text-align:center">
                                <img src="{{ $courseSelect['img_mindmap'] }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="buyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="buyModalLabel">{{$courseSelect['title']}} Course</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/mahasiswa/buyCourse/{{$courseSelect['id_course']}}" class="forms-sample" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">NIM</label>
                        <input type="number" class="form-control" name="nim" autofocus value="{{$data['nim']}}">
                    </div>
                    <div class="form-group">
                        <label for="pic">PIC</label>
                        <input type="password" class="form-control" name="pic" autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">Buy Course</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    {{-- End of Modal --}}
@endsection

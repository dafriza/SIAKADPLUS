@extends('Template.Mahasiswa.Template')
@section('Content')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard, {{$data['nama']}}!</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"
                id="dashboardDate">
                <span class="input-group-addon bg-transparent"><i data-feather="calendar"
                        class=" text-primary"></i></span>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">Course Buyed</h6>
                </div>
                <br>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2">{{$count_course['jml'] ?? 0}}</h3>
                    {{-- <div class="d-flex align-items-baseline">
                      <p class="text-success">
                        <span>+3.3%</span>
                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                      </p>
                    </div> --}}
                  </div>
                  {{-- <div class="col-6 col-md-12 col-xl-7">
                    <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
    </div> <!-- row -->

    <div class="row">
        @foreach ($course as $val)
        <div class="col-3 grid-margin stretch-card">
            <div class="card">
                <img src="{{$val['img_title']}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$val['title']}}</h4>
                    <p class="card-description">{{$val['description']}}</p>
                    <a href="{{$val['link']}}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>
@endsection

@extends('Template.Mahasiswa.Template')
@section('Content')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin" onload="test()">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard, {{ $data['nama'] }}!</h4>
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
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Course Buyed</h6>
                        </div>
                        <br>
                        <div class="row">
                            <div class=" col-md-12 col-xl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#0d6efd"
                                    class="bi bi-book-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg>
                            </div>
                            <div class="col-6 col-md-12 col-xl-6 mt-3">
                                <h4 class="mb-2">{{ count($count_course) ?? 0 }} Buyed</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Account Name</h6>
                        </div>
                        <br>
                        <div class="row">
                            <div class=" col-md-12 col-xl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#198754"
                                    class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                            <div class="col-6 col-md-12 col-xl-6 mt-1">
                                <h4 class="mb-2">{{ $data['nama'] ?? 0 }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Major</h6>
                        </div>
                        <br>
                        <div class="row">
                            <div class=" col-md-12 col-xl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#dc3545"
                                    class="bi bi-laptop-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 2A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                                </svg>
                            </div>
                            <div class="col-6 col-md-12 col-xl-6 mt-1">
                                <h4 class="mb-2">Studying {{ $data['studi'] ?? 0 }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            @foreach ($course as $val)
                <div class="col-3 grid-margin stretch-card">
                    <div class="card">
                        <img src="{{ $val['img_title'] }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $val['title'] }}</h4>
                            <p class="card-description">{{ $val['description'] }}</p>
                            {{-- check count_course id_course == $course id_course --}}
                            @if ($val['status']=='true')
                                <button class="btn btn-primary" disabled>Learn More</button>
                            @else
                                <a class="btn btn-primary" href="/mahasiswa/course/{{$val['id_course']}}">Learn More</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

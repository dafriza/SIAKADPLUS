@extends('Template.Mahasiswa.Template')
@section('Content')
    <div class="page-content">

        <div class="profile-page tx-13">
            {{-- <div class="row">
                <div class="col-12 grid-margin">
                    <div class="profile-header">
                        <div class="cover">
                            <div class="gray-shade"></div>
                            <figure>
                                <img src="https://via.placeholder.com/1148x272" class="img-fluid" alt="profile cover">
                            </figure>
                            <div class="cover-body d-flex justify-content-between align-items-center">
                                <div>
                                    <img class="profile-pic" src="https://ui-avatars.com/api/?name={{$data->nama}}&background=00ADEF&color=fff" alt="profile">
                                    <span class="profile-name">{{$data->nama}}</span>
                                </div>
                                <div class="d-none d-md-block">
                                    <button class="btn btn-primary btn-icon-text btn-edit-profile">
                                        <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="header-links">
                            <ul class="links d-flex align-items-center mt-3 mt-md-0">
                                <li class="header-link-item d-flex align-items-center active">
                                    <i class="mr-1 icon-md" data-feather="columns"></i>
                                    <a class="pt-1px d-none d-md-block" href="#">Timeline</a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <i class="mr-1 icon-md" data-feather="user"></i>
                                    <a class="pt-1px d-none d-md-block" href="#">About</a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <i class="mr-1 icon-md" data-feather="users"></i>
                                    <a class="pt-1px d-none d-md-block" href="#">Friends <span
                                            class="text-muted tx-12">3,765</span></a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <i class="mr-1 icon-md" data-feather="image"></i>
                                    <a class="pt-1px d-none d-md-block" href="#">Photos</a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <i class="mr-1 icon-md" data-feather="video"></i>
                                    <a class="pt-1px d-none d-md-block" href="#">Videos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row profile-body">
                <!-- left wrapper start -->
                <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class=" mb-0">My Profile</h3>
                                <hr>
                            </div>
                            <p>Hi! I'm {{$data->nama}} the Junior {{$data->studi}} at SIAKAD+. We hope you enjoy the platform education</p>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Name:</label>
                                <p class="text-muted">{{$data->nama}}</p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">NIM:</label>
                                <p class="text-muted">{{$data->nim}}</p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined:</label>
                                <p class="text-muted">{{$data->created_at}}</p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                                <p class="text-muted">{{$data->email}}</p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Website:</label>
                                <p class="text-muted">{{$data->web}}</p>
                            </div>
                            <div class="mt-3 d-flex social-links">
                                <a href="javascript:;"
                                    class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon github">
                                    <i data-feather="github" data-toggle="tooltip" title="github.com/{{$data->nama}}"></i>
                                </a>
                                <a href="javascript:;"
                                    class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">
                                    <i data-feather="twitter" data-toggle="tooltip" title="twitter.com/{{$data->nama}}"></i>
                                </a>
                                <a href="javascript:;"
                                    class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">
                                    <i data-feather="instagram" data-toggle="tooltip" title="instagram.com/{{$data->nama}}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-md-block col-md-4 col-xl-8 right-wrapper">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class=" mb-0">Milestone</h3>
                            </div>
                            @foreach ($count_course as $key => $val)
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">{{$val->title}}</label>
                                <div class="progress">
                                    <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="@php
                                        echo "width: ".rand(10,80)."%";
                                    @endphp" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            @endforeach
                            <div class="row mt-3">
                                @foreach ($count_course as $val)
                                <div class="col">
                                    <div class="card">
                                        <img src="{{$val->img_title}}" alt="" class="img-fluid" width="100%">
                                        <div class="card-header d-flext justify-content-between">
                                            {{$val->title}} &nbsp&nbsp&nbsp
                                            <a class="btn btn-primary" href="/mahasiswa/learn/{{$val->id_course}}">Detail</a>
                                        </div>
                                        {{-- <div class="card-body">
                                            @php
                                                echo substr($val->img_content,0,100)."...";
                                            @endphp
                                        </div> --}}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 d-none d-md-block col-md-4 col-xl-12 middle-wrapper">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h3 class=" mb-0">Edit Profile</h3>
                            </div>
                            <div class="py-3"></div>
                            <form action="/mahasiswa/updateProfile" method="post" class="forms-sample">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control col" value="{{$data->nama}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">NIM</label>
                                            <input type="text" class="form-control col" value="{{$data->nim}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">PIC</label>
                                            <input type="text" class="form-control col" value="@php
                                                echo "xxxxx".substr($data->PIC,5,8);
                                            @endphp" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Studi</label>
                                            <input type="text" class="form-control col" value="{{$data->studi}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control col" value="{{$data->phone}}" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control col" value="{{$data->email}}" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email Kampus</label>
                                            <input type="text" class="form-control col" value="{{$data->email_kampus}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Web</label>
                                            <input type="text" class="form-control col" value="{{$data->web}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- left wrapper end -->
                <!-- middle wrapper start -->
                {{-- <div class="col-md-8 col-xl-6 middle-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                                alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">1 min ago</p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="meh" class="icon-sm mr-2"></i> <span
                                                        class="">Unfollow</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="corner-right-up" class="icon-sm mr-2"></i> <span
                                                        class="">Go to
                                                        post</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="share-2" class="icon-sm mr-2"></i> <span
                                                        class="">Share</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="copy" class="icon-sm mr-2"></i> <span
                                                        class="">Copy
                                                        link</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                                    <img class="img-fluid" src="https://via.placeholder.com/513x342" alt="">
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex post-actions">
                                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                            <i class="icon-md" data-feather="heart"></i>
                                            <p class="d-none d-md-block ml-2">Like</p>
                                        </a>
                                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                            <i class="icon-md" data-feather="message-square"></i>
                                            <p class="d-none d-md-block ml-2">Comment</p>
                                        </a>
                                        <a href="javascript:;" class="d-flex align-items-center text-muted">
                                            <i class="icon-md" data-feather="share"></i>
                                            <p class="d-none d-md-block ml-2">Share</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card rounded">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                                alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">5 min ago</p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenuButton3"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="meh" class="icon-sm mr-2"></i> <span
                                                        class="">Unfollow</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="corner-right-up" class="icon-sm mr-2"></i> <span
                                                        class="">Go to
                                                        post</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="share-2" class="icon-sm mr-2"></i> <span
                                                        class="">Share</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                        data-feather="copy" class="icon-sm mr-2"></i> <span
                                                        class="">Copy
                                                        link</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.</p>
                                    <img class="img-fluid" src="https://via.placeholder.com/513x342" alt="">
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex post-actions">
                                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                            <i class="icon-md" data-feather="heart"></i>
                                            <p class="d-none d-md-block ml-2">Like</p>
                                        </a>
                                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                            <i class="icon-md" data-feather="message-square"></i>
                                            <p class="d-none d-md-block ml-2">Comment</p>
                                        </a>
                                        <a href="javascript:;" class="d-flex align-items-center text-muted">
                                            <i class="icon-md" data-feather="share"></i>
                                            <p class="d-none d-md-block ml-2">Share</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- middle wrapper end -->
                <!-- right wrapper start -->
                {{-- <div class="d-none d-xl-block col-xl-3 right-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h6 class="card-title">latest photos</h6>
                                    <div class="latest-photos">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure class="mb-0">
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure class="mb-0">
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure class="mb-0">
                                                    <img class="img-fluid" src="https://via.placeholder.com/67x67"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h6 class="card-title">suggestions for you</h6>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                                alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                                title="Connect"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                                alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                                title="Connect"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                                alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                                title="Connect"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                                alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                                title="Connect"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                                alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                                title="Connect"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                                alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip"
                                                title="Connect"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- right wrapper end -->
            </div>
        </div>

    </div>
@endsection

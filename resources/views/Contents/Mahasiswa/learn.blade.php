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
        @for ($i = 1; $i <= 5; $i++)
            <div class="row">
                <div class="col grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">{{ $courseSelect['sub_title'] }} </h6>
                            </div>
                            <br>
                            <div class="row">
                                <div class=" col-md-3 col-lg-3 col-xl-4 mb-3">
                                    <img src="{{ $courseSelect['img_title'] }}" alt="" class="img-fluid">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-12">
                                            <button
                                                class="btn btn-outline-primary rounded-pill btn-md mb-3">&nbsp&nbsp&nbspStudy&nbsp&nbsp&nbsp</button>
                                            <h4>{{ $courseSelect['title'] }} {{ $i }}</h4>
                                        </div>
                                        <div class="col-12 py-4">
                                            <p>{{ $courseSelect['img_content'] }}</p>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-primary p-3">Learn More</button>
                                            <div class="px-3"></div>
                                            <button
                                                class="btn btn-outline-primary">&nbsp&nbsp&nbspDetail&nbsp&nbsp&nbsp</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Final Project</h6>
                            {{-- {{count([$learn])}} --}}
                            {{-- @php
                            print_r(explode('/', $learn->link_youtube)[3])
                            @endphp --}}
                        </div>
                        <br>
                        @if (count($learn) > 0)

                            <div class="row">
                                <div class=" col-md-3 col-lg-3 col-xl-6 mb-3">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/{{ explode('/', $learn[0]->link_youtube)[3] }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        class="" allowfullscreen></iframe>
                                </div>
                                <div class="px-4"></div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-outline-primary rounded-pill btn-md mb-3">&nbsp&nbspFinal
                                                Demo&nbsp&nbsp</button>
                                            <h4>{{ $learn[0]->judul }}</h4>
                                        </div>
                                        <div class="col-12 py-4">
                                            <p>{{ $learn[0]->deskripsi }}</p>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-primary p-3">Learn More</button>
                                            <div class="px-3"></div>
                                            <a href="{{ $learn[0]->link_youtube }}" target="_blank"
                                                class="btn btn-outline-primary py-3">&nbsp&nbsp&nbspDetail&nbsp&nbsp&nbsp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title"><button class="btn btn-outline-primary rounded-pill">How
                                                    to
                                                    submit video</button></h4>
                                            <div id="wizardVertical">
                                                <h2>First Step</h2>
                                                <section>
                                                    <h4>Find the best ideas for your project!</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem iure
                                                        dolorum, corrupti, similique eum autem culpa possimus, odio hic eius
                                                        voluptatem? Exercitationem provident debitis veritatis ad maxime,
                                                        eius aut est!</p>
                                                </section>

                                                <h2>Second Step</h2>
                                                <section>
                                                    <h4>Determine your title</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
                                                        assumenda facilis expedita accusamus enim minus rerum! Ducimus,
                                                        beatae corporis numquam possimus pariatur, inventore alias ut
                                                        dolores cum ipsa nulla optio?</p>
                                                </section>

                                                <h2>Third Step</h2>
                                                <section>
                                                    <h4>Brainstorm</h4>
                                                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum.
                                                        Sed
                                                        eget
                                                        nisl at justo condimentum dapibus. Fusce eros justo,
                                                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor.
                                                        Vestibulum
                                                        eleifend varius ullamcorper. Aliquam erat volutpat.
                                                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed
                                                        elementum
                                                        dui commodo lectus sollicitudin in auctor mauris
                                                        venenatis.</p>
                                                </section>

                                                <h2>Forth Step</h2>
                                                <section>
                                                    <h4>Create your project!</h4>
                                                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros
                                                        posuere
                                                        mauris vehicula vulputate. Aliquam sed sem tortor.
                                                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed
                                                        consequat
                                                        vestibulum purus, imperdiet varius est pellentesque vitae.
                                                        Suspendisse consequat cursus eros, vitae tempus enim euismod non.
                                                        Nullam
                                                        ut
                                                        commodo tortor.</p>
                                                </section>

                                                <h2>Fifth Step</h2>
                                                <section>
                                                    <h4>Upload Youtube!</h4>
                                                    <form action="/mahasiswa/uploadProject/{{ $courseSelect['id_course'] }}"
                                                        class="forms-sample" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="">Judul</label>
                                                            <input type="text" class="form-control" name="judul">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Deskripsi</label>
                                                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Link Youtube</label>
                                                            <input type="text" class="form-control" name="link_youtube">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--
 session_start();
 if(!isset($_SESSION['data_mahasiswa'])){
    header("Location: https://siakadplus.com/");
} --}}
{{-- include "../config/get_course.php";
include "../template/header.php"; --}}
@extends('Guest.template.masterfile')
@section('content')
                <!-- Content Section -->
                <div class="section-content">
                    <h3 style="text-align: center; margin-bottom:20px;">Hot Course!</h3>
                    <div class="news">
                        @foreach ($data_course as $data)

                        <div class="detail-news">
                            <img src="<?= $data->img_content;?>" alt="">
                            <br>
                            <span><?= explode(" ",$data->title)[0];?></span>
                            <br>
                            <a href="#" onclick="link('<?=$data->id_course?>');" style="text-decoration:none">
                                <button>
                                    Enroll Now!
                                </button>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Of Content Section -->
                <script>
                    function link(id){
                        console.log("id =>"+id);
                        window.location.href = "../view/course-detail.php?id="+id;
                    }
                </script>
{{-- <?php include '../template/footer.php'?> --}}
@endsection

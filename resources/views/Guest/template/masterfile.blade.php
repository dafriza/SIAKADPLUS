{{-- <?php
$data_mahasiswa = json_decode($_SESSION['data_mahasiswa']);
?> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKADPLUS</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/siakad/assets/sidebar.css"> -->
    <link rel="stylesheet" href="{{ asset('/assets_guest/sidebar.css') }}">
    <!-- <link rel="stylesheet" href="/siakad/assets/style.css"> -->
    <link rel="stylesheet" href="{{ asset('/assets_guest/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets_guest/table.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets_guest/calculator.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script src="{{ asset('/assets_guest/table.js') }}"></script>

    <script src="{{ asset('/assets_guest/calculator.js') }}"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SIAKAD+</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menu</p>
                <li class="">
                    <!-- <a href="/siakad/view/" data-toggle="collapse" aria-expanded="false" class="">Home</a> -->
                    <a href="/mhs" aria-expanded="false" class="">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <!-- <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li> -->
            </ul>
        </nav>
        <!-- End Of Sidebar -->

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>SIAKAD+</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Menu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Home</a>
                                        <a class="dropdown-item" href="#kategori">Category</a>
                                        <a class="dropdown-item" href="#profile">Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mhs/calc">Calculator</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mhs/table">Table List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <?php
                                    // echo $data_mahasiswa[0]->nama;
                                    // print_r( json_decode($_SESSION['data_mahasiswa'])[0]->nama);
                                    ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://siakadplus.com/config/logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section>
                <!-- Bg Section -->
                <div class="section-img" id="home">
                    <img src="https://img.freepik.com/free-vector/colourful-science-education-background_23-2148496497.jpg?w=2000"
                        alt="">
                    <div class="headline">
                        <h2>SIAKAD+</h2>
                        <p>Platform Digital yang dikembangkan untuk Mahasiswa dan Dosen bertemu. Dimana bisa membuat
                            kelas dan bergabung bersama. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                            eaque similique error quia aliquid cumque saepe beatae deserunt, </p>
                    </div>
                </div>
                <!-- End Of Bg Section -->

                @yield('content')

                <!-- Category Section -->
                <div class="section-category" id="kategori">
                    <h3 style="text-align: center">Course List</h3>
                    <!-- <a href=""> -->
                    <!-- <a href="/siakad/view/course-php.php"> -->
                    <a href="/view/course-php.php">
                        <button>
                            <b>PHP</b>
                        </button>
                    </a>

                    <a href="">
                        <button>
                            <b>Javascript</b>
                        </button>
                    </a>

                    <a href="">
                        <button>
                            <b>SQL</b>
                        </button>
                    </a>

                    <br>

                    <a href="/view/course-python.php">
                        <!-- <a href="/siakad/view/course-python.php"> -->
                        <button>
                            <b>Python</b>
                        </button>
                    </a>

                    <a href="">
                        <button>
                            <b>JQuery</b>
                        </button>
                    </a>

                    <!-- <a href=""> -->
                    <a href="/view/course-java.php">
                        <!-- <a href="/siakad/view/course-java.php"> -->
                        <button>
                            <b>Java</b>
                        </button>
                    </a>
                </div>
                <!-- End Of Category Section -->

                <!-- Profile Section -->
                <div class="section-profile" id="profile">
                    <!-- profle image -->
                    <div class="profile-img">
                        <img src="https://www.freeiconspng.com/uploads/beautiful-teacher-png-hd-22.png"
                            alt="">
                        <!-- profile text -->
                        <div class="profile-text">
                            <h2>SIAKAD+</h2>
                            <h4>Platform Kelas dan Course Online #1</h4>
                            <button>Join Now !</button>
                        </div>
                        <!-- End Of profile text -->
                    </div>
                    <!-- End Of profle image -->
                </div>
                <!-- End Of Profile Section -->
            </section>

            <footer>
                <!-- Footer Logo -->
                <div class="footer-logo">
                    <!-- Instagram -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                    <!-- End Of Instagram -->

                    <!-- Facebook -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                    <!-- End Of Facebook -->

                    <!-- Twitter -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                        class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                    <!-- End Of Twitter -->
                </div>
                <!-- End Of Footer Logo -->
                <!-- copyright -->
                <div class="copyright">
                    <p>Copyright &copy; 2022 SIAKAD+</p>
                </div>
                <!-- End Of copyright -->
            </footer>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<!-- Search -->
<script>
    window.addEventListener('load', function() {
        let text = document.getElementById("search-column");
        text.value = "";
    });

    let search = document.getElementById('search');
    search.addEventListener('click', function() {
        let text = document.getElementById("search-column");
        text.value;
        if (text.value == "") {
            alert("Masukkan kata kunci untuk mencari");
        } else {
            if (!(text.value == "java" || text.value == "python" || text.value == "php")) {
                alert("Kata kunci tidak ditemukan");
                let text = document.getElementById("search-column");
                text.value = "";
            } else {
                window.location.href = "/view/course-" + text.value + ".php";
            }
        }
        // console.log("hehe");
    });
</script>
<!-- End Of Search -->

</html>

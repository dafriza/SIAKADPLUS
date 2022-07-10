<?php
session_start();
include "../config/course_detail.php" ?>
<?php
$class = ['Beginner', 'Intermediate', 'Advanced'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD</title>
    <!-- Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- End Of Bootstrap 4.6 -->

    <!-- Link CSS -->
    <!-- Use Domain -->
    <link rel="stylesheet" href="https://siakadplus.com/assets/style.css">
    <!-- #domain -->
    <!-- Use Localhost -->
    <!-- <link rel="stylesheet" href="/siakad/assets/style.css" type="text/css"> -->
    <!-- #localhost -->
    <!-- End Of Link CSS -->
    <link rel="stylesheet" href="../assets/modal.css">
</head>

<body>
    <header>
        <!-- Logo -->
        <a href="/view" style="color:black">
            <!-- <a href="/siakad/view" style="color:black"> -->
            <h1>SIAKAD+</h1>
        </a>
        <!-- End of Logo -->

        <!-- Title page -->
        <!-- <h3>Home</h3> -->
        <!-- End Of Title page -->

        <!-- Dropdown -->
        <div class="dropdown">
            <a class="btn dropdown-toggle" hsref="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#home">Home</a>
                <a class="dropdown-item" href="#kategori">Kategori</a>
                <a class="dropdown-item" href="#profile">Profile</a>
            </div>
        </div>
        <!-- End Of Dropdown -->

        <!-- Search -->
        <a href="#" id="search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#49c9fb" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </a>
        <input type="text" id="search-column">
        <!-- End Of Search -->
    </header>

    <section>
        <!-- Bg Section -->
        <div class="section-img" id="home">
            <!-- <img src="https://img.freepik.com/free-vector/colourful-science-education-background_23-2148496497.jpg?w=2000" alt=""> -->
            <img src="<?= $data[0]['img_title']; ?>" alt="">
            <div class="headline">
                <h2><?= $data[0]['title'] ?></h2>
                <p><?= $data[0]['sub_title']; ?></p>
                <br>
                <!-- <a href="https://siakadplus.com/view/get_form.php?id=<?= $id ?>"> -->
                <a href="#" id="modal" data-toggle="modal" data-target="#exampleModal">
                    <button>
                        Enroll Now
                    </button>
                </a>
                <!-- Modal Section -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buy Course</h5>
                                <!-- Button x -->
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    &nbsp<span aria-hidden="true">&times;</span>&nbsp
                                </button> -->
                                <!-- End of Button x -->
                            </div>
                            <div class="modal-body">
                                <form action="../config/get_form.php" method="post">
                                    <label for="nama_kursus">Nama</label>
                                    <br>
                                    <input type="text" id="nama_kursus" name="nama" required>
                                    <br><br>

                                    <label for="pilihan_skill">Tingkat Skill anda</label>
                                    <br>
                                    <input type="radio" name="tingkat_skill" id="pilihan_skill" class="pilihan_skill" value="beginner" required>Beginner
                                    <input type="radio" name="tingkat_skill" id="pilihan_skill" class="pilihan_skill" value="intermediate" required>Intermediate
                                    <input type="radio" name="tingkat_skill" id="pilihan_skill" class="pilihan_skill" value="advance" required>Advance
                                    <br>

                                    <label for="pilihan_project">Tingkat Project anda</label>
                                    <br>
                                    <input type="checkbox" name="tingkat_project[]" id="pilihan_project" value="learner">Learner
                                    <input type="checkbox" name="tingkat_project[]" id="pilihan_project" value="university">University
                                    <input type="checkbox" name="tingkat_project[]" id="pilihan_project" value="professional">Professional
                                    <br>

                                    <label for="alasan">Mengapa memilih course ini?</label>
                                    <br>
                                    <textarea name="alasan" id="alasan" cols="30" rows="3" required></textarea>
                                    <br>
                                    <input type="hidden" name="val_course" value="<?= $id;?>">

                                    <button type="submit" class="btn btn-primary">&nbsp&nbsp&nbspBuy&nbsp&nbsp&nbsp</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">&nbsp&nbsp&nbsp Close &nbsp&nbsp&nbsp</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Of Modal Section -->
            </div>
        </div>
        <!-- End Of Bg Section -->

        <!-- Content Section -->
        <div class="section-content" id="kategori">
            <h3 style="text-align: center; margin-bottom:20px;">Hot Course!</h3>
            <div class="news">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="detail-news">
                        <img src="<?= $data[0]['img_content']; ?>" alt="">
                        <br>
                        <span><?= $class[$i]; ?></span>
                        <br>
                        <button>
                            Enroll Now!
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- End Of Content Section -->

        <!-- Category Section -->
        <div class="section-category">
            <h3 style="text-align: center">MindMap</h3>
            <img src="<?= $data[0]['mindmap']; ?>" width="55%" height="auto" alt="">
        </div>
        <!-- End Of Category Section -->

        <!-- Profile Section -->
        <div class="section-profile" id="profile">
            <!-- profle image -->
            <div class="profile-img">
                <img src="https://www.freeiconspng.com/uploads/beautiful-teacher-png-hd-22.png" alt="">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
            <!-- End Of Instagram -->

            <!-- Facebook -->
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
            <!-- End Of Facebook -->

            <!-- Twitter -->
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
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

</body>
<!-- JS Boostrap 4.6 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- End Of JS Boostrap 4.6 -->

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
<script>
    $("#modal").on().click(function() {
        // $(".modal-section").html(`<div class="modal-content">`);
    })
</script>

</html>
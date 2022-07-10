<?php
session_start();
if (!isset($_SESSION['data_admin'])) {
    header("Location: https://siakadplus.com/view/admin");
}
include "../../template/header_admin.php";
?>
<section>
    <div class="section-content">
        <form action="../../config/add_action.php" method="post">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim">
            <br>
            <label for="studi">Studi</label>
            <input type="text" id="studi" name="studi">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone">
            <br>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <label for="email_kampus">Email Kampus</label>
            <input type="text" id="email_kampus" name="email_kampus">
            <label for="web">Web</label>
            <input type="text" id="web" name="web">
            <br>
            <button>Add</button>
            <!-- <br> -->
        </form>
    </div>
</section>


<?php
include "../../template/footer_admin.php";

?>
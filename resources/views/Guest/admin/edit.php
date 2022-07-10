<?php
session_start();
if (!isset($_SESSION['data_admin'])) {
    header("Location: https://siakadplus.com/view/admin");
}
include "../../template/header_admin.php";
include "../../config/get_entire_mhs.php";
$data = json_decode($data_mhs);
?>
<section>
    <div class="section-content">
        <form action="../../config/edit_action.php" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" value="<?= $data[0]->nama; ?>" disabled placeholder>
        <label for="nim">NIM</label>
        <input type="text" id="nim" value="<?= $data[0]->nim; ?>" disabled placeholder>
        <br>
        <label for="studi">Studi</label>
        <input type="text" id="studi" value="<?= $data[0]->studi; ?>" disabled placeholder>
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="<?= $data[0]->phone; ?>">
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?= $data[0]->email; ?>">
        <label for="email_kampus">Email Kampus</label>
        <input type="text" id="email_kampus" value="<?= $data[0]->email_kampus; ?>" disabled placeholder>
        <label for="web">Web</label>
        <input type="text" id="web" name="web" value="<?= $data[0]->web; ?>">
        <input type="hidden" name="id" value="<?= $data[0]->id_mahasiswa; ?>" >
        <br>
        <button>Update</button>
        <!-- <br> -->
        </form>
    </div>
</section>


<?php
include "../../template/footer_admin.php";

?>
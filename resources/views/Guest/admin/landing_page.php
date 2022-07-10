<?php
session_start();
if (!isset($_SESSION['data_admin'])) {
    header("Location: https://siakadplus.com/view/admin");
}
include "../../config/get_course.php";
include "../../template/header_admin.php";
include "../../config/get_data_mahasiswa.php";
$data_mhs = json_decode($data_mhs);
?>
<section>
    <!-- Bg Section -->
    <div class="section-content">
        <h3>Table List</h3>
        <!-- <label for="">Course</label>
        <input type="text" id="courseVal">
        <label for="">Course Rate</label>
        <input type="text" id="rateVal"> -->
        
        <br>
        
        <label for="">Search</label>
        <input type="text" id="search">
        <br>
        <button id="addNode">Add Data</button>
        <div style="overflow:auto; white-space:nowrap">
            <table class="tableData" id="tableData">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Studi</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Email Kampus</th>
                    <th>Web</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($data_mhs as $data) : ?>
                    <tr>
                        <td><?= $data->nama; ?></td>
                        <td><?= $data->nim; ?></td>
                        <td><?= $data->studi; ?></td>
                        <td><?= $data->phone; ?></td>
                        <td><?= $data->email; ?></td>
                        <td><?= $data->email_kampus; ?></td>
                        <td><?= $data->web; ?></td>
                        <td><a href="https://siakadplus.com/view/admin/edit.php?id=<?= $data->id_mahasiswa?>">Edit</a> <a href="https://siakadplus.com/config/delete_action.php?id=<?= $data->id_mahasiswa?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <!-- End Of Bg Section -->
</section>
<script>
    $("#addNode").on("click", function(){
        window.location.href = "https://siakadplus.com/view/admin/add.php";
    });
    $("#search").on("keyup", function(){
        var value = $(this).val().toLowerCase();
        $("#tableData tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
</script>
<?php include '../../template/footer_admin.php' ?>
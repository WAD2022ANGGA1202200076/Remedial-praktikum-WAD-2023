<?php 
    require "connector.php";

    $id_mobil = $_GET["id"];
    $query = "DELETE FROM showroom_angga_table WHERE id_mobil = $id_mobil";

    mysqli_query($koneksi, $query);
    header("Location: ../ListCar-angga.php?crud=delete");
?>
<?php
    $idPakaian = $_GET['id'];

    require_once('connect.php');
    $sql = "SELECT * FROM pakaian
            WHERE idPakaian = '$idPakaian'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    $pakaian= array( array( "nama" => "",
                           "jumlah"  => 0,
                           "total"  => 0)              
    );
    $tambah = array("nama" => $row['namaPakaian'],
                    "jumlah" => "");


?>
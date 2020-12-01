<?php
    require_once("connect.php");
    $nama = $_POST['namaPembeli'];

    $sql = "SELECT * FROM pakaian";
    $result = mysqli_query($connect, $sql);

    echo "<h1>DATA PAKAIAN</h1>";
    echo "<h2>Nama Pembeli : $nama</h2>";
    echo "<form action='proses.php?nama=$nama&idPakaian=$idPakaian&jumlah=jumlahBeli' method='post' enctype='multipart/form-data'>";
    echo "<table border=1>";
    echo "<thead>
          <th>No</th>
          <th>Nama Pakaian</th>
          <th>Stok Pakaian</th>
          <th>Harga Pakaian</th>
          <th>Masukkan Jumlah yang dipesan</th>
          <th>Action</th>
          </thead>";
    while ($row = mysqli_fetch_assoc($result)) {
        $idPakaian = $row['idPakaian'];

        echo "<tr>";
        echo "<td>".$row['idPakaian']."</td>";
        echo "<td>".$row['namaPakaian']."</td>";
        echo "<td>".$row['stokPakaian']."</td>";
        echo "<td>".$row['hargaPakaian']."</td>";
        echo "<td><input type='text' name='jumlahBeli' value=0></td>";
        echo "<td><input type='submit' value='Masukkan Keranjang'/></td>";
        echo "</tr>";
    }
    echo "</table><br>";
    echo "<input type='submit' value='Masukkan Keranjang'/>";
    echo "</form>"


?>
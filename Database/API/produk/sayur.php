<?php
include "koneksi.php";

$query = mysqli_query($con, "SELECT * FROM barang where kategori='Sayur'");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
	$json[] = $row;
}

echo json_encode($json);

mysqli_close($con);

<?php

include "../../koneksi.php";
$id_kunjungan = $_GET["id_kunjungan"];
echo $id_kunjungan;

$query = mysqli_query($koneksi, "DELETE FROM tabel_kunjungan WHERE id_kunjungan = $id_kunjungan");
if ($query) {
    header("location:./data_pengunjung.php");
} else {
    echo "<script>alert('Data wisata gagal di-hapus!'); window.location=history.go(-1)</script>";
}

<?php
$level_siswa = $_POST['level'];
$mapel_kode = $_POST['mapel'];
$judul = $_POST['judul_materi'];
$deskripsi = $_POST['deskripsi'];
$video = $_POST['video'];
$file = $_FILES['file'];

echo $level_siswa." | ".$mapel_kode." | ".$judul." | ".$deskripsi." | ".$video."<br>";
echo "<pre>";
print_r($file);
echo "</pre>";
?>
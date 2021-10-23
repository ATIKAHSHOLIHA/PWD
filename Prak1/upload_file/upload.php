<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$deskripsi = $_POST['deskripsi'];
$direktori = "C:/xampp/htdocs/Pertemuan1/upload_file/$nama_file";
if (move_uploaded_file($lokasi_file, $direktori)){
    echo "nama file : <b>$nama_file<b> berhasil di upload <br>";
    echo "deskripsi file : <br>$deskripsi";
} else {
    echo "file gagal upload";
}
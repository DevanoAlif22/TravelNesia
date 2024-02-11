<?php

use Cloudinary\Configuration\Configuration;
use Cloudinary\Cloudinary;
use Cloudinary\Api\Upload\UploadApi;

define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));
// require_once ROOT_PATH . '/Model/ProfilModel.php';
require_once ROOT_PATH . '/Connection/connection.php';
require_once ROOT_PATH . '/vendor/autoload.php';

$cloudinary = new Cloudinary([
    'cloud' => [
      'cloud_name' => 'dbb2obawu',
      'api_key'  => '264931852292581',
      'api_secret' => 'a3W1vUFCSwgKs7Wxfo66zPaTg3A',
    ]
]);


function ambilBiodata($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT p.nama, p.email, p.melihat, pr.biodata, pr.alamat_gambar, pr.umur, 
    pe.nama as nama_peran, (select count(*) from menyukai_postingan where id_user = '$id') as menyukai, (select avg(rating) from wisata where id_user = '$id') as rating 
    From pengguna p, profil pr, peran pe Where p.id_user = pr.id_user and p.id_peran = pe.id_peran and p.id_user = '$id'");
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function ambilPostingan($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT id_postingan, judul, konten, (SELECT count(*) from menyukai_postingan where id_user = '$id' and id_postingan = id_postingan) as menyukai, melihat, alamat_gambar from postingan where id_user = '$id';");
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $dataPostingan[] = $row; // Tambahkan setiap baris ke array $dataPostingan
        }
        return $dataPostingan;
    } else {
        return false;
    }
}

function hapusPostingan($data) {
    global $conn;
    $idPostingan = $data['id_postingan'];
    $idUser = $_SESSION['id'];
    $result = mysqli_query($conn, "DELETE from postingan where id_user = '$idUser' and id_postingan = '$idPostingan'");
    if($result) {
        return 'berhasil';
    } else {
        return 'gagal';
    }
}

function uploadProfil($idUser, $data) {
    global $cloudinary;

    if(isset($_FILES["gambar"])) {
        $namaGambar = $_FILES["gambar"]["name"];
        $tmpPath = $_FILES["gambar"]["tmp_name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $tipeFile = $_FILES["gambar"]["type"];

        // Memeriksa tipe file (hanya jpg, jpeg, atau png yang diizinkan)
        $allowedTypes = array("image/jpeg", "image/jpg", "image/png");
        if (!in_array($tipeFile, $allowedTypes)) {
            echo "Error: Hanya file JPG, JPEG, atau PNG yang diizinkan.";
            return;
        }

        // Memeriksa ukuran file (maksimal 5 MB)
        $maxFileSize = 5 * 1024 * 1024; // 5 MB dalam byte
        if ($ukuranFile > $maxFileSize) {
            echo "Error: Ukuran file melebihi batas maksimal (5 MB).";
            return;
        }

        $timestamp = time();
        $namaUnik = $timestamp . "_" . $namaGambar;
        $pathCloudinary = $idUser . "/profil/" . $namaUnik;

        // Upload gambar ke Cloudinary
        $upload = $cloudinary->uploadApi()->upload($tmpPath, [
            'folder' => $pathCloudinary,
            'public_id' => $namaUnik
        ]);

        if(isset($upload['error'])) {
            echo "Error: " . $upload['error']['message'];
        } else {
            echo "Gambar berhasil diunggah ke Cloudinary.";
        }
    }
}

?>
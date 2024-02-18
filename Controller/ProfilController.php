<?php

use Cloudinary\Configuration\Configuration;
use Cloudinary\Cloudinary;
use Cloudinary\Api\Upload\UploadApi;

define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));
// require_once ROOT_PATH . '/Model/ProfilModel.php';
require_once ROOT_PATH . '/Connection/connection.php';
require_once ROOT_PATH . '/vendor/autoload.php';

function ambilBiodata($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT p.nama, p.email, p.melihat, pr.biodata, pr.gambar, pr.umur, pr.jenis_kelamin, 
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
    $result = mysqli_query($conn, "SELECT id_postingan as id_ini, judul, konten, (SELECT count(*) from menyukai_postingan where id_user = '$id' and id_postingan = id_ini) as menyukai, melihat, gambar, id_provinsi, place_id, nama_wisata from postingan where id_user = '$id';");
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $dataPostingan[] = $row; // Tambahkan setiap baris ke array $dataPostingan
        }
        return $dataPostingan;
    } else {
        return false;
    }
}


function uploadProfil($idUser, $data, $cekGambar) {
    global $conn;
    
    
    $cloudinary = new Cloudinary([
        'cloud' => [
          'cloud_name' => 'dbb2obawu',
          'api_key'  => '264931852292581',
          'api_secret' => 'a3W1vUFCSwgKs7Wxfo66zPaTg3A',
        ]
    ]);
    
    $result = mysqli_query($conn, "SELECT * From profil Where id_user = $idUser");
    $row = mysqli_fetch_assoc($result);

    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $umur = mysqli_real_escape_string($conn, $data['umur']);
    $jenis_kelamin = mysqli_real_escape_string($conn, $data['jenis_kelamin']);

    if($cekGambar === 'ada') {
        $namaGambar = $_FILES["gambar"]["name"];
        $tmpPath = $_FILES["gambar"]["tmp_name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $tipeFile = $_FILES["gambar"]["type"];

        // Memeriksa tipe file (hanya jpg, jpeg, atau png yang diizinkan)
        $allowedTypes = array("image/jpeg", "image/jpg", "image/png");
        if (!in_array($tipeFile, $allowedTypes)) {
            return 'tipe';
        }

        // Memeriksa ukuran file (maksimal 5 MB)
        $maxFileSize = 5 * 1024 * 1024; // 5 MB dalam byte
        if ($ukuranFile > $maxFileSize) {
            return 'ukuran';
        }

        if($row['gambar'] !== null) {
            // di sini tambahkan hapus
            $deleteResult = $cloudinary->uploadApi()->destroy($row['alamat_gambar']);
        }

        $timestamp = time();
        $namaUnik = $timestamp . "_" . $namaGambar;
        $pathCloudinary = $idUser . "/profil";
        $pathGambar = $idUser . "/profil/" . $namaUnik;

        // Upload gambar ke Cloudinary
        
        $upload = $cloudinary->uploadApi()->upload($tmpPath, [
            'folder' => $pathCloudinary,
            'public_id' => $namaUnik
        ]);

        $gambar = $upload['secure_url'];

        
        $result = mysqli_query($conn, "UPDATE pengguna set nama = '$nama' Where id_user = '$idUser'");
        $result = mysqli_query($conn, "UPDATE profil set umur = '$umur', jenis_kelamin = '$jenis_kelamin', gambar =  '$gambar', alamat_gambar = '$pathGambar' Where id_user = '$idUser'");
        return 'berhasil';
    } else {
        $result = mysqli_query($conn, "UPDATE pengguna set nama = '$nama'  Where id_user = '$idUser'");
        $result = mysqli_query($conn, "UPDATE profil set umur = '$umur', jenis_kelamin = '$jenis_kelamin'  Where id_user = '$idUser'");
        return 'berhasil';
        
    }
}

function uploadBiodata($id,$data) {
    global $conn;
    $biodata = $data['biodata'];
    $result = mysqli_query($conn, "UPDATE profil set biodata = '$biodata'  Where id_user = '$id'");
    return 'berhasil';
}

?>
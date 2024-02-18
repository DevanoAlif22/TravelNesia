<?php 
use Cloudinary\Configuration\Configuration;
use Cloudinary\Cloudinary;
use Cloudinary\Api\Upload\UploadApi;


define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));
require_once ROOT_PATH . '/Connection/connection.php';
require_once ROOT_PATH . '/vendor/autoload.php';


function uploadPostingan($id, $data) {

    global $conn;
    
    
    $cloudinary = new Cloudinary([
        'cloud' => [
          'cloud_name' => 'dbb2obawu',
          'api_key'  => '264931852292581',
          'api_secret' => 'a3W1vUFCSwgKs7Wxfo66zPaTg3A',
        ]
    ]);

    $id = intval($id);
    $judul = $data['judul'];
    $konten = $data['konten'];
    $idProvinsi = $data['id_provinsi'];
    $placeId = $data['place_id'];
    $nama_wisata = $data['nama_wisata'];

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
        $timestamp = time();
        $namaUnik = $timestamp . "_" . $namaGambar;
        $pathCloudinary = $id . "/postingan";
        $pathGambar = $id . "/postingan/" . $namaUnik;

        // Upload gambar ke Cloudinary
        
        $upload = $cloudinary->uploadApi()->upload($tmpPath, [
            'folder' => $pathCloudinary,
            'public_id' => $namaUnik
        ]);

        $gambar = $upload['secure_url'];
        date_default_timezone_set('Asia/Jakarta');
        $created_at = date('Y-m-d H:i:s');

    $result = mysqli_query($conn, "INSERT INTO postingan ( id_user,place_id,judul,konten,gambar,alamat_gambar,melihat,created_at, id_provinsi, nama_wisata) values 
    ('$id','$placeId','$judul','$konten','$gambar','$pathGambar',0,'$created_at','$idProvinsi','$nama_wisata');");
    return 'berhasil';

}

function ambilDetailPostingan($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT * from postingan where id_postingan = '$id';");

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function editPostingan($data, $gambar) {
    global $conn;
    $cloudinary = new Cloudinary([
        'cloud' => [
          'cloud_name' => 'dbb2obawu',
          'api_key'  => '264931852292581',
          'api_secret' => 'a3W1vUFCSwgKs7Wxfo66zPaTg3A',
        ]
    ]);

    $id_postingan = $data['id_postingan'];
    $judul = $data['judul'];
    $konten = $data['konten'];
    $idUser = $_SESSION['id'];

    if($gambar === 'ada') {
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

        $result = mysqli_query($conn, "SELECT alamat_gambar From postingan Where id_postingan = $id_postingan");
        $row = mysqli_fetch_assoc($result);

        $deleteResult = $cloudinary->uploadApi()->destroy($row['alamat_gambar']);

        $timestamp = time();
        $namaUnik = $timestamp . "_" . $namaGambar;
        $pathCloudinary = $idUser . "/postingan";
        $pathGambar = $idUser . "/postingan/" . $namaUnik;

        // Upload gambar ke Cloudinary
        
        $upload = $cloudinary->uploadApi()->upload($tmpPath, [
            'folder' => $pathCloudinary,
            'public_id' => $namaUnik
        ]);

        $gambar = $upload['secure_url'];
        
        $result = mysqli_query($conn, "UPDATE postingan set judul = '$judul', konten = '$konten', gambar = '$gambar', alamat_gambar = '$pathGambar' Where id_user = '$idUser' and id_postingan = '$id_postingan'");
        return 'berhasil';
    } else {

        $result = mysqli_query($conn, "UPDATE postingan set judul = '$judul', konten = '$konten' Where id_user = '$idUser' and id_postingan = '$id_postingan'");
        return 'berhasil';
    }
}


function hapusPostingan($data) {
    global $conn;
    $cloudinary = new Cloudinary([
        'cloud' => [
          'cloud_name' => 'dbb2obawu',
          'api_key'  => '264931852292581',
          'api_secret' => 'a3W1vUFCSwgKs7Wxfo66zPaTg3A',
        ]
    ]);
    $idPostingan = $data['id_postingan'];
    $idUser = $_SESSION['id'];
    $resultGambar = mysqli_query($conn, "SELECT alamat_gambar from postingan where id_user = '$idUser' and id_postingan = '$idPostingan' limit 1");
    $row = mysqli_fetch_assoc($resultGambar);
    $result = mysqli_query($conn, "DELETE from postingan where id_user = '$idUser' and id_postingan = '$idPostingan'");
    
    $deleteResult = $cloudinary->uploadApi()->destroy($row['alamat_gambar']);
    if($result) {
        return 'berhasil';
    } else {
        return 'gagal';
    }
}

function cekPostinganUser($id) {
    global $conn;
    $idUser = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT id_postingan from postingan where id_postingan = '$id' and id_user = '$idUser'");
    if(mysqli_num_rows($result) > 0) {
        return true;
    }  else {
        return false;
    }
}

function cekPostingan($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT p.id_postingan as id_ini, p.judul, p.konten, (SELECT count(*) from menyukai_postingan where id_postingan = id_ini) as menyukai, 
    (SELECT count(*) from komentar_postingan where  id_postingan = id_ini) as komentar, 
    p.melihat, p.gambar, p.id_provinsi, p.place_id, p.nama_wisata, p.created_at, pe.nama as nama_pengguna, per.nama as nama_peran, pr.gambar as profil from postingan p, pengguna pe, peran per, profil pr
    where p.id_user = pe.id_user and pe.id_peran = per.id_peran and pe.id_user = pr.id_user and p.id_postingan = '$id';");
    
    if(mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

function dataPemirsa($idUser, $id_postingan) {
    global $conn;
    $id_postingan = intval($id_postingan);
    $resultSuka = mysqli_query($conn, "SELECT * FROM menyukai_postingan where id_user = '$idUser' and id_postingan = '$id_postingan'");
    if(mysqli_num_rows($resultSuka) > 0) {
        $suka = 'true';
    } else {
        $suka = 'false';
    }
    $resultData = mysqli_query($conn, "SELECT gambar from profil where id_user = '$idUser'");

    return [$suka,mysqli_fetch_assoc($resultData)];
}

function dataKomentar($id_postingan) {
  global $conn;
  $id_postingan = intval($id_postingan);
  
  $resultKomentar = mysqli_query($conn, "SELECT kp.konten, kp.created_at, pe.nama, pr.gambar
  from komentar_postingan kp, pengguna pe, profil pr where kp.id_user = pe.id_user and pe.id_user = pr.id_user and kp.id_postingan = '$id_postingan' ");
  $data = array();
    while ($row = mysqli_fetch_assoc($resultKomentar)) {
        $data[] = $row;
    }

    return $data;
}

function tambahKomentar($id_postingan, $data) {
    global $conn;
    $idUser = $_SESSION['id'];
    $konten = $data['konten'];
    date_default_timezone_set('Asia/Jakarta');
    $created_at = date('Y-m-d H:i:s');

    if($konten !== '') {

        $resultKomentar = mysqli_query($conn,"INSERT INTO komentar_postingan (id_user,id_postingan,konten,created_at) values ('$idUser', '$id_postingan', '$konten', '$created_at')");
        if($resultKomentar) {
            return "berhasil";
        } else {
            return "gagal";
            
        }
    } else {
        return "gagal";

    }
}

function menyukaiPostingan($id_postingan, $data) {
    global $conn;

    $idUser = $_SESSION['id'];
    $cekUserMenyukai = mysqli_query($conn, "SELECT * FROM menyukai_postingan where id_postingan = '$id_postingan' and id_User = '$idUser';");
    if(mysqli_num_rows($cekUserMenyukai) > 0) {
        $hapus = mysqli_query($conn, "DELETE FROM menyukai_postingan where id_postingan = '$id_postingan' and id_User = '$idUser';");
    } else {
        $tambah = mysqli_query($conn, "INSERT INTO menyukai_postingan (id_user,id_postingan) values ('$idUser','$id_postingan')");
    }
}
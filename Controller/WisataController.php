<?php 


define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));
require_once ROOT_PATH . '/Connection/connection.php';
require_once ROOT_PATH . '/vendor/autoload.php';

function ambilWisataDipandu($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT id_wisata as id_ini, gambar, (SELECT count(*) from menyukai_wisata where id_user = '$id' and id_wisata = id_ini) as menyukai,
    melihat, harga, gambar, id_provinsi, place_id, nama_wisata, tempat, (SELECT avg(rating) from rating_wisata where id_user = '$id' and id_wisata = id_ini) as rating
    from wisata where id_user = '$id';");
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $dataPostingan[] = $row; // Tambahkan setiap baris ke array $dataPostingan
        }
        return $dataPostingan;
    } else {
        return false;
    }
}

function uploadPemanduWisata($idUser, $data) {
    global $conn;
    date_default_timezone_set('Asia/Jakarta');
    
    $id = intval($idUser);
    $place_id = $data['place_id'];
    $nama = $data['nama_wisata'];
    $deskripsi = $data['deskripsi'];
    $harga = $data['harga'];
    $gambar = $data['gambar_wisata'];
    $created_at = date('Y-m-d H:i:s');
    $melihat = 0;
    $id_provinsi = $data['id_provinsi'];
    $nama_wisata = $data['nama_wisata'];
    $tempat = $data['alamat_wisata'];
    $embed = $data['embed'];

    if($harga > 0) {
        $cekSudahAda = mysqli_query($conn, "SELECT * from wisata where place_id = '$place_id' and id_user = $id");
        if(mysqli_num_rows($cekSudahAda) > 0) {
            return 'ada';
        } else {
            $result = mysqli_query($conn, "INSERT INTO wisata ( id_user,place_id,nama,deskripsi,harga,gambar,created_at, melihat, id_provinsi, nama_wisata, tempat. embed) values 
            ('$id','$place_id','$nama','$deskripsi','$harga','$gambar','$created_at',0,'$id_provinsi','$nama_wisata','$tempat','$embed');");
            return 'berhasil';
        }
    } else {
        return 'harga';
    }


}

function hapusPemanduWisata($data) {
    global $conn;
    $idwisata = $data['id_wisata'];
    $idUser = $_SESSION['id'];
    $result = mysqli_query($conn, "DELETE from wisata where id_user = '$idUser' and id_wisata = '$idwisata'");
    if($result) {
        return 'berhasil';
    } else {
        return 'gagal';
    }
}

function ambilDetailWisata($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT * from wisata where id_wisata = '$id' limit 1;");

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function editPemanduWisata($data) {
    global $conn;

    $id_wisata = $data['id_wisata'];
    $harga = $data['harga'];
    $deskripsi = $data['deskripsi'];
    $idUser = $_SESSION['id'];

    if($harga > 0) {
        $result = mysqli_query($conn, "UPDATE wisata set harga = '$harga', deskripsi = '$deskripsi' Where id_user = '$idUser' and id_wisata = '$id_wisata'");
        return 'berhasil';
    } else {
        return 'harga';

    }
}

function cekWisata($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT w.id_wisata as id_ini, w.nama, w.deskripsi, (SELECT count(*) from menyukai_wisata where id_wisata = id_ini) as menyukai, 
    (SELECT count(*) from komentar_wisata where  id_wisata = id_ini) as komentar, 
    (SELECT avg(rating) from rating_wisata where  id_wisata = id_ini) as rating, 
    w.melihat, w.harga, w.gambar, w.created_at, w.nama_wisata, w.tempat, pe.nama as nama_pengguna, per.nama as nama_peran, pr.gambar as profil from wisata w, pengguna pe, peran per, profil pr
    where w.id_user = pe.id_user and pe.id_peran = per.id_peran and pe.id_user = pr.id_user and w.id_wisata = '$id';");
    
    if(mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

function cekWisataUser($id) {
    global $conn;
    $idUser = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT id_wisata from wisata where id_wisata = '$id' and id_user = '$idUser'");
    if(mysqli_num_rows($result) > 0) {
        return true;
    }  else {
        return false;
    }
}

function dataPemirsa($idUser, $id_wisata) {
    global $conn;
    $id_wisata = intval($id_wisata);
    $resultSuka = mysqli_query($conn, "SELECT * FROM menyukai_wisata where id_user = '$idUser' and id_wisata = '$id_wisata'");
    if(mysqli_num_rows($resultSuka) > 0) {
        $suka = 'true';
    } else {
        $suka = 'false';
    }
    $resultData = mysqli_query($conn, "SELECT gambar from profil where id_user = '$idUser'");

    return [$suka,mysqli_fetch_assoc($resultData)];
}

function dataKomentar($id_wisata) {
    global $conn;
    $id_wisata = intval($id_wisata);
    
    $resultKomentar = mysqli_query($conn, "SELECT wp.konten, wp.created_at, pe.nama, pr.gambar
    from komentar_wisata wp, pengguna pe, profil pr where wp.id_user = pe.id_user and pe.id_user = pr.id_user and wp.id_wisata = '$id_wisata' ");
    $data = array();
      while ($row = mysqli_fetch_assoc($resultKomentar)) {
          $data[] = $row;
      }
  
      return $data;
  }
  
<?php 

function GetId($id, $data) {
    foreach ($data as $entry) {
        if ($entry['id'] == $id) {
            return [$entry, $entry['path']];
            break;
        }
    }       
}

function PencarianProvinsi($cari, $data) {
    $hasil_pencarian = array(); // Array untuk menyimpan hasil pencarian

    foreach ($data as $entry) {
        // Menggunakan stripos() untuk mencari apakah $cari ada di dalam $entry['nama']
        if (stripos($entry['nama'], $cari) !== false) {
            $hasil_pencarian[] = $entry; // Menambahkan entri ke array hasil pencarian
        }
    }

    return $hasil_pencarian;
}

function PencarianWisata($cari, $data) {
    $hasil_pencarian = array(); // Array untuk menyimpan hasil pencarian

    foreach ($data as $entry) {
        // Menggunakan stripos() untuk mencari apakah $cari ada di dalam $entry['nama']
        if (stripos($entry['name'], $cari) !== false) {
            $hasil_pencarian[] = $entry; // Menambahkan entri ke array hasil pencarian
        }
    }

    return $hasil_pencarian;
}

function PencarianDetailWisata($place_id, $data) {
    foreach ($data as $entry) {
        if ($entry['place_id'] == $place_id) {
            return $entry;
            break;
        }
    }    
}
?>
<?php 
require '../../../Controller/ProvinsiController.php';
// Baca isi file JSON
$json_data = file_get_contents('../../../Json/semua-provinsi/semua-provinsi.json');
$data = json_decode($json_data, true);

if($_GET['id'] & $_GET['place_id']) {
    $id = $_GET['id'];
    $place_id = $_GET['place_id'];

    $data = GetId($id, $data);
    if($data == null) {
        header("Location: pencarian-provinsi-wisata.php");
    }
    $json_wisata = file_get_contents('../../../Json/' . $data[1]);
    $wisata = json_decode($json_wisata, true);
    $data = PencarianDetailWisata( $place_id, $wisata);

    if($data == null) {
        header("Location: ../pencarian/pencarian-provinsi-wisata.php");
        exit; 

    }
} else {
    header("Location: ../pencarian/pencarian-provinsi-wisata.php");
    exit; 
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pencarian wisata - Travelnesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/wisata.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 </head>
  <body>
    
    <div class="container">
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="gambar-logo" src="../../assets/logo-hitam.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Wisata</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" >Postingan</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" >Pemandu</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" >Masuk</a>
                  </li>
              </ul>
              </div>
          </div>
        </nav>
    </div>

    <div class="hero-image" style="background-image: url('<?php echo $data['image'] ?>"></div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mb-3"><b><?php echo $data['name'] ?></b></h2>
                <div class="d-flex">
                    <?php foreach ($data['categories'] as $kategori) : ?>
                        <div class="kategori">
                            <b><?php echo $kategori ?></b>
                        </div>
                    <?php endforeach ?>
                </div>
        
                <div class="d-flex mt-4 mb-4">
                    <div class="d-flex me-4">
                        <img style="width:23px" src="../../assets/wisata/rating.png" alt="">
                        <b class="ms-2"><?php echo $data['rating'] ?> Rating</b>
                    </div>
                    <div class="d-flex me-4">
                        <img style="width:30px" src="../../assets/wisata/melihat.png" alt="">
                        <b class="ms-2"><?php echo $data['reviews'] ?> Review</b>
                    </div>
                </div>
                
                <div class="d-flex mb-4">
                    <img style="width:23px; height:32px;" src="../../assets/wisata/map.png" alt="">
                    <p class="ms-2"><?php echo $data['address'] ?></p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <iframe
                    class="mb-5 map-google"
                    height="250"
                    style="border:0;"
                    loading="lazy"
                    allowfullscreen
                    src="<?php echo $data['link'] ?>">
                </iframe>
            </div>
        </div>

        <p class="pb-4" style="text-align:justify;"><?php echo $data['about'] ?></p>

        <div class="kategori-2 mb-4">
            <h5><b>Jasa pemandu wisata ini</b></h5>
        </div>

        <div class="slider-pemandu d-flex mb-5">
            <div class="card-slider-pemandu ">
                <div class="card-wisata col-lg-3">
                    <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                        <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                            <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                            <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                        </div>
                    </div>
                    <div class="bottom-wisata p-3">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png'); width:40px; height: 40px;"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <img style="width:23px; height:32px; margin-right:15px;" src="../../assets/wisata/map.png" alt="">
                            <p class="ms-2">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                        </div>
                        <div class="d-flex mb-2">
                            <img style="width:35px; height:32px;" src="../../assets/wisata/uang.png" alt="">
                            <p class="ms-2" style="font-size:1.3rem;"><b>Rp. 300.000</b></p>
                        </div>
                        <div style="margin-left:30px; ">
                            <div class="d-flex mb-3">
                                <div class="d-flex" style="width:100%;">
                                    <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                    <p class="ms-2">4.4 Rating</p>
                                </div>
                                <div class="d-flex" style="width:100%;">
                                    <p class="ms-2">250 Reviews</p>
                                </div>
                            </div>
                            <a href="" class="lihat-wisata">Lihat Tawaran</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu ">
                <div class="card-wisata col-lg-3">
                    <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                        <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                            <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                            <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                        </div>
                    </div>
                    <div class="bottom-wisata p-3">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png'); width:40px; height: 40px;"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <img style="width:23px; height:32px; margin-right:15px;" src="../../assets/wisata/map.png" alt="">
                            <p class="ms-2">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                        </div>
                        <div class="d-flex mb-2">
                            <img style="width:35px; height:32px;" src="../../assets/wisata/uang.png" alt="">
                            <p class="ms-2" style="font-size:1.3rem;"><b>Rp. 300.000</b></p>
                        </div>
                        <div style="margin-left:30px; ">
                            <div class="d-flex mb-3">
                                <div class="d-flex" style="width:100%;">
                                    <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                    <p class="ms-2">4.4 Rating</p>
                                </div>
                                <div class="d-flex" style="width:100%;">
                                    <p class="ms-2">250 Reviews</p>
                                </div>
                            </div>
                            <a href="" class="lihat-wisata">Lihat Tawaran</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu ">
                <div class="card-wisata col-lg-3">
                    <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                        <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                            <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                            <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                        </div>
                    </div>
                    <div class="bottom-wisata p-3">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png'); width:40px; height: 40px;"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <img style="width:23px; height:32px; margin-right:15px;" src="../../assets/wisata/map.png" alt="">
                            <p class="ms-2">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                        </div>
                        <div class="d-flex mb-2">
                            <img style="width:35px; height:32px;" src="../../assets/wisata/uang.png" alt="">
                            <p class="ms-2" style="font-size:1.3rem;"><b>Rp. 300.000</b></p>
                        </div>
                        <div style="margin-left:30px; ">
                            <div class="d-flex mb-3">
                                <div class="d-flex" style="width:100%;">
                                    <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                    <p class="ms-2">4.4 Rating</p>
                                </div>
                                <div class="d-flex" style="width:100%;">
                                    <p class="ms-2">250 Reviews</p>
                                </div>
                            </div>
                            <a href="" class="lihat-wisata">Lihat Tawaran</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu ">
                <div class="card-wisata col-lg-3">
                    <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                        <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                            <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                            <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                        </div>
                    </div>
                    <div class="bottom-wisata p-3">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png'); width:40px; height: 40px;"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <img style="width:23px; height:32px; margin-right:15px;" src="../../assets/wisata/map.png" alt="">
                            <p class="ms-2">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                        </div>
                        <div class="d-flex mb-2">
                            <img style="width:35px; height:32px;" src="../../assets/wisata/uang.png" alt="">
                            <p class="ms-2" style="font-size:1.3rem;"><b>Rp. 300.000</b></p>
                        </div>
                        <div style="margin-left:30px; ">
                            <div class="d-flex mb-3">
                                <div class="d-flex" style="width:100%;">
                                    <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                    <p class="ms-2">4.4 Rating</p>
                                </div>
                                <div class="d-flex" style="width:100%;">
                                    <p class="ms-2">250 Reviews</p>
                                </div>
                            </div>
                            <a href="" class="lihat-wisata">Lihat Tawaran</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu ">
                <div class="card-wisata col-lg-3">
                    <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                        <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                            <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                            <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                        </div>
                    </div>
                    <div class="bottom-wisata p-3">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png'); width:40px; height: 40px;"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <img style="width:23px; height:32px; margin-right:15px;" src="../../assets/wisata/map.png" alt="">
                            <p class="ms-2">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                        </div>
                        <div class="d-flex mb-2">
                            <img style="width:35px; height:32px;" src="../../assets/wisata/uang.png" alt="">
                            <p class="ms-2" style="font-size:1.3rem;"><b>Rp. 300.000</b></p>
                        </div>
                        <div style="margin-left:30px; ">
                            <div class="d-flex mb-3">
                                <div class="d-flex" style="width:100%;">
                                    <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                    <p class="ms-2">4.4 Rating</p>
                                </div>
                                <div class="d-flex" style="width:100%;">
                                    <p class="ms-2">250 Reviews</p>
                                </div>
                            </div>
                            <a href="" class="lihat-wisata">Lihat Tawaran</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu ">
                <div class="card-wisata col-lg-3">
                    <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                        <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                            <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                            <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                        </div>
                    </div>
                    <div class="bottom-wisata p-3">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png'); width:40px; height: 40px;"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <img style="width:23px; height:32px; margin-right:15px;" src="../../assets/wisata/map.png" alt="">
                            <p class="ms-2">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                        </div>
                        <div class="d-flex mb-2">
                            <img style="width:35px; height:32px;" src="../../assets/wisata/uang.png" alt="">
                            <p class="ms-2" style="font-size:1.3rem;"><b>Rp. 300.000</b></p>
                        </div>
                        <div style="margin-left:30px; ">
                            <div class="d-flex mb-3">
                                <div class="d-flex" style="width:100%;">
                                    <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                    <p class="ms-2">4.4 Rating</p>
                                </div>
                                <div class="d-flex" style="width:100%;">
                                    <p class="ms-2">250 Reviews</p>
                                </div>
                            </div>
                            <a href="" class="lihat-wisata">Lihat Tawaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="kategori-2 mb-4">
            <h5 style="text-align:center;"><b>Postingan wisata ini</b></h5>
        </div>

        <div class="slider-pemandu d-flex mb-5">
            <div class="card-slider-pemandu">
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri" style="background-image: url('../../assets/beranda/postingan-terbaik.png');"></div>
                    <div class="postingan-kanan">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png')"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <h6 class="mt-3" style="font-weight:bold;">Pantai Kuta Dengan Kehangatan Sunsetnya</h6>
                        <p style="text-align:justify; font-size:0.8rem; font-weight:500;">Lorem Ipsum is simply dummy text of the printing and typesetting 
                            ndustry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s....</p>
                        <div class="d-flex">
                            <div class="d-flex me-3">
                                <img style="width:34px" src="../../assets/beranda/suka2.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div class="d-flex">
                                <img style="width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                        </div>
                        <div class="garis mt-3" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu">
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri" style="background-image: url('../../assets/beranda/postingan-terbaik.png');"></div>
                    <div class="postingan-kanan">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png')"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <h6 class="mt-3" style="font-weight:bold;">Pantai Kuta Dengan Kehangatan Sunsetnya</h6>
                        <p style="text-align:justify; font-size:0.8rem; font-weight:500;">Lorem Ipsum is simply dummy text of the printing and typesetting 
                            ndustry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s....</p>
                        <div class="d-flex">
                            <div class="d-flex me-3">
                                <img style="width:34px" src="../../assets/beranda/suka2.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div class="d-flex">
                                <img style="width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                        </div>
                        <div class="garis mt-3" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu">
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri" style="background-image: url('../../assets/beranda/postingan-terbaik.png');"></div>
                    <div class="postingan-kanan">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png')"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <h6 class="mt-3" style="font-weight:bold;">Pantai Kuta Dengan Kehangatan Sunsetnya</h6>
                        <p style="text-align:justify; font-size:0.8rem; font-weight:500;">Lorem Ipsum is simply dummy text of the printing and typesetting 
                            ndustry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s....</p>
                        <div class="d-flex">
                            <div class="d-flex me-3">
                                <img style="width:34px" src="../../assets/beranda/suka2.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div class="d-flex">
                                <img style="width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                        </div>
                        <div class="garis mt-3" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu">
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri" style="background-image: url('../../assets/beranda/postingan-terbaik.png');"></div>
                    <div class="postingan-kanan">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png')"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <h6 class="mt-3" style="font-weight:bold;">Pantai Kuta Dengan Kehangatan Sunsetnya</h6>
                        <p style="text-align:justify; font-size:0.8rem; font-weight:500;">Lorem Ipsum is simply dummy text of the printing and typesetting 
                            ndustry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s....</p>
                        <div class="d-flex">
                            <div class="d-flex me-3">
                                <img style="width:34px" src="../../assets/beranda/suka2.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div class="d-flex">
                                <img style="width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                        </div>
                        <div class="garis mt-3" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu">
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri" style="background-image: url('../../assets/beranda/postingan-terbaik.png');"></div>
                    <div class="postingan-kanan">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png')"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <h6 class="mt-3" style="font-weight:bold;">Pantai Kuta Dengan Kehangatan Sunsetnya</h6>
                        <p style="text-align:justify; font-size:0.8rem; font-weight:500;">Lorem Ipsum is simply dummy text of the printing and typesetting 
                            ndustry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s....</p>
                        <div class="d-flex">
                            <div class="d-flex me-3">
                                <img style="width:34px" src="../../assets/beranda/suka2.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div class="d-flex">
                                <img style="width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                        </div>
                        <div class="garis mt-3" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
            </div>
            <div class="card-slider-pemandu">
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri" style="background-image: url('../../assets/beranda/postingan-terbaik.png');"></div>
                    <div class="postingan-kanan">
                        <div class="d-flex">
                            <div class="profil" style="background-image: url('../../assets/beranda/profil.png')"></div>
                            <div class="ms-3 mt-1">
                                <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                                <p style="margin-top:-9px; font-size:0.8rem;">Wisatawan</p>
                            </div>
                        </div>
                        <h6 class="mt-3" style="font-weight:bold;">Pantai Kuta Dengan Kehangatan Sunsetnya</h6>
                        <p style="text-align:justify; font-size:0.8rem; font-weight:500;">Lorem Ipsum is simply dummy text of the printing and typesetting 
                            ndustry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s....</p>
                        <div class="d-flex">
                            <div class="d-flex me-3">
                                <img style="width:34px" src="../../assets/beranda/suka2.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div class="d-flex">
                                <img style="width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                        </div>
                        <div class="garis mt-3" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
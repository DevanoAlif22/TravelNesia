<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - Travelnesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/beranda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
  <body>

  <header>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="gambar-logo" src="../../assets/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars" style="color: white;"></i> <!-- Menggunakan ikon bars dari Font Awesome -->
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
        <div class="row container mt-4">
            <div class="col-lg-6 ms-4">
                <h1 class="selamat-datang">Selamat Datang <br>di Travelnesia</h1>
                <p style="color:white; font-size: 1.3rem;" class="pb-3">Jelajahi Wisata Indonesia dengan Pencarian Cepat, Rekomendasi Terbaik, dan Pemandu Profesional di Setiap Petualangan</p>
                <a class="tombol-cari" href="../pencarian/pencarian-provinsi-wisata.php">Cari Wisata</a>
            </div>
            <div class="col-lg-5">
                <div class="container-slider">
                    <h3 style="color:white;">Foto Wisata</h3>
                    <div class="container container-foto-wisata">
                        <div class="slider-wisata d-flex">
                            <div class="foto-wisata">
                                <img class="slider-foto" src="../../assets/beranda/slider-foto-1.png" alt="">
                            </div>
                            <div class="foto-wisata">
                                <img class="slider-foto" src="../../assets/beranda/slider-foto-1.png" alt="">
                            </div>
                            <div class="foto-wisata">
                                <img class="slider-foto" src="../../assets/beranda/slider-foto-1.png" alt="">
                            </div>
                            <div class="foto-wisata">
                                <img class="slider-foto" src="../../assets/beranda/slider-foto-1.png" alt="">
                            </div>
                            <div class="foto-wisata">
                                <img class="slider-foto" src="../../assets/beranda/slider-foto-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </header>

  <!-- tentang -->
  <section class="tentang">
    <div class="container">
        <h2 class="mt-4 text-center">Tentang Website</h2>
        <div class="d-flex justify-content-center">
            <div class="garis"></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img class="gambar-tentang" src="../../assets/beranda/tentang-gambar.png" alt="">
            </div>
            <div class="col-lg-6">
                <div class="container-tentang">
                    <img class="logo-tentang" src="../../assets/logo-hitam.png" alt="">
                    <p class="ms-4 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy 
                        text ever since the 1500s, when  an unknown printer took a galley 
                        of type and scrambled it to make  a type specimen book. It has 
                        survived not only five centuries,</p>
                        <a style="border: solid 1px black; color : black;" class="tombol-cari ms-3" href="">Cari Wisata</a>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- rekomendasi -->
  <section class="rekomendasi">
    <div class="container">
        <h2 class="mt-4 text-center">Rekomendasi Wisata</h2>
        <div class="d-flex justify-content-center">
            <div class="garis"></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="container-tentang">
                    <img class="logo-tentang" src="../../assets/logo-hitam.png" alt="">
                    <p class="ms-4 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy 
                        text ever since the 1500s, when  an unknown printer took a galley 
                        of type and scrambled it to make  a type specimen book. It has 
                        survived not only five centuries,</p>
                        <a style="border: solid 1px black; color : black;" class="tombol-cari ms-3" href="">Rekomendasikan Wisata</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="gambar-tentang" src="../../assets/beranda/tentang-gambar.png" alt="">
            </div>
        </div>
    </div>
  </section>

  <!-- wisata -->
  <section class="wisata">
    <div class="container">
        <h2 class="mt-4 text-center">Wisata Terbaik</h2>
        <div class="d-flex justify-content-center">
            <div class="garis"></div>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <a href="" style="color:1B0698 !important; text-decoration:none; font-size: 1.1rem;" class="pb-4 text-end">Lihat selengkapnya...</a>
        </div>
        <div class="row d-flex container-wisata">
            <div class="card-wisata col-lg-3">
                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                    <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                        <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div class="bottom-wisata p-3">
                    <div class="d-flex" style="width:100%;">
                        <img style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                        <p class="ms-3" style="width:90%;">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                    </div>
                    <div style="margin-left:30px; ">
                        <h5 style="font-weight:bold;">Candi Borobudur</h5>
                        <div class="d-flex mb-3">
                            <div class="d-flex" style="width:100%;">
                                <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                <p class="ms-2">4.4 Rating</p>
                            </div>
                            <div class="d-flex" style="width:100%;">
                                <p class="ms-2">250 Reviews</p>
                            </div>
                        </div>
                        <a href="" class="lihat-wisata">Lihat Wisata</a>
                    </div>
                </div>
            </div>
            <div class="card-wisata col-lg-3">
                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                    <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                        <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div class="bottom-wisata p-3">
                    <div class="d-flex" style="width:100%;">
                        <img style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                        <p class="ms-3" style="width:90%;">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                    </div>
                    <div style="margin-left:30px; ">
                        <h5 style="font-weight:bold;">Candi Borobudur</h5>
                        <div class="d-flex mb-3">
                            <div class="d-flex" style="width:100%;">
                                <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                <p class="ms-2">4.4 Rating</p>
                            </div>
                            <div class="d-flex" style="width:100%;">
                                <p class="ms-2">250 Reviews</p>
                            </div>
                        </div>
                        <a href="" class="lihat-wisata">Lihat Wisata</a>
                    </div>
                </div>
            </div>
            <div class="card-wisata col-lg-3">
                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                    <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                        <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div class="bottom-wisata p-3">
                    <div class="d-flex" style="width:100%;">
                        <img style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                        <p class="ms-3" style="width:90%;">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                    </div>
                    <div style="margin-left:30px; ">
                        <h5 style="font-weight:bold;">Candi Borobudur</h5>
                        <div class="d-flex mb-3">
                            <div class="d-flex" style="width:100%;">
                                <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                <p class="ms-2">4.4 Rating</p>
                            </div>
                            <div class="d-flex" style="width:100%;">
                                <p class="ms-2">250 Reviews</p>
                            </div>
                        </div>
                        <a href="" class="lihat-wisata">Lihat Wisata</a>
                    </div>
                </div>
            </div>
            <div class="card-wisata col-lg-3">
                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                    <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                        <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div class="bottom-wisata p-3">
                    <div class="d-flex" style="width:100%;">
                        <img style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                        <p class="ms-3" style="width:90%;">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                    </div>
                    <div style="margin-left:30px; ">
                        <h5 style="font-weight:bold;">Candi Borobudur</h5>
                        <div class="d-flex mb-3">
                            <div class="d-flex" style="width:100%;">
                                <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                <p class="ms-2">4.4 Rating</p>
                            </div>
                            <div class="d-flex" style="width:100%;">
                                <p class="ms-2">250 Reviews</p>
                            </div>
                        </div>
                        <a href="" class="lihat-wisata">Lihat Wisata</a>
                    </div>
                </div>
            </div>
            <div class="card-wisata col-lg-3">
                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                    <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                        <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div class="bottom-wisata p-3">
                    <div class="d-flex" style="width:100%;">
                        <img style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                        <p class="ms-3" style="width:90%;">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                    </div>
                    <div style="margin-left:30px; ">
                        <h5 style="font-weight:bold;">Candi Borobudur</h5>
                        <div class="d-flex mb-3">
                            <div class="d-flex" style="width:100%;">
                                <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                <p class="ms-2">4.4 Rating</p>
                            </div>
                            <div class="d-flex" style="width:100%;">
                                <p class="ms-2">250 Reviews</p>
                            </div>
                        </div>
                        <a href="" class="lihat-wisata">Lihat Wisata</a>
                    </div>
                </div>
            </div>
            <div class="card-wisata col-lg-3">
                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                    <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                        <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div class="bottom-wisata p-3">
                    <div class="d-flex" style="width:100%;">
                        <img style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                        <p class="ms-3" style="width:90%;">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                    </div>
                    <div style="margin-left:30px; ">
                        <h5 style="font-weight:bold;">Candi Borobudur</h5>
                        <div class="d-flex mb-3">
                            <div class="d-flex" style="width:100%;">
                                <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                <p class="ms-2">4.4 Rating</p>
                            </div>
                            <div class="d-flex" style="width:100%;">
                                <p class="ms-2">250 Reviews</p>
                            </div>
                        </div>
                        <a href="" class="lihat-wisata">Lihat Wisata</a>
                    </div>
                </div>
            </div>
            <div class="card-wisata col-lg-3">
                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                    <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                        <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div class="bottom-wisata p-3">
                    <div class="d-flex" style="width:100%;">
                        <img style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                        <p class="ms-3" style="width:90%;">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                    </div>
                    <div style="margin-left:30px; ">
                        <h5 style="font-weight:bold;">Candi Borobudur</h5>
                        <div class="d-flex mb-3">
                            <div class="d-flex" style="width:100%;">
                                <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                <p class="ms-2">4.4 Rating</p>
                            </div>
                            <div class="d-flex" style="width:100%;">
                                <p class="ms-2">250 Reviews</p>
                            </div>
                        </div>
                        <a href="" class="lihat-wisata">Lihat Wisata</a>
                    </div>
                </div>
            </div>
            <div class="card-wisata col-lg-3">
                <div style="background-image: url('../../assets/beranda/wisata-terbaik.png');" class="header-wisata d-flex flex-dirextion-column">
                    <div class="align-self-end" style="background: linear-gradient(to bottom, transparent, black); width:100%;">
                        <h5 class="ms-3 mb-3" style="color:white;">Candi Borobudur</h5>
                        <div class="ms-3" style="width:100px; background-color:white; height: 3px; margin-bottom:10px;"></div>
                    </div>
                </div>
                <div class="bottom-wisata p-3">
                    <div class="d-flex" style="width:100%;">
                        <img style="width:15px; height:23px; margin-top:6px;" src="../../assets/beranda/map.png" alt="">
                        <p class="ms-3" style="width:90%;">Borobudur, Magelang, Jawa Tengah, Indonesia.</p>
                    </div>
                    <div style="margin-left:30px; ">
                        <h5 style="font-weight:bold;">Candi Borobudur</h5>
                        <div class="d-flex mb-3">
                            <div class="d-flex" style="width:100%;">
                                <img style="width:25px; height:25px" src="../../assets/beranda/star.png" alt="">
                                <p class="ms-2">4.4 Rating</p>
                            </div>
                            <div class="d-flex" style="width:100%;">
                                <p class="ms-2">250 Reviews</p>
                            </div>
                        </div>
                        <a href="" class="lihat-wisata">Lihat Wisata</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

    <!-- postingan -->
    <section class="postingan">
        <div class="container">
            <h2 class="mt-4 text-center">Postingan Terbaik</h2>
            <div class="d-flex justify-content-center">
                <div class="garis"></div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <a href="" style="color:1B0698 !important; text-decoration:none; font-size: 1.1rem;" class="pb-4 text-end">Lihat selengkapnya...</a>
            </div>
            <div class="row p-4 d-flex justify-content-between">
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri"></div>
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
                        <div class="garis" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri"></div>
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
                        <div class="garis" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
            </div>
            <div class="row p-4 d-flex justify-content-between">
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri"></div>
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
                        <div class="garis" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
                <div class="col-lg-6 card-postingan d-flex">
                    <div class="postingan-kiri"></div>
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
                        <div class="garis" style="width:60%; background-color:black; height:3px; margin-bottom : 20px"></div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Postingan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- pemandu -->
    <section class="pemandu mb-5">
        <div class="container">
            <h2 class="mt-4 text-center">Pemandu Terbaik</h2>
            <div class="d-flex justify-content-center">
                <div class="garis"></div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <a href="" style="color:1B0698 !important; text-decoration:none; font-size: 1.1rem;" class="pb-4 text-end">Lihat selengkapnya...</a>
            </div>
            <div class="row container-pemandu">
                <div class="col-lg-3 card-pemandu">
                    <div class="isi-pemandu">
                        <div class="gambar-pemandu" style="background-image: url('../../assets/beranda/profil-pemandu.png');"></div>
                        <h5><b>Firashinta Yudi</b></h5>
                        <p style="margin-top:-10px; margin-bottom:5px;">Wisatawan</p>
                        <div class="d-flex justify-content-center">
                            <div class="garis" style="width:100px; height:3px; margin-top:0px; background-color:black;"></div>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <div class="me-4">
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div >
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/bintang.png" alt="">
                                <h6 class="mt-2 ms-3">4.5</h6>
                            </div>
                        </div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Pemandu</a>
                    </div>
                </div>
                <div class="col-lg-3 card-pemandu">
                    <div class="isi-pemandu">
                        <div class="gambar-pemandu" style="background-image: url('../../assets/beranda/profil-pemandu.png');"></div>
                        <h5><b>Firashinta Yudi</b></h5>
                        <p style="margin-top:-10px; margin-bottom:5px;">Wisatawan</p>
                        <div class="d-flex justify-content-center">
                            <div class="garis" style="width:100px; height:3px; margin-top:0px; background-color:black;"></div>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <div class="me-4">
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div >
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/bintang.png" alt="">
                                <h6 class="mt-2 ms-3">4.5</h6>
                            </div>
                        </div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Pemandu</a>
                    </div>
                </div>
                <div class="col-lg-3 card-pemandu">
                    <div class="isi-pemandu">
                        <div class="gambar-pemandu" style="background-image: url('../../assets/beranda/profil-pemandu.png');"></div>
                        <h5><b>Firashinta Yudi</b></h5>
                        <p style="margin-top:-10px; margin-bottom:5px;">Wisatawan</p>
                        <div class="d-flex justify-content-center">
                            <div class="garis" style="width:100px; height:3px; margin-top:0px; background-color:black;"></div>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <div class="me-4">
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div >
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/bintang.png" alt="">
                                <h6 class="mt-2 ms-3">4.5</h6>
                            </div>
                        </div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Pemandu</a>
                    </div>
                </div>
                <div class="col-lg-3 card-pemandu">
                    <div class="isi-pemandu">
                        <div class="gambar-pemandu" style="background-image: url('../../assets/beranda/profil-pemandu.png');"></div>
                        <h5><b>Firashinta Yudi</b></h5>
                        <p style="margin-top:-10px; margin-bottom:5px;">Wisatawan</p>
                        <div class="d-flex justify-content-center">
                            <div class="garis" style="width:100px; height:3px; margin-top:0px; background-color:black;"></div>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <div class="me-4">
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div >
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/bintang.png" alt="">
                                <h6 class="mt-2 ms-3">4.5</h6>
                            </div>
                        </div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Pemandu</a>
                    </div>
                </div>
                <div class="col-lg-3 card-pemandu">
                    <div class="isi-pemandu">
                        <div class="gambar-pemandu" style="background-image: url('../../assets/beranda/profil-pemandu.png');"></div>
                        <h5><b>Firashinta Yudi</b></h5>
                        <p style="margin-top:-10px; margin-bottom:5px;">Wisatawan</p>
                        <div class="d-flex justify-content-center">
                            <div class="garis" style="width:100px; height:3px; margin-top:0px; background-color:black;"></div>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <div class="me-4">
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div >
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/bintang.png" alt="">
                                <h6 class="mt-2 ms-3">4.5</h6>
                            </div>
                        </div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Pemandu</a>
                    </div>
                </div>
                <div class="col-lg-3 card-pemandu">
                    <div class="isi-pemandu">
                        <div class="gambar-pemandu" style="background-image: url('../../assets/beranda/profil-pemandu.png');"></div>
                        <h5><b>Firashinta Yudi</b></h5>
                        <p style="margin-top:-10px; margin-bottom:5px;">Wisatawan</p>
                        <div class="d-flex justify-content-center">
                            <div class="garis" style="width:100px; height:3px; margin-top:0px; background-color:black;"></div>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <div class="me-4">
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div >
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/bintang.png" alt="">
                                <h6 class="mt-2 ms-3">4.5</h6>
                            </div>
                        </div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Pemandu</a>
                    </div>
                </div>
                <div class="col-lg-3 card-pemandu">
                    <div class="isi-pemandu">
                        <div class="gambar-pemandu" style="background-image: url('../../assets/beranda/profil-pemandu.png');"></div>
                        <h5><b>Firashinta Yudi</b></h5>
                        <p style="margin-top:-10px; margin-bottom:5px;">Wisatawan</p>
                        <div class="d-flex justify-content-center">
                            <div class="garis" style="width:100px; height:3px; margin-top:0px; background-color:black;"></div>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <div class="me-4">
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div >
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/bintang.png" alt="">
                                <h6 class="mt-2 ms-3">4.5</h6>
                            </div>
                        </div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Pemandu</a>
                    </div>
                </div>
                <div class="col-lg-3 card-pemandu">
                    <div class="isi-pemandu">
                        <div class="gambar-pemandu" style="background-image: url('../../assets/beranda/profil-pemandu.png');"></div>
                        <h5><b>Firashinta Yudi</b></h5>
                        <p style="margin-top:-10px; margin-bottom:5px;">Wisatawan</p>
                        <div class="d-flex justify-content-center">
                            <div class="garis" style="width:100px; height:3px; margin-top:0px; background-color:black;"></div>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <div class="me-4">
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/melihat.png" alt="">
                                <h6 class="mt-2 ms-3">200</h6>
                            </div>
                            <div >
                                <img style="margin-left:17px; width:34px" src="../../assets/beranda/bintang.png" alt="">
                                <h6 class="mt-2 ms-3">4.5</h6>
                            </div>
                        </div>
                        <a href="" style="margin-left:0px;" class="lihat-wisata">Lihat Pemandu</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img style="width:160px;" src="../../assets/logo-hitam.png" alt="">
                    <p style="text-align:justify; margin-left:20px;">Lorem Ipsum is simply dummy text of the printing and typesetting 
                    ndustry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries,</p>
                </div>
                <div class="col-lg-4">
                    <h4 class="text-center mt-3"><b>Sosial Media</b></h4>
                    <div class="d-flex justify-content-center mt-4" style="width:100%;">
                        <img style="width:50px; margin-left:20px" src="../../assets/beranda/ig.png" alt="">
                        <img style="width:50px; margin-left:20px" src="../../assets/beranda/twitter.png" alt="">
                        <img style="width:50px; margin-left:20px" src="../../assets/beranda/linkedin.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="text-center mt-3"><b>Kontak Kami</b></h4>
                    <p class="text-center mt-3">devanorama123@gmail.com</p>
                </div>
                <div style="width: 100%; height:2px; background-color:gray;" class=" mt-2 mb-3 garis-footer"></div>
                <p class="text-center">created by kakacksquad</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
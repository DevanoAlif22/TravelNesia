<?php 
session_start();


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pencarian wisata - Travelnesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/pencarian.css">
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
                  <a class="nav-link" href="../pencarian/pencarian-provinsi-wisata.php">Wisata</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../pencarian/pencarian-postingan.php" >Postingan</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../pencarian/pencarian-pemandu.php" >Pemandu</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../pencarian/pencarian-wisatawan.php" >Wisatawan</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="../profil/wisata-biodata.php?id=<?php echo $_SESSION['id']?>">Profil</a>
                  </li>
              </ul>
              </div>
          </div>
        </nav>
    </div>

    <div class="container">
      <div class="d-flex flex-row-reverse">
        <div class="p-2 me-5 cari d-flex">
          <i class="fa-solid fa-magnifying-glass" style="margin-top:7px; margin-right:20px;color: #999999;"></i>  
          <input type="text" placeholder="Cari Langsung Pemandu">
        </div>
      </div>
    </div>

    <div class="container mt-5">
        <div class="mb-5"></div>
        <div class="d-flex justify-content-center">
          <h4 class="text-center pilih-provinsi"><b>Cari Postingan</b></h4>
        </div>

        <div class="container mt-5">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
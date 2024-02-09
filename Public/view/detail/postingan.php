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
    
  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Jasa Pemandu Wisata ini</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" auto-complate="none">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea auto-complate="none" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Bukti Gambar</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Laporkan</button>
        </div>
        </div>
    </div>
    </div>

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

    <div class="hero-image" style="background-image: url('../../assets/wisata/hero.png')"></div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="profil" style="background-image: url('../../assets/beranda/profil.png'); width:40px; height: 40px;"></div>
                    <div class="ms-3 mt-1">
                        <h5 style="font-weight:bold;">Firashinta Yudi</h5>
                        <p style="margin-top:-9px; font-size:0.8rem;">Pemandu Wisata Ini</p>
                    </div>
                </div>
                <h2 class="mb-3"><b>Candi Borobudur Indonesia</b></h2>
                <p>22 - november - 2023</p>
                
            </div>
            
            <div class="col-lg-6">
                <div class="d-flex mb-4 pesan-button me-5">
                    <div class="d-flex me-4">
                       <a href=""><img style="width:50px" src="../../assets/wisata/suka.png" alt=""></a>
                       <h5 class=" ms-3 me-3 mt-2"><b>200</b></h5>
                    </div>
                    <div class="d-flex">
                       <img style="width:50px" src="../../assets/wisata/komen.png">
                       <h5 class=" ms-3 me-3 mt-2"><b>200</b></h5>
                    </div>
                </div>
            </div>
        </div>

        <p class="pb-4" style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when  an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when  an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when  an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when  an unknown printer took a galley of type and scrambled it to make  a type specimen book. It has survived not only five centuries</p>

        <div class="komentar mt-3 mb-3">
            <div class="isi-komentar d-flex row">
                <div class="profil col-lg-2" style="background-image: url('../../assets/beranda/profil.png'); width:70px; height: 70px;"></div>
                <div class="konten-komentar d-flex col-lg-8">
                    <input type="text" name="" id="">
                    <button class=" kirim-komentar">Kirim</button>
                </div>
            </div>
        </div>

        <div class="list-komentar mt-5 mb-3">
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:55px; height: 55px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="profil me-4" style="background-image: url('../../assets/beranda/profil.png'); width:50px; height: 50px;"></div>
                    <div class="ms-3 mt-1">
                        <div class="d-flex">
                            <h6 class="pb-2 me-4" style="font-weight:bold;">Firashinta Yudi</h6>
                            <p style="font-size:0.8rem; color:gray;">22 - november - 2023</p>
                        </div>
                        <p style="margin-top:-9px; font-size:0.95rem;">Your video deserves to be recognized as a masterpiece of digital storytelling. 7</p>
                    </div>
                </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
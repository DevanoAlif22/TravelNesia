<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran - Travelnesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 </head>

  <style>
    * {
        margin:0px;
        padding:0px;
    }

    body {
        overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    a {
    font-family: "Poppins", sans-serif;
    }

    .container-pembayaran {
        height: 100vh;
    }

    .container-bayar {
        width: 300px;
        height:400px;
        border-radius:20px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        margin-bottom: 20px;
    }

    .atas-bayar {
        width : 100%;
        height:70px;
        border-radius: 20px 20px 0px 0px;
        background-color: #80FF1D;
    }
    
    .selesai {
        background-color: #1A2249;
        color: white;
        text-decoration:none;
        padding: 10px 30px;
        border-radius: 50px;
    }
  </style>
  <body>
    
    <div class="row container-pembayaran">
        <div class="col-lg-6 p-4" style="background-color: #1A2249;">
            <div class="container p-5 d-flex" style="flex-direction:column;">
                <a href="../beranda/beranda.php"><img style="width:20px;" src="../../assets/wisata/kembali.png" alt=""></a>
                <h1 class="mt-4" style="color:white;"><b>Pembayaran Premium TravelNesia</b></h1>
                <p style="color:white;" >Dengan Travelnesia premium anda bisa menjadi berkontribusi menjadi pemandu di website ini tanpa adanya batasan apapun. <br> Bayar sekarang yuk!</p>
                <img class="align-self-center" style="width:350px; margin-top:20px;" src="../../assets/wisata/premium.png" alt="">
                
            </div>
        </div>
        <div class="col-lg-6 d-flex p-4">
            <div class="m-auto">
                <div class="container-bayar">
                    <div class="atas-bayar">
                        <h5 class="text-black text-center p-4">Pembayaran Berhasil</h5>
                    </div>
                    <div class="bawah-bayar d-flex">
                        <div class="m-auto">
                            <div class="d-flex justify-content-center">
                                <img style="width:150px;" src="../../assets/wisata/berhasil.png" alt="">
                            </div>
                            <p class="text-center" style="text-align:center;">Pembayaran sukes terimakasih sudah berlangganan</p>
                            <div class="d-flex justify-content-center mt-5">
                                <a href="" class="selesai">Selesai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
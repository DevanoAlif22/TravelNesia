<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran - Travelnesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<style>
    * {
        margin: 0px;
        padding: 0px;
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
        height: 400px;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        margin-bottom: 20px;
    }

    .atas-bayar {
        width: 100%;
        height: 70px;
        border-radius: 20px 20px 0px 0px;
        background-color: #1A2249;
    }

    .masukkan-data {
        background-color: #1A2249;
        color: white;
        padding: 10px 20px;
        border-radius: 15px;
        padding-bottom: 5px;
    }

    .form input {
        width: 300px;
        height: 40px;
        border-radius: 10px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .form textarea {
        border-radius: 10px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        resize: none;
    }

    .selesai {
        background-color: #1A2249;
        color: white;
        text-decoration: none;
        padding: 10px 30px;
        border-radius: 10px;
    }
</style>

<body>

    <div class="row container-pembayaran">
        <div class="col-lg-6 p-4 d-flex" style="flex-direction:column; background-color: #1A2249;">
            <div class="container p-5 d-flex" style="flex-direction:column;">
                <a href="../beranda/beranda.php"><img style="width:20px;" src="../../assets/wisata/kembali.png"
                        alt=""></a>
                <h1 class="mt-4" style="color:white;"><b>Daftar sekarang jadi pemandu di TravelNesia</b></h1>
                <p style="color:white;">Dengan Travelnesia premium anda bisa menjadi berkontribusimenjadi pemandu di
                    website ini</p>
            </div>
            <div class="align-self-center">
                <img style="width:450px; margin-top:20px;" src="../../assets/wisata/bg-pemandu.png" alt="">
            </div>
        </div>
        <div class="col-lg-6 d-flex p-4">
            <div class="m-auto">
                <div class="masukkan-data">
                    <h4 class="text-center">Masukkan Data Diri Anda</h4>
                </div>

                <div class="form">
                    <div class="mb-3">
                        <h5 class="pt-4"><b>Upload KTP <span style="color:red;">*</span></b></h5>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div class="mb-3">
                        <h5 class="pt-4"><b>Upload CV <span style="color:red;">*</span></b></h5>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <h5 class="pt-4"><b>Deskripsi pengalaman <span style="color:red;">*</span></b></h5>
                    <textarea name="" id="" style="width: 100%;" rows="10"></textarea>
                </div>
                <button class="selesai mt-3">Kirim Data</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
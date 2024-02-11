<?php
session_start();

require_once '../../../Controller/UserController.php';
require_once '../../../Connection/connection.php';



if(isset($_SESSION['login']) && isset($_SESSION['id']) && isset($_SESSION['key'])) {
    global $conn;
    $kunci = $_SESSION['key'];
    $result = mysqli_query($conn, "SELECT email From pengguna Where id_user = " . $_SESSION['id']);
    $row = mysqli_fetch_assoc($result);
    if ($kunci === hash('sha256', $row['email'])) {
        echo 'sampe';
        $_SESSION["login"] = true;
        header("Location: ../beranda/beranda.php");
        exit;
    }
}

if(isset($_POST['masuk'])) {
    $verifikasi = verifikasiMasuk($_POST);

    if($verifikasi === false){
        $error = 'Email atau password anda salah';
    } else if($verifikasi == 'salah'){
        $error = 'Email yang anda masukkan belum terdaftar';
    } else {
        $_SESSION['login'] = true;
        $_SESSION['id'] = intval($verifikasi[0]);
        $_SESSION['key'] = hash('sha256', $verifikasi[1]);
        
        header("Location: ../beranda/beranda.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/login.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Masuk - Travelnesia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <div class="logo mt-5">
                    <img src="../../assets/login/logo.png" alt="">
                </div>
            </div>
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="judul mb-4">
                        <h1 class="text-white">Masuk Sekarang</h1>
                        <?php if(isset($error)) : ?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo $error ?>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="email mb-4">
                        <input style="width: 280px;" autocomplete="off" name="email" type="email" placeholder="masukan email">
                        <span><img src="../../assets/login/email.png" alt=""></span>
                    </div>
                    <div class="password mb-4">
                        <input style="width: 280px;" name="password" type="password" id="password" placeholder="masukan password">
                        <span><img src="../../assets/login/pw.png" alt=""></span>
                    </div>
                    <div class="lihat-pw mt-3 me-3" style="text-align: right;">
                        <label for="lihat" class="text-white me-2">Lihat password</label>
                        <input  type="checkbox" id="lihat" onchange="togglePassword()">
                    </div>
                    <div class="buat-akun mt-3 me-3 mb-5" style="text-align:right;">
                        <p class="text-white">Belum punya akun? <a href="daftar.php"> Buat akun</a></p>
                    </div>
                    <div class="masuk">
                        <button name="masuk" type="submit">Masuk</button>
                    </div>
                </div>
            </div>

        </form>
    </section>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var checkbox = document.getElementById("lihat");

            if (checkbox.checked) {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
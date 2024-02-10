
<?php 

require '../../../Controller/UserController.php';

$statusError = false;
$error = '';
$statusSuccess = false;
$success = '';
$statusComplated = false;
$complate = '';
if(isset($_POST['daftar'])) {
    
    $verifikasi = registrasi($_POST);
    if($verifikasi !== true) {
        $statusError = true;
        $error = $verifikasi;
    }  else {
        $statusSuccess = true;
        $success = 'Anda berhasil melakukan pendaftaran akun, silahkan verifikasi akun anda di email yang sudah kami kirimkan';
    }

}

if(isset($_GET['verify'])) {
    $verifikasi = verifikasi($_GET['verify']);
    if($verifikasi === false) {
        $statusError = true;
        $error = "Verifikasi gagal, pastikan anda klik link yang sudah di kirim lewat email";
    }  else if($verifikasi === true){
        $statusSuccess = true;
        $success = 'Anda berhasil melakukan verifikasi akun, silahkan masuk ke halaman login';
    } else if($verifikasi ===  'terverifikasi'){
        $statusComplated = true;
        $complate = 'Anda sudah berhasil melakukan verifikasi akun';
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

    <title>Daftar - Travelnesia</title>
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
                    <div class=" judul mb-4">
                        <h1 class="text-white">Daftar Sekarang</h1>
                        <?php if($statusError === true) : ?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo $error ?>
                            </div>
                        <?php endif;?>
                        <?php if($statusSuccess === true) : ?>
                            <div class="alert alert-success" role="alert">
                            <?php echo $success ?>
                            </div>
                        <?php endif;?>
                        <?php if($statusComplated === true) : ?>
                            <div class="alert alert-success" role="alert">
                            <?php echo $complate ?>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="email mb-4">
                        <input type="email" name="email" placeholder="masukan email">
                        <span><img src="../../assets/login/email.png" alt=""></span>
                    </div>
                    <div class="password mb-4">
                        <input min="8" name="password" type="password" id="password" placeholder="masukan password">
                        <span><img src="../../assets/login/pw.png" alt=""></span>
                    </div>
                    <div class="password">
                        <input min="8" name="verifikasi-password" type="password" id="confirm_password" placeholder="konfirmasi password">
                        <span><img src="../../assets/login/pw.png" alt=""></span>
                    </div>
                    <div class="lihat-pw mt-3 me-3" style="text-align: right;">
                        <label for="lihat" class="text-white me-2">Lihat password</label>
                        <input type="checkbox" id="lihat" onchange="togglePassword()">
                    </div>
                    <div class="buat-akun mt-3 me-3 mb-5" style="text-align:right;">
                        <p class="text-white">Sudah punya akun? <a href="login.php"> Masuk sekarang</a></p>
                    </div>
                    <div class="masuk">
                        <button name="daftar" type="submit">Daftar Sekarang</button>
                    </div>
                </div>

            </div>
        </form>
    </section>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var confirmPasswordField = document.getElementById("confirm_password");
            var checkbox = document.getElementById("lihat");

            if (checkbox.checked) {
                passwordField.type = "text";
                confirmPasswordField.type = "text";
            } else {
                passwordField.type = "password";
                confirmPasswordField.type = "password";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
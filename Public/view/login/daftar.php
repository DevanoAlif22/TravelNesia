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

    <title>Hello, world!</title>
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
        <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
                <div class=" judul mb-4">
                    <h1 class="text-white">Masuk Sekarang</h1>
                </div>
                <div class="email mb-4">
                    <input type="text" placeholder="masukan email">
                    <span><img src="../../assets/login/email.png" alt=""></span>
                </div>
                <div class="password mb-4">
                    <input type="password" id="password" placeholder="masukan password">
                    <span><img src="../../assets/login/pw.png" alt=""></span>
                </div>
                <div class="password">
                    <input type="password" id="confirm_password" placeholder="konfirmasi password">
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
                    <a href="">Daftar Sekarang</a>
                </div>
            </div>
        </div>
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
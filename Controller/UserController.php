<?php 
// Sertakan file PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));
require_once ROOT_PATH . '/Model/UserModel.php';
require_once ROOT_PATH . '/Connection/connection.php';


function registrasi($data) {
    global $conn;

    $email = $data['email'];
    $password = mysqli_real_escape_string($conn, $data['password']);
    $verifikasiPass = mysqli_real_escape_string($conn, $data['verifikasi-password']);
    $kunciVerifikasi = generateRandomString();

    if($password == $verifikasiPass) {
        if(strlen($password) < 8) {
            return 'Password minimal 8 karakter';
        }
        // enkripsi password
        $queryValidasiEmail = "SELECT * FROM pengguna WHERE email = '$email'";
        $resultValidasiEmail = mysqli_query($conn, $queryValidasiEmail);

        if(mysqli_num_rows($resultValidasiEmail) > 0) {
            return 'Email sudah pernah digunakan';
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            // tanggal
            date_default_timezone_set('Asia/Jakarta');
            $created_at = date('Y-m-d H:i:s');
    
            $queryTambahUser = "INSERT INTO pengguna (id_user,id_peran,email, password, verifikasi, melihat, created_at)
            VALUES ('',1,'$email','$password','$kunciVerifikasi',0,'$created_at')";
            $resultTambahUser = mysqli_query($conn, $queryTambahUser);
            if($resultTambahUser) {
                $queryCariUser = "SELECT id_user, id_peran FROM pengguna WHERE email = '$email' LIMIT 1";
                $resultCariUser = mysqli_query($conn, $queryCariUser);
                $result = query_data($resultCariUser);
                $idUser = $result[0]['id_user'];
                $queryTambahProfil = "INSERT INTO profil (id_profil, id_user, melihat)
                VALUES ('','$idUser', 0)";
                $resultTambahProfil = mysqli_query($conn, $queryTambahProfil);

                // Pengiriman email
                $details = [
                    'email' => $email,
                    'website' => "Website Mental Health",
                    'url' => 'http://' . $_SERVER['HTTP_HOST'] . '/TravelNesia/public/view/login/daftar.php?verify=' . $kunciVerifikasi
                ];

                sendVerificationEmail($email, $details);
                return true;
            }
        }
    } else {
        return 'Pastikan Password dan Verifikasi Password sama';
    }
}

function sendVerificationEmail($email, $details) {

    require_once ROOT_PATH . '/vendor/phpmailer/phpmailer/src/Exception.php';
    require_once ROOT_PATH . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require_once ROOT_PATH . '/vendor/phpmailer/phpmailer/src/SMTP.php';
    

// Instansiasi objek PHPMailer
$mail = new PHPMailer(true);

try {
    // Konfigurasi SMTP
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com"; //host mail server
    $mail->SMTPAuth = true;
    $mail->Username = "adasampah84@gmail.com";   //nama-email smtp
    $mail->Password = "bmxqtptzsvrbkwls"; 
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set pengirim dan penerima email
    $mail->setFrom('adasampah84@gmail.com', 'Travelnesia');
    $mail->addAddress($email, 'Pengguna Travelnesia');

    // Konten email
    $mail->isHTML(true);
    $mail->Subject = 'Verifikasi Akun Travelnesia';
    $mail->Body    = $mail->Body = '
                        <p>Selamat datang di Travelnesia!</p>
                        <p>Untuk memverifikasi akun Anda dengan email '.$details['email'].', silakan klik tautan berikut:</p>
                        <a href="'.$details['url'].'">Verifikasi Akun</a>
                        <p>Terima kasih atas pendaftaran Anda di Website Travelnesia.</p>
                    ';

    // Kirim email
    $mail->send();
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

function verifikasiMasuk($data) {
    global $conn;
    $email = $data['email'];
    $password = mysqli_real_escape_string($conn, $data['password']);

    $queryUser = "SELECT id_user, email, password from pengguna where email = '$email' limit 1";
    $resultQueryUser = mysqli_query($conn, $queryUser);
    if(mysqli_num_rows($resultQueryUser) > 0){
        $result = query_data_login($resultQueryUser);
        $id = $result[0]['id_user'];
        
        // cek apakah email sudah terverifikasi
        $queryVerifikasi = "SELECT id_user from pengguna where id_user = '$id' and email_verifikasi is null";
        $resultQueryVerifikasi = mysqli_query($conn, $queryVerifikasi);

        if(mysqli_num_rows($resultQueryVerifikasi) > 0) {
            return 'belum verifikasi';
        }

        // cek password
        $passwordDB = $result[0]['password'];

        if(password_verify($password, $passwordDB)) {
            $result = mysqli_query($conn, "SELECT * From pengguna Where id_user = $id");
            $row = mysqli_fetch_assoc($result);

            return [$row['id_user'], $row['email']];


        } else {
            return false;
        }

    } else {
        return 'salah';
    }
}


function verifikasi($id) {
    global $conn;
    $queryCariUser = "SELECT id_user FROM pengguna WHERE verifikasi = '$id' LIMIT 1";
    $resultCariUser = mysqli_query($conn, $queryCariUser);
    $result = query_data($resultCariUser);
    $id_user = $result[0]['id_user'];
    if(mysqli_num_rows($resultCariUser) > 0) {
        $queryValidasiUser = "SELECT id_user from pengguna where id_user = '$id_user' and email_verifikasi is null limit 1";
        $resultValidasiUser = mysqli_query($conn, $queryValidasiUser);
        if(mysqli_num_rows($resultValidasiUser) > 0){
            date_default_timezone_set('Asia/Jakarta');
            $created_at = date('Y-m-d H:i:s');
            $queryUpdateUser = "UPDATE pengguna set email_verifikasi = '$created_at' where id_user = $id_user";
            $resultUpdateUser = mysqli_query($conn, $queryUpdateUser);
        } else {
            return 'terverifikasi';
        }

        return true;
    } else {
        return false;
    }
}


function generateRandomString($length = 40) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>

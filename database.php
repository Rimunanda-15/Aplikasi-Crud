<?php

$DB_Nama = "crud_perpustakaan";
$DB_User = "root";
$DB_Password = "";
$DB_Host = "127.0.0.1";
$DB_Port = 3306;

$konek = mysqli_connect($DB_Host, $DB_User, $DB_Password, $DB_Nama, $DB_Port);

if (mysqli_errno($konek)) {
    echo "error". mysqli_errno();
}

// function registrasi($data){
//     global $konek;
//     $username = strtolower(stripslashes($data["username"]));
//     $password = mysqli_real_escape_string($konek, $data["password"]);
//     $password2 = mysqli_real_escape_string($konek, $data["password"]);

//     $result = mysqli_query($konek, "SELECT username FROM user WHERE username = '$username'");

//     if (mysqli_fetch_assoc($result)) {
//         echo "<script>
//         alert('username sudah ada') </script>";
//         return false;
//     }

//     if ($password !== $password2) {
//         echo "<script>
//         alert('konfirmasi password tidak sesuai') </script>";
//         return false;
//     }


//     $password = password_hash($password, PASSWORD_DEFAULT);
//     mysqli_query($konek, "INSERT INTO user VALUES('','$username', 'password')");
//     return mysqli_affected_rows($konek);
// }
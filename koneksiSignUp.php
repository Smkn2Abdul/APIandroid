<?php
require "koneksidatabase.php";
$db = new DataBase();
if (isset($_POST['nama_lengkap']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['alamat'])) {
    if ($db->dbConnect()) {
        if ($db->koneksiSignUp("tbl_user", $_POST['nama_lengkap'], $_POST['username'], $_POST['password'], $_POST['alamat'])) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "Semua field harus terisi";
?>
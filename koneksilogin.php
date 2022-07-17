<?php
require "koneksidatabasse.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->koneksilogin("tbl_user", $_POST['username'], $_POST['password'])) {
            echo "Login Success";
        } else echo "Username or Password failed";
    } else echo "Error: Database connection";
} else 
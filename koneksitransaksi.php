<?php
require "koneksidatabase.php";
$db = new DataBase();
if (isset($_POST['id_transaksi']) && isset($_POST['no_transaksi']) && isset($_POST['tgl_transaksi']) && isset($_POST['total_bayar'])) {
    if ($db->dbConnect()) {
        if ($db->koneksitransaksi("tbl_user", $_POST['id_transaksi'], $_POST['no_transaksi'], $_POST['tgl_transaksi'], $_POST['total_bayar'])) {
            echo "transaksi Success";
        } else echo "transaksi up Failed";
    } else echo "Error: Database connection";
} else echo "Semua field harus terisi";
?>
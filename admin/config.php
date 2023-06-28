<?php
$koneksi = new mysqli("localhost", "root", "", "222102502");
if ($koneksi->connect_error) {
    trigger_error('koneksi ke database gagal: ' . $koneksi->connect_error, E_USER_ERROR);
}
?>
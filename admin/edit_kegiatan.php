<?php
include 'config.php';
$id = $_POST["id_kegiatan"];
$query = "SELECT * FROM tb_kegiatan where id_kegiatan='$id'";
$hasil = $koneksi->query($query);
$baris = mysqli_fetch_row($hasil);
$foto_lama = $baris[3];


if (isset($_POST['submit'])) {
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES["foto"]["name"];

    if (empty($foto)) {
        $hasil = $koneksi->query("update tb_user set nama_kegiatan='$nama_kegiatan',deskripsi='$deskripsi' where id_user=$id");
        if ($hasil) {
            ?>
            <script language="Javascript">
                alert("Data User Berhasil Diupdate");
                window.location = "dashboard.php?dashboard=data_kegiatan";
            </script>
            <?php
        }
    } else {
        unlink("../foto_kegiatan/$foto_lama");
        move_uploaded_file($_FILES["foto"]["tmp_name"], "../foto_kegiatan" . $_FILES["foto"]["name"]);
        $hasil = $koneksi->query("update tb_kegiatan set nama_kegiatan= '$nama_kegiatan', deskripsi='$deskripsi',foto='$foto' where id_kegiatan= $id");
        if ($hasil) {
            ?>
            <script language="Javascript">
                alert("Data User Berhasil Diupdate");
                window.location = "dashboard.php?dashboard=data_kegiatan";
            </script>
            <?php
        }
    }
}
?>
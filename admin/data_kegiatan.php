<?php
include 'config.php';
$query = "select * from tb_kegiatan";
$hasil = $koneksi->query($query);
?>
<script>
    function ConfirmDelete() {
        var del = confirm("Yakin data akan di hapus?");
        if (del)
            return true;
        else
            return false;
    }
</script>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data</h1>
</div>
<section>
    <div class="container">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">Tambah
            Data</button>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kegiatan</th>
                        <th>Deskripsi</th>
                        <th>Foto Kegiatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_array($hasil)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>$row[nama_kegiatan]</td>";
                        echo "<td>$row[deskripsi]</td>";
                        echo "<td><a href='.../foto_kegiatan/$row[foto]'target='_blank'/><img src='.../foto_kegiatan/$row[foto]'width='50'</a></td>";
                        echo "<td>
                                <a href='dashboard.php?dashboard=hapus_kegiatan&id=$row[id_kegiatan]'
                                Onclick='return ConfirmDelete();'>
                                <i class='bi bi-trash2-fill'></i></a>&nbsp;&nbsp;
                                <a href='#' data-us-toggle='modal'
                                data-bs-target='#edit$row[id_kegiatan]'>
                                <i class='bi bi-pencil-square'></i></a>
                                </td>";
                        echo "</tr>";
                        $no++;
                    ?>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="edit<?php echo $row['id_kegiatan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="edit_kegiatan.php" method="POST" enctype='multipart/form-data'>
                                        <input type="hidden" name="id_kegiatan" value="<?php echo $row['id_kegiatan']; ?>">
                                        <div class="modal-body">
                                            <label for="">Nama Kegiatan:</label>
                                            <input type="text" name="namakegiatan" class="form-control" value="<?php echo $row['username']; ?>"><br>
                                            <label for="">Deskripsi:</label>
                                            <input id="deskripsi" <?php echo $row['id_kegiatan']; ?> type="hidden" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
                                            <trix-editor input="deskripsi<?php echo $row['id_kegiatan']; ?>"></trix-editor><br>
                                            <input type="file" name="foto">
                                            <p style="size: 90%; color:gray;"></i><?php echo $row['foto']; ?></i></P>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Simpan Bang</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="tmb_kegiatan.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label for=""> Nama Kegiatan:</label>
                    <input type="text" name="nama_kegiatan" class="form-control" placeholder="Username" required><br>
                    <label for=""> Deskripsi:</label>
                    <input id="deskripsi" type="hidden" name="deskripsi">
                    <trix-editor input="deskripsi"></trix-editor><br>
                    <input type="file" name="foto"><br>
                    <p style="size:90%; color:gray;"><i> PILIH FOTO KEGIATAN</i></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
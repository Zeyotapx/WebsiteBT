<?php
include 'config.php';
$query = "select * from tb_user";
$hasil = $koneksi->query($query);
?>
<script>
    function ConfirmDelete() {
        var del = confirm("Yakin data akan dihapus??");
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
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_array($hasil)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>$row[username]</td>";
                        echo "<td>$row[password]</td>";
                        echo "<td>
                                        <a href='dashboard.php?dashboard=hapus_user&id=$row[id_user]'
                                        Onclick='return ConfirmDelete();'>
                                        <i class='bi bi-trash'></i></a>&nbsp;&nbsp;
                                        <a href='' data-bs-toggle='modal'
                                        data-bs-target='#edit$row[id_user]'>
                                        <i class='bi bi-pencil-square'></i></a>
                                        </td>";
                        echo "</tr>";
                        $no++;
                        ?>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="edit<?php echo $row['id_user']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="edit_user.php" method="POST">
                                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                                        <div class="modal-body">
                                            <input type="text" name="username" class="form-control"
                                                value="<?php echo $row['username']; ?>"><br>
                                            <input type="text" name="password" class="form-control"
                                                value="<?php echo $row['password']; ?>"><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="tmb_user.php" method="post">
                <div class="modal-body">
                    <input type="text" name="username" class="form-control" placeholder="Username" required><br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
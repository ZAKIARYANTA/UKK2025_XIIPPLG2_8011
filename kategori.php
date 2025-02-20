<h1 class="mt-4">My Categories</h1>
<div class="container-fluid px-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=kategori_tambah" class="btn btn-outline-secondary">+ Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th div class= bg-secondary>No</th>     
                        <th div class= bg-secondary>Nama Kategori</th>
                        <th div class= bg-secondary>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM categories");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['category']; ?></td>
                                <td>
                                   
                                    <a onclick="return confirm('Apakah anda yakin menhapus data ini?');" href="?page=kategori_hapus&&id=<?php echo $data['user_id']; ?>" class="btn btn-secondary ">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
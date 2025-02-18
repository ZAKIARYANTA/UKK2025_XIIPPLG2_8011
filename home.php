<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Welcome!</li>
</ol>

<div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #B5828C;">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM categories"));
                ?>
                Total Kategori</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=kategori">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #B5828C;">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM tasks"));
                ?>
                Total Buku</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=buku">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #B5828C;">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM users"));
                ?>
                Total </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=ulasan">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td width="200">Name</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['users']['name']; ?></td>
            </tr>
            <tr>
                <td width="100">Tanggal Login</td>
                <td width="1">:</td>
                <td><?php echo date('d-m-Y'); ?></td>
            </tr>
        </table>
    </div>
</div>

<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Welcome!</li>
</ol>

<div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color:rgb(163, 160, 161);">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM categories"));
                ?>
                Categories</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=kategori">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-5>
        </div>
        <div class="col-xl-3 col-md-6>
            <div class="card text-white mb-4" style="background-color:rgb(163, 160, 161)    ;">
                <div class="card-body">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM users"));
                ?>
                Tasks</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="?page=ulasan">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

</div>



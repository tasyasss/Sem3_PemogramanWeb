<div class="container-fluid">
    <div class="row">
        <?php
        include 'menu.php';

        $query_anggota = "SELECT COUNT(id) AS Jumlah FROM anggota";
        $result_anggota = mysqli_query($koneksi, $query_anggota);
        $row_anggota = mysqli_fetch_assoc($result_anggota);

        $query_jabatan = "SELECT COUNT(id) AS Jumlah FROM jabatan";
        $result_jabatan = mysqli_query($koneksi, $query_jabatan);
        $row_jabatan = mysqli_fetch_assoc($result_jabatan);
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Anggota</h5>
                            <p class="card-text"><?php echo $row_anggota['Jumlah']; ?> orang</p>
                            <a href="index.php?page=anggota" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i> Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Jabatan</h5>
                            <p class="card-text"><?php echo $row_jabatan['Jumlah']; ?> orang</p>
                            <a href="index.php?page=jabatan" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i> Kelola</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
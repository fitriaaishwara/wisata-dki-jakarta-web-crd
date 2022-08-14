<?php
require ('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_wisata ORDER BY idw ASC");
?>

<!-- Menampilkan tabel data harga -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Nama Tempat Wisata</th>
                                <th>Harga</th>
                            </tr>
                            <?php $i = 1; ?>
                        <?php while($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['nama_wisata'] ?></td>
                                <td><?= $row['harga'] ?></td>
                            </tr>
                            <?php $i++; ?>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tabel data harga selesai -->
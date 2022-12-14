<?php
require ('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_transaksi ORDER BY id DESC");
?>

<!-- Menampilkan tabel pesanan tiket -->
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
                                <th>Nama Wisata</th>
                                <th>Nama</th>
                                <th>No. Identitas</th>
                                <th>No. Hp</th>
                                <th>Tanggal Pergi</th>
                                <th>Dewasa</th>
                                <th>Anak</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
        
                        <?php $i = 1; ?>
                        <?php while($row = mysqli_fetch_array($query)) : ?>
                        <?php
                            function tglIndo($tgl){
                                //menjadikan tgl dalam format tanggal-nama bulan-tahun
                                //awalnya tgl sudah dalam format yyyy-mm-dd
                                $x = explode('-',$tgl);
                                return $x[2].'/'.$x[1].'/'.$x[0];
                            }
                            $tgl = $row['tanggal'];
                            ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['nama_wisata'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['no_identitas'] ?></td>
                                <td><?= $row['no_hp'] ?></td>
                                <td><?= tglIndo($tgl)?></td>
                                <td><?= $row['jml'] ?></td>
                                <td><?= $row['jml_anak'] ?></td>
                                <td><?= $row['total_harga'] ?></td>
                                <th>
                                    <a href="index.php?page=hapus&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Hapus</a>
                                </th>
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
<!-- tabel pesanan tiket selesai-->
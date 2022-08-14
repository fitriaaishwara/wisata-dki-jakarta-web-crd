<?php
include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
$datawisata = "select * from tbl_wisata";
$data_vc = $koneksi->query($datawisata);

if(isset($_GET['detail']))
{
    include('sds');
}
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <center>
                  <a href="index.php?page=tambah_wisata" class="btn btn-primary px-5" style="padding-top:10;">+ &nbsp; Tambah Wisata</a>
                </center>
            </div>
        </div>
    </div>  
</section>

<!-- card tempat wisata -->
<section>
    <div class="container">
        <div class="row">
            <?php
				foreach ($data_vc as $index => $value) {
			?>
            <div class="col-lg-4 d-flex align-items-stretch mt-4 mb-3">
                <div class="card card-wisata">
                    <img src="gambar/<?php echo $value['gambar']?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['nama_wisata']?></h5>
                        <p class="card-text" style="text-align:justify;"><?php echo substr($value['deskripsi'], 0, 100); ?>...</p>
                        <a href="index.php?page=detail&idw=<?= $value['idw'] ?>" class="btn btn-primary px-5 float-right">Detail</a>
                    
                    </div>
                </div>
            </div>
            <?php
			}
			?>
        </div>
    </div>
</section>
<!-- card tempat wisata selesai-->
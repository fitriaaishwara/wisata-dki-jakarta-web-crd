<!DOCTYPE html>
<html>

<head>
    <title>Wisata DKI Jakarta</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
</head>

<body>

<!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top py-3 navbar-light" id="mainNav">
        <div class="container"> 
            <a class="navbar-brand js-scroll-trigger" href="index.php">JakTrip.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="index.php">Beranda</a></li>
                    <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="index.php?page=wisata">Tempat Wisata</a></li>
                    <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="index.php?page=harga">Harga Tiket</a></li>
                    <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="index.php?page=pesanan">Pesanan</a></li>
                    <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="index.php?page=penjualan">Grafik Penjualan</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- navbar selesai -->

<!-- inisialisasi navbar -->
    <?php
        if (isset($_GET['page'])){
            $page = $_GET['page'];
            if($page == 'wisata'){
                include('wisata.php');
            }
            else if ($page == 'tambah_wisata'){
                include('tambah_wisata.php');
            }
            else if ($page == 'pesanan'){
                include('pesanan.php');
            }
            else if ($page == 'detail'){
                include('detail.php');
            }
            else if ($page == 'harga'){
                include('harga.php');
            }
            else if ($page == 'penjualan'){
                include('penjualan.php');
            } else if ($page == 'hapus'){
                include('hapus.php');
            } 
        } else {
        ?>

<!-- kecuali bagian header -->

    <header class="header">
        <div class="shape-wrap shape-header"><img src="./assets/img/blob-shape-1.svg" alt=""></div>
            <div class="container">
                <center>
                    <h1><b>Selamat Datang</h1>
                    <h3>di Website Pariwisata Daerah Khusus Ibukota Jakarta</h3>
                    <br>
                    <img src="img/jakarta.png" height="250px" style="display: block; margin: auto;">
                </center>
            </div>
        </div>
    </header>
<?php
}
?>

    <!-- footer -->
    <footer class="pt-4 pb-5 bg-light position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <hr class="border-2x color-10 my-2"> </div>
                    <div class="col-lg-auto mt-4">
                        <h5 class="color-3 fw-700 mb-4">JakTrip.</h5> </div>
                    <div class="col-lg-5 mt-4">
                        <p class="color-7 mb-0 pr-md-11 pr-lg-0">merupakan website pembelian tiket wisata di Daerah Khusus Ibukota Jakarta</p>
                    </div>
                    <div class="col-lg-auto ml-lg-auto mt-4"><a class="color-4 mr-4" href=" " alt="free html templates ">© 2022 18102122.</a></div>
            </div>
    </footer> 
    <!-- footer selesai -->   
    
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

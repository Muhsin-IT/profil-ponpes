<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logoAlmiftah.png">
    <title>Home | AlmiftahKauman</title>
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- ---- -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="partialis/partials.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="">
    <?php require "partialis/navbarDekstop.php" ?>


    <!-- hero1 Section  -->
    <section id="hero1" class="hero1 section dark-background">

        <div id="hero1-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="assets/hero-carousel/banner1.png" alt="">
                <div class="carousel-container">
                    <h2>Pon Pes Al-Miftah Kauman<br></h2>
                    <p>Pondok Pesantren Al-Miftah didirikan oleh K.H.R. Ichsan Asyhary pada tahun 1964. Sebelumnya, beliau telah menuntut ilmu di beberapa pondok pesantren besar di Jawa Tengah dan Jawa Timur.</p>
                    <a href="about.php" class="btn-get-started">Selengkapnya</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="assets/hero-carousel/banner3.png" alt="">
                <div class="carousel-container">
                    <h2>Informasi PSB</h2>
                    <p>Informasi Pendaftarn Santri Baru, bisa secara online melalui website ppdb.almiftah.online Atau datang langsung ke Kantor Sekertariat Yayasan PonPes Almiftah jatisarono, Nanggulan, Kulon Progo, DI Yogyakarta</p>
                    <a href="#featured-services" class="btn-get-started">Selengkapnya</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="assets/hero-carousel/banner2.png" alt="">
                <div class="carousel-container">
                    <h2>Peraturan Dan Tatatertib Santri</h2>
                    <p>Wali Santri DI harapkan membaca peraturan dan tatatertib santri supaya apa ?, jika santri melakukan pelanggaran tidak tercuci otaknya oleh anaknya sendiri dan seolah olah pengurus yang salah</p>
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero1-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero1-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section><!-- /hero1 Section -->


    <!---------------------------------------------------- banner --------------------------------------------->
    <div id="carouselExample" class="carousel slide container mt-2 mb-2" data-bs-ride="carousel">
        <!-- Indikator (Dots) -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></button>
        </div>

        <!------------------------------------------- Gambar Banner -------------------------------------------->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.png" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="img/2.png" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="img/3.png" class="d-block w-100" alt="Banner 3">
            </div>
            <div class="carousel-item">
                <img src="img/1.png" class="d-block w-100" alt="Banner 3">
            </div>
            <div class="carousel-item">
                <img src="img/2.png" class="d-block w-100" alt="Banner 3">
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- ------------------ popup --------------------- -->
    <!-- Modal Bootstrap -->
    <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-3 mb-2 bg-light-subtle text-success-emphasis">
                    <h5 class="modal-title" id="popupLabel"><b>Pemberitahuan ❗️❗️❗️</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Ini adalah website ponpes Al-Miftah! <br>Website ini masih dalam <B> tahap pengembangan,</B> jadi mungkin masih ada bug atau fitur yang belum sempurna. Mohon dimaklumi ya!😊.<br></p>
                    <div class="container p-3 mb-2 bg-success-subtle text-success-emphasis">
                        <h6 class="text-center mb-3">mampir ke sosmed kami</h6>
                        <div class="row justify-content-center">
                            <div class="col-sm-1 col-1 d-flex justify-content-center mb-2">
                                <a href="https://web.facebook.com/almiftahkauman/" target="_blank" rel="noopener noreferrer" class="popup"><i class="fab fa-facebook fs-2"></i></a>
                            </div>
                            <div class="col-sm-1 col-1 d-flex justify-content-center mb-2">
                                <a href="https://www.instagram.com/almiftahkauman/" target="_blank" rel="noopener noreferrer" class="popup"><i class="fab fa-instagram fs-2"></i></a>
                            </div>
                            <div class="col-sm-1 col-1 d-flex justify-content-center mb-2">
                                <a href="https://wa.me/6285173235050" target="_blank" rel="noopener noreferrer" class="popup"><i class="fa-brands fa-whatsapp fs-2"></i></a>
                            </div>
                            <div class="col-sm-1 col-1 d-flex justify-content-center mb-2">
                                <a href="https://www.youtube.com/@almiftahkauman2105" target="_blank" rel="noopener noreferrer" class="popup"><i class="fab fa-youtube fs-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <h5>Mau daftar PPDB Online</h5>
                        <a href="https://ppdb.almiftah.online" target="_blank" class="d-flex align-items-center justify-content-center gap-2 bg-dark text-white py-2 px-3 rounded text-decoration-none">
                            <i class="fa-solid fa-earth-americas fa-sm"></i>
                            <span>ppdb.almiftah.online</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Menampilkan popup saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById('popupModal'));
            myModal.show();
        });
    </script>
    <!-- ------------------ popup --------------------- -->

    <!-- hero  -->
    <section class="hero my-5">
        <div class="container">
            <div class="hero-box d-flex align-items-canter justify-content-between flex-md-row flex-column gap-md-0 gap-5">
                <div class="box">
                    <h1 class="fw-bold mb-3">Pondok Pesantren<br><span class="text-success">Al-Miftah </span>Kauman</h1>
                    <p class="lh-lg mb-4 text-justify">Pondok Pesantren Al-Miftah didirikan oleh KH.R. Ichsan Asyhari pada tahun 1964, sekembalinya beliau dari menuntut ilmu ke beberapa pondok pesantren besar di sekitar Jawa tengah dan Jawa timur. Pendirian ini berada disekitar pekarangan pribadi beliau, yang berada di dusun Kauman-Jatingarang kidul, Jatisarono, Nanggulan, Kulon Progo DIY.</p>
                    <div>
                        <a href="ppdb.php" class="btn btn-success">Pendartaran Santri</a>
                        <a href="#" class="btn btn-outline-success">Virtual Tour</a>
                    </div>
                </div>
                <div class="box logo">
                    <img src="img/logoalmiftah.png" alt="almiftah" />
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section bg-success text-dark bg-opacity-25">

        <!-- Section Title -->
        <div class="container text-center section-title" data-aos="fade-up">
            <h2>Paket Bulanan</h2>
            <p>Paket bulanan Santri, Pemaayaran Bulanan Dan Uang Saku Santri</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-3">

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Paket 1</h3>
                        <h4><sup>RP</sup>900.000<span> / Bulan</span></h4>
                        <ul class="text-start">
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li class="na">Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-item featured">
                        <h3>Paket 2</h3>
                        <h4><sup>RP</sup>1.400.000<span> / Bulan</span></h4>
                        <ul class="text-start">
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-item">
                        <h3>Paket 3</h3>
                        <h4><sup>RP</sup>1.600.000<span> / Bulan</span></h4>
                        <ul class="text-start">
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-item">
                        <span class="advanced">Tertinggi</span>
                        <h3>Paket 4</h3>
                        <h4><sup>RP</sup>1.900.000<span> / Bulan</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </div>

    </section><!-- /Pricing Section -->

    <!-- hero  -->
    <div>
        <a href="rapor/index.php">
            <i class="bi bi-person-circle"></i>
            <small>Cek Nilai Rapor</small>
    </div>





    <?php require "partialis/footer.php" ?>



    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- ====================================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>

</html>
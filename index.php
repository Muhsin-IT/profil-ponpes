<!doctype html>
<html lang="en">

<head>
    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- ---- -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logoAlmiftah.png">
    <title>Home | AlmiftahKauman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="">
    <?php require "navbar.php" ?>
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
    <section class="hero">
        <div class="container">
            <div class="hero-box d-flex align-items-canter justify-content-between flex-md-row flex-column gap-md-0 gap-5">
                <div class="box">
                    <h1 class="fw-bold mb-3">Pndaftaran <br>Santri Baru <br>2025 <span class="text-success">Telah Di Buka</span></h1>
                    <p class="lh-lg mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae tempore, aspernatur eius repellat perferendis assumenda earum vero ratione dolor? Facilis!</p>
                    <div>
                        <a href="ppdb.php" class="btn btn-success">Tata Cara Pendaftaran</a>
                        <a href="#" class="btn btn-outline-success">Jenjang Pendidikan</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/logoalmiftah.png" alt="almiftah" />
                </div>
            </div>
        </div>
    </section>
    <!-- hero  -->






    <?php require "footer.php" ?>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>

</html>
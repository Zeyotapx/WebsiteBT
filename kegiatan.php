<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MENYADIK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kegiatan.php">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang kami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hubungi kami.php">Call Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="kegiatan" class="p-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>PILIHAN</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="pesawat3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tiket Pesawat</h5>
                            <p class="card-text">"Menyediakan penerbangan yang sesuai yang anda inginkan saat
                                berpergian, dan harga
                                tiketnya sangat terjangkau dan sesuai kebutuhan"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="Kamar.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hotel</h5>
                            <p class="card-text">"Ingin menikmati suasana hotel yang menarik?? Segera pesan kamarnya
                                dan rasakan
                                sensai yang menyenangkan dihotel yang anda inginkan"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="kebun.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Wisata</h5>
                            <p class="card-text">"Menyediakan wisata yang anda inginkan dan berbagai macam kebutuhan
                                sesuai tempat
                                yang ingin anda kunjungi"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="taksi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Taxi</h5>
                            <p class="card-text">"Menyediakan kendaraan sesuai yang anda inginkan dan juga kami akan
                                mengantarkan anda
                                ketujuan dengan selamat"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="asuransi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Asuransi Perjalanan</h5>
                            <p class="card-text">"Aset berharga seperti kesehatan yang memiliki sejarah panjang
                                tentang kehidupan anda yang berlika-liku hanya berharga saat anda memilikinya,
                                Saat ia rusak atau hilang maka yang tinggal hanyalah penyesalan mendalam jika anda
                                tidak memiliki asuransi untuknya"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="financial.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Financial</h5>
                            <p class="card-text">"Ingin menikmati suasana hotel yang menarik?? Segera pesan kamarnya
                                dan rasakan
                                sensai yang menyenangkan dihotel yang anda inginkan"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="kereta api.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tiket Kereta Api</h5>
                            <p class="card-text">"Menyediakan wisata yang anda inginkan dan berbagai macam kebutuhan
                                sesuai tempat
                                yang ingin anda kunjungi"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="voucher.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Voucher Hadiah</h5>
                            <p class="card-text">"Menyediakan kendaraan sesuai yang anda inginkan dan juga kami akan
                                mengantarkan anda
                                ketujuan dengan selamat"</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
    </section>


</body>

</html>
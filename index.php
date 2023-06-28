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
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

  <div class="p-5 mb-4 text-center" id="jumbotron">
    <div class="container-fluid py-5">
      <img src="new3.jpg" widht="400" id="profil" class="rounded-circle img thumbnail img-responsive">
      <p class="col-mb-8 fs-4 text-white">Menyediakan Tempat liburan & Wisata</p>
      <a href="admin" class="btn btn-primary btn-lg" type="button">Login</a>
    </div>
  </div>

  <section id="kegiatan" class="p-5">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>Kegiatan</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="pesawat3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tiket Pesawat</h5>
              <p class="card-text">"Menyediakan penerbangan yang sesuai yang anda inginkan saat berpergian, dan harga
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
              <p class="card-text">"Ingin menikmati suasana hotel yang menarik?? Segera pesan kamarnya dan rasakan
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
              <p class="card-text">"Menyediakan wisata yang anda inginkan dan berbagai macam kebutuhan sesuai tempat
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
              <p class="card-text">"Menyediakan kendaraan sesuai yang anda inginkan dan juga kami akan mengantarkan anda
                ketujuan dengan selamat"</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="hubungikami" class="p-5 bg-light">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>CONTACT US</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h6><i class="bi bi-house-fill"></i><br>Jln Sepakat, No. 777 Pontianak Kota</h6>
          <h6><i class="bi bi-mailbox"></i><br>menyadik@gmail.com</h6>
          <h6>
            <i class="bi bi-telephone-fill"></i><br>+62 855324423
          </h6>
          <h3 class="pt-4">Sosial Media</h3>
          <h1>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-youtube"></i>
        </div>
        </h1>
        <div class="col-md-5">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-dark text-center p-5 text-white">
    <p>Copyright &copy;
      <?php echo date('Y'); ?> Menyadik.com
    </p>
    <p>Created with <i class=" bi bi-heart-fill text danger"></i> by <a href="https://www.instagram.com/yoga.dwin_"
        class="text-white"> Yoga Dwi Noviyanto</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</body>

</html>
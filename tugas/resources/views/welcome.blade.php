<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sholat League</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <style>
    .bg-tosca {
      background-color: #2ab48b;
    }
    .navbar {
      background-color: #2ab48b; /* Warna background navbar */
      box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Shadow untuk navbar */
    }
    .navbar-brand {
      font-weight: bold;
      color: #fff; /* Warna teks navbar */
      font-size: 1.5rem;
    }
    .navbar-nav .nav-link {
      color: #fff !important; /* Warna teks link navbar */
      font-weight: bold;
    }
    .navbar-nav .nav-link:hover {
      color: #f0f0f0 !important; /* Warna teks link navbar saat hover */
    }
    .navbar-toggler {
      border-color: #fff; /* Warna garis toggle */
    }
    .navbar-toggler-icon {
      background-color: #fff; /* Warna ikon toggle */
    }
    .form-control {
      border-color: #fff; /* Warna border input search */
    }
    .form-control::placeholder {
      color: #f0f0f0; /* Warna placeholder input search */
    }
    .btn-outline-success {
      color: #fff;
      border-color: #fff; /* Warna border dan teks tombol 'Masuk' */
    }
    .btn-outline-success:hover {
      background-color: #fff;
      color: #2ab48b; /* Warna latar dan teks tombol 'Masuk' saat hover */
    }
    .carousel-item img {
      max-height: 400px; /* Ukuran maksimal gambar */
      object-fit: cover; /* Agar gambar tetap proporsional */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="bi bi-currency-dollar"></i> Sholat League</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Program
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Donatur</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Presensi</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Masuk</button>
        </form>
      </div>
    </div>
  </nav>


  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/mesjid1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/mesjid2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/mesjid3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container row  p-5 ">
    <div class="col-2 ">
      <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
        <nav class="nav nav-pills flex-column p-2">
          <a class="nav-link text-center" href=""><b>Waktu Sholat</b></a>
          <a class="btn btn-success mb-2" href="">Imsak <p class="m-2">04:52<i class="bi bi-clock-history mx-2"></i></p></a>
          {{-- <nav class="nav nav-pills flex-column p-1"> --}}
            <a class="btn btn-success mb-2" href="">Subuh <p class="m-2">05:02<i class="bi bi-clock-history mx-2"></i></p></a>
            <a class="btn btn-success mb-2" href="">Terbit <p class="m-2">06:19<i class="bi bi-clock-history mx-2"></i></p></a>
          {{-- </nav> --}}
          <a class="btn btn-success mb-2" href="">Dzuhur <p class="m-2">12:28<i class="bi bi-clock-history mx-2"></i></p></a>
          <a class="btn btn-success mb-2" href="">Ashar <p class="m-2">15:51<i class="bi bi-clock-history mx-2"></i></p></a>
          {{-- <nav class="nav nav-pills flex-column"> --}}
            <a class="btn btn-success mb-2" href="">Maghrib <p class="m-2">18:30<i class="bi bi-clock-history mx-2"></i></p></a>
            <a class="btn btn-success mb-2" href="">Isya <p class="m-2">19:43<i class="bi bi-clock-history mx-2"></i></p></a>
          {{-- </nav> --}}
        {{-- </nav> --}}
      </nav>
    </div>

    <div class="col-10 ">
      <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
        <div id="item-1">
        </div>
        <div class="row">
          <div class="col-sm-4 mb-3 mb-sm-1">
            <div class="card">
              <div class="card-body">
                <img src="./images/image.png" alt="Mesjid Raya" class="img-fluid">
                <h5 class="card-title">Mesjid Raya</h5>
                <p class="card-text">Jl. Khatib Sulaiman, Alai Parak Kopi, Kec. Padang Utara, Kota Padang, Sumbar</p>
                <a href="https://id.wikipedia.org/wiki/Masjid_Raya_Sumatera_Barat" class="btn btn-success">Lihat</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 mb-3 mb-sm-1">
            <div class="card">
              <div class="card-body">
                <img src="./images/image.png" alt="Mesjid Al-Hakim Padang" class="img-fluid">
                <h5 class="card-title">Mesjid Al-Hakim Padang</h5>
                <p class="card-text">Jl. Samudera, Berok Nipah, Kec. Padang Bar., Kota Padang, Sumatera Barat</p>
                <a href="https://id.wikipedia.org/wiki/Masjid_Al-Hakim_Padang" class="btn btn-success">Lihat</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 mb-3 mb-sm-1">
            <div class="card">
              <div class="card-body">
                <img src="./images/image.png" alt="Masjid Agung Nurul Iman" class="img-fluid">
                <h5 class="card-title">Masjid Agung Nurul Iman</h5>
                <p class="card-text">Belakang Pd., Kec. Padang Sel., Kota Padang, Sumatera Barat</p>
                <a href="https://id.wikipedia.org/wiki/Masjid_Agung_Nurul_Iman" class="btn btn-success">Lihat</a>
              </div>
            </div>
          </div>
        </div>

        <div class="my-2" id="item-1-1">
          <div class="card text-center bg-success text-white">
            <div class="card-body">
              List Masjid
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">List masjid Sholat league Ramadhan 1446 H</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img src="./images/image.png" style="width: 25px; height: auto;" class="img-fluid" alt="....">
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Mesjid Raya</h6>
                    </div>
                    <div class="col-auto">
                      <a href="https://id.wikipedia.org/wiki/Masjid_Raya_Sumatera_Barat#/media/Berkas:Masjid_Raya_Sumbar_3_MTQN_2020.jpg" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                  </div>
                </th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img src="./images/image.png" style="width: 25px; height: auto;" class="img-fluid" alt="....">
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Mesjid Al-Hakim Padang</h6>
                    </div>
                    <div class="col-auto">
                      <a href="https://id.wikipedia.org/wiki/Masjid_Al-Hakim_Padang#/media/Berkas:Masjid_Al_Hakim_oleh_Denas.jpg" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                  </div>
                </th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row" >
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img src="./images/image.png" style="width: 25px; height: auto;" class="img-fluid" alt="....">
                    </div>
                    <div class="col">
                      <h6 class="mb-0">Masjid Agung Nurul Iman</h6>
                    </div>
                    <div class="col-auto">
                      <a href="https://id.wikipedia.org/wiki/Masjid_Agung_Nurul_Iman#/media/Berkas:Masjid_Agung_Nurul_Iman_2020.jpg" class="btn btn-link"><i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                  </div>
                </th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="item-1-2">
          <div class="card text-center bg-success-subtle text-success ">
            <div class="card-body">
              Peserta terbaik tahun ini
            </div>
          </div>
          <div class="container">
            <div class="row mt-3">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body bg-success text-white d-flex flex-column align-items-center justify-content-center rounded-4 p-4">
                    <i class="bi bi-person-fill fs-2 mb-3"></i>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">Jami Rahmad</p>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">354</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                  <div class="card-body bg-success text-white d-flex flex-column align-items-center justify-content-center rounded-4 p-4">
                    <i class="bi bi-person-fill fs-2 mb-3"></i>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">M. Isya Daud</p>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">302</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                  <div class="card-body bg-success text-white d-flex flex-column align-items-center justify-content-center rounded-4 p-4">
                    <i class="bi bi-person-fill fs-2  mb-3"></i>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">Abdurrahman Ash Shidqi</p>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">329</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div id="item-1-2" style="margin-top: 20px;">
          <div class="card text-center bg-success-subtle text-success ">
            <div class="card-body">
              Peserta terbaik tahun ini Mesjid Raya
            </div>
        </div>
        <div class="container mt-2">
          <div class="row">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
              <div class="card h-100">
                <div class="card-body bg-success text-white d-flex flex-column align-items-center justify-content-center rounded-4 p-4">
                  <i class="bi bi-person-fill fs-2 mb-4"></i>
                  <p class="card-text mb-3" style="font-size: 1.25rem;">Jami Rahmad</p>
                  <p class="card-text mb-3" style="font-size: 1.25rem;">354</p>
                </div>
              </div>
            </div>
            <!-- Kolom Kanan -->
            <div class="col-md-6 d-flex flex-column">
              <!-- Tabel 1 -->
              <div class="mb-2 flex-fill">
                <div class="card custom-height">
                  <div class="card-body bg-success text-white d-flex flex-column align-items-center justify-content-center rounded-4 p-4">
                    <i class="bi bi-person-fill fs-2 mb-3"></i>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">M. Isya Daud</p>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">302</p>
                  </div>
                </div>
              </div>
              <!-- Tabel 2 -->
              <div class="mb-2 flex-fill">
                <div class="card custom-height">
                  <div class="card-body bg-success text-white d-flex flex-column align-items-center justify-content-center rounded-4 p-4">
                    <i class="bi bi-person-fill fs-2 mb-3"></i>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">Abdurrahman Ash Shidqi</p>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">329</p>
                  </div>
                </div>
              </div>
              <!-- Tabel 3 -->
              <div class="mb-2 flex-fill">
                <div class="card custom-height">
                  <div class="card-body bg-success text-white d-flex flex-column align-items-center justify-content-center rounded-4 p-4">
                    <i class="bi bi-person-fill fs-2 mb-3"></i>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">Abdurrahman Ash Shidqi</p>
                    <p class="card-text mb-3" style="font-size: 1.25rem;">294</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

        <div id="item-1-2" style="margin-top: 20px;">
          <div class="card text-center bg-success-subtle text-success ">
            <div class="card-body">
              Daftar Donatur Festival Sholat League Se Sumatera Barat
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
<footer class="bg-tosca text-white pt-4 pb-4">
  <div class="container text-center text-md-left">
    <div class="row">

      <!-- Column 1 -->
      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">POWERED BY :</h6>
        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p class="mb-0">"Aksi Nyata Ramaikan Masjid"</p>
        <p>No 1 di Dunia Syiar Sholat 5 Waktu di Masjid Berbasis Teknologi</p>
      </div>


      <!-- Column 3 -->
      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <ul class="list-unstyled">
          <li class="my-2"><i class="fas fa-home mr-3"></i> Padang, Sumatera Barat, Indonesia</li>
          <li class="my-2"><i class="fas fa-envelope mr-3"></i> mesjid@gmail.com</li>
          <li class="my-2"><i class="fas fa-phone mr-3"></i> +62 81262049957</li>
          <li class="my-2"><i class="fas fa-print mr-3"></i> +62 81262049957</li>
        </ul>
      </div>

      <!-- Column 4 (Social Media) -->
      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Follow Us</h6>
        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <ul class="list-unstyled">
          <li class="my-2"><a href="#" class="text-white"><i class="bi bi-youtube"></i> YouTube</a></li>
          <li class="my-2"><a href="#" class="text-white"><i class="bi bi-instagram"></i> Instagram</a></li>
          <li class="my-2"><a href="#" class="text-white"><i class="bi bi-twitter"></i> Twitter</a></li>
          <li class="my-2"><a href="#" class="text-white"><i class="bi bi-whatsapp"></i> WhatsApp</a></li>
        </ul>
      </div>

    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom text-center py-3">
    &copy; 2024 Muhammad Fajrin Lubis
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

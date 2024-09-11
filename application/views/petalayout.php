<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $title ?> </title>
  <?php include "layouts/header.php" ?>
  <style>
    body {
      padding: 0;
      margin: 0;
    }

    html,
    body,
    #map {
      height: 98vh;
      width: 100%;
    }
  </style>
</head>


<body class="overflow-x-hidden position-relative">

  <nav class="navbar navbar-expand-lg shadow-sm glass position-absolute start-50 border rounded m-2 mt-5 " data-aos="fade-down" data-aos-offset="200" data-aos-delay="100" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center" style="z-index: 999; 
  transform: translate(-50%, -50%);">
    <div class="container border">
      <a class="navbar-brand" href="<?= base_url('index.php') ?>">
        <!-- <img src="<?= base_url('assets/img/logo_text.svg') ?>" alt="logo-pupr" width="150px"> -->
        SIpetaru logo
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
        <ul class="navbar-nav align-items-center d-flex ">
          <li class="nav-item px-2">
            <a class="nav-link" aria-current="page" href="<?= base_url('welcome') ?>">Beranda</a>
          </li>


          <li class=" dropdown d-flex px-2">
            <a class="btn nav-link d-flex align-items-center " href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <p class="m-0">Profil</p> <i class="fa fa-sort-down ms-2 mb-2" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu mt-4 p-1" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/bgn_nonpem') ?>">Visi & Misi</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/fung_nonpem') ?>">Tugas Pokok dan Fungsi </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/fung_nonpem') ?>">Struktur Organisasi </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/fung_nonpem') ?>">Sumber Daya Manusia </a>
              </li>


            </ul>
          </li>

          <li class=" dropdown d-flex px-2">
            <a class="btn nav-link d-flex align-items-center " href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <p class="m-0">Peta</p> <i class="fa fa-sort-down ms-2 mb-2" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu mt-4 p-2" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/peta') ?>">Peta Dasar</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/peta') ?>">Peta Tematik </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/peta') ?>">Peta Rencana </a>
              </li>

            </ul>
          </li>
          <!--                 
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?= base_url('index.php/Welcome/peta') ?>">Peta PJU</a>
                </li> -->

          <a class="btn nav-link d-flex align-items-center " href="<?= base_url('index.php/Welcome/statistik') ?>" type="button" <p class="m-0">Tutorial</p>
          </a>

          </li>


        </ul>
      </div>
    </div>
  </nav>
  <div class="col align-items-center halaman position-absolute m-3 d-flex glass p-3 rounded start-100" style="z-index: 3;">
    <dotlottie-player class="me-2 ms-0" src="https://lottie.host/aa8aabbf-895c-41df-b8ee-13f720dfcdf2/actgKuY5Fe.json" background="transparent" speed="2" style="width: 30px;" loop autoplay></dotlottie-player>
    <p class="h5 m-0 me-3 text-white text-capitalize dela-gothic-one-regular">Peta Dasar</p>
  </div>
  <?= $content ?>
  <?php include "layouts/foot.php" ?>

</body>

</html>
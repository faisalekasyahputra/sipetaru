<nav id="navtick" class="navbar navbar-expand-lg shadow-sm glass " data-aos="fade-down" data-aos-offset="200" data-aos-delay="100" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center" style="z-index: 999;">
    <div class="container">
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

                <li class=" nav-item px-2">
                    <a class="btn nav-link d-flex align-items-center" aria-current="page" href="<?= base_url('index.php/Welcome/data_pju') ?>" type="button">
                        <p class="m-0">Data PJU</p></i>
                    </a>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link" href="<?= base_url('index.php/Welcome/peta') ?>">Peta PJU</a>
                </li>

                <li class=" dropdown d-flex px-2">
                    <a class="btn nav-link d-flex align-items-center " href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="m-0">Laporan</p> <i class="fa fa-sort-down ms-2 mb-2" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu mt-4 p-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/bgn_nonpem') ?>">Laporan Survey</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="dropdown-item nav-link" href="<?= base_url('index.php/Welcome/fung_nonpem') ?>">Laporan Akhir </a>
                        </li>

                    </ul>
                </li>


                <a class="btn nav-link d-flex align-items-center " href="<?= base_url('index.php/Welcome/statistik') ?>" type="button" <p class="m-0">Statistik</p>
                </a>

                </li>

                <li class="nav-item px-2">
                    <a type="button" class="btn btn-primary d-flex align-items-center" href="<?= base_url('index.php/Welcome/masuk') ?>"><i class="fa fa-user-circle me-2" aria-hidden="true"></i>
                        <p class="m-0 me-2">Masuk</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
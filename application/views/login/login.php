<div class="container-fluid p-0" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">>
    <div class="container-fluid d-flex align-items-top justify-content-center p-0" style="min-height: calc(100vh - 100px); margin-top:-50px;">
        <div class="row m-auto align-items-center">
            <div class="col border-end border-1">
                <a class="nav-link" href="<?= base_url('index.php') ?>"><i class="fa fa-arrow-left mx-2" aria-hidden="true"></i> Kembali ke beranda</a>
                <img class="img-thumbnail border border-0" src="<?= base_url('assets/img/_9254fe58-3dfb-461b-87f4-638ad02f3cbc.jfif') ?>" alt="" width="500px">
            </div>

            <div class="col">

                <form>
                    <img class=" mb-3" src="<?= base_url('assets/img/logo_text.png') ?>" alt="" width="100px">
                    <h1 class="h5 mb-3 fw-normal">Masuk Admin</h1>

                    <div class="form-floating m-2">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Nama Pengguna">
                        <label for="floatingInput">Nama Pengguna</label>
                    </div>
                    <div class="form-floating m-2">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Kata Sandi">
                        <label for="floatingPassword">Kata Sandi</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ingat Saya
                        </label>
                    </div>
                    <button id="btnmasuk" class="btn btn-primary w-100 py-2" type="submit">Masuk</button>

                </form>


            </div>

        </div>

    </div>
</div>
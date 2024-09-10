<div class="container-fluid p-0">
    <div class="container-fluid d-flex align-items-top justify-content-center p-0" style="min-height: calc(100vh - 100px);">
        <div class="row w-100">
            <div id="sidebar-left" class="col-2  border-end border-1 " data-aos="fade-right" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
                <div class="row d-flex ">
                    <div class="col d-flex justify-content-start border-bottom border-top border-1 p-2 align-items-center">
                        <i class="fa fa-info-circle fs-6 me-2" aria-hidden="true"></i>
                        <p class="text-capitalize m-0 text-left"> Informasi yang ditampilkan</p>

                    </div>

                </div>
                <ul class="list-group flush my-2">
                    <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                <i class="fa fa-road mx-2" aria-hidden="true"></i> Jalan
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <i class="fa fa-lightbulb-o mx-2" aria-hidden="true"></i> PJU
                            </label>
                        </div>
                    </li>

                </ul>
                <button class="btn btn-primary mb-2 w-100"><i class="fa fa-recycle me-2" aria-hidden="true"></i> Reload</button>
                <div class="row d-flex ">
                    <div class="col d-flex justify-content-start border-bottom border-top border-1 p-2 align-items-center">
                        <i class="fa fa-adjust me-2 " aria-hidden="true"></i>
                        <p class="text-capitalize m-0 text-left"> Keterangan</p>

                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <ul class="list-group flush my-2">
                            <li class="list-group-item">


                                <i class="fa fa-lightbulb-o me-2" aria-hidden="true"></i> Batas Administrasi


                            </li>
                            <li class="list-group-item">

                                <i class="fa fa-lightbulb-o me-2" aria-hidden="true"></i> Batas Kelurahan

                            </li>
                            <li class="list-group-item">

                                <i class="fa fa-lightbulb-o me-2" aria-hidden="true"></i> Jalan

                            </li>
                            <li class="list-group-item">

                                <i class="fa fa-lightbulb-o me-2" aria-hidden="true"></i> PJU

                            </li>

                        </ul>
                    </div>
                </div>




            </div>
            <div id="main" class="col p-2 pb-4" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">>

                <div id="map" class="rounded p-0 m-0" style="width: 100%; height: 530px;"></div>

            </div>
            <div id="sidebar-right" class="col-2 border-start border-1 " data-aos="fade-left" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">>
                <div class="row d-flex ">
                    <div class="col d-flex justify-content-center border-bottom border-1 p-2">
                        <img class="w-50 " src="<?= base_url('assets/img/logo_smkb.png') ?>" alt="">
                    </div>

                </div>
                <div class="row d-flex ">
                    <div class="col d-flex justify-content-center border-bottom border-1 p-2">
                        <p class="text-capitalize m-0 text-center"> sistem informasi penerangan jalan umum</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<script>
    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });

    function marker_nya(feature, latlng) {

        var Url_nya = "<?= base_url('assets/ico/lamp1.png') ?>";
        var Icon = L.icon({
            iconUrl: Url_nya,
            iconSize: [50, 50],
        });
        var marker = L.marker(latlng, {
            icon: Icon
        });
        return marker
    }
    var pju = L.geoJSON([<?= $pju ?>], {
        onEachFeature: popup,
        pointToLayer: marker_nya,
        filter: function(feature, layer) {
            return feature.properties.show_on_map;
        }
    });
    var map = L.map('map', {
        center: [-2.709125, 111.6491647],
        zoom: 18,
        fullscreenControl: true,
        fullscreenControlOptions: {
            position: 'topleft'
        },
        layers: [googleStreets, pju]
    });

    function popup(f, l) {
        var out = [];
        if (f.properties) {
            var foto = f.properties['Foto'];
            out.length = 0;
            out.push("<center><img src='<?= base_url("assets/foto") ?>/" + foto + "' width='180px' ></center>");
            out.push('Nama Ruas : ' + f.properties['Nama Ruas']);
            out.push('Koordinat : ' + f.properties['Koordinat']);
            out.push("<center><a href='<?= base_url("index.php/Welcome/detail/") ?>" + f.properties['Kode'] + "'  target='blank'>" + 'Lihat Detail' + "</a></center>");
            l.bindPopup(out.join("<br />"));
        }
    }
</script>
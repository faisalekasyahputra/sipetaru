<div class="container-fluid p-0 bg-body-tertiary">

    <div class="container-fluid d-flex align-items-top justify-content-center p-0" style="min-height: calc(100vh - 100px);">

        <div id="main" class="col p-1 bg-body-tertiary" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">

            <div id="map" class="rounded p-0 m-0" style="width: 100%; height:100vh"></div>

        </div>


    </div>

</div>
</div>

<script>
    var osm = L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {});
    var Esri_WorldImagery = L.tileLayer(
        'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'
    );

    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });

    var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });

    var baseLayers = {
        "Google Roadmap": googleStreets,
        "Google Hybrid": googleHybrid,
        "Google Satellite": googleSat,
        "Open Street Map": osm,
        "ESRI World Imagery": Esri_WorldImagery,
    };


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

    function marker_meteran(feature, latlng) {

        var Url_nya = "<?= base_url('assets/ico/meteran.png') ?>";
        var Icon = L.icon({
            iconUrl: Url_nya,
            iconSize: [40, 110],
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
    var meteran = L.geoJSON([<?= $meteran ?>], {
        pointToLayer: marker_meteran,
        onEachFeature: popup_meteran,
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
        layers: [googleSat, pju, meteran]
    });
    var groupedOverlays = {
        "Peta PJU": {
            "&nbsp;&nbsp;&nbsp;&nbsp;PJU": pju,
            "&nbsp;&nbsp;&nbsp;&nbsp;Meteran": meteran,
        },
    };

    function popup(f, l) {
        var out = [];
        if (f.properties) {
            var foto = f.properties['Foto'];
            out.length = 0;
            out.push("<center><img class='img-thumbnail' src='<?= base_url("assets/foto") ?>/" + foto + "' width='180px' ></center>");
            out.push('Nama Ruas : ' + f.properties['Nama Ruas']);
            out.push('Koordinat : ' + f.properties['Koordinat']);
            out.push("<center><a href='<?= base_url("index.php/Welcome/detail/") ?>" + f.properties['Kode'] + "'  target='blank'>" + 'Lihat Detail' + "</a></center>");
            l.bindPopup(out.join("<br />"));
        }
    };

    function popup_meteran(f, l) {
        var out = [];
        if (f.properties) {
            var foto = f.properties['Foto1'];
            out.length = 0;
            out.push("<center><img class='img-thumbnail' src='<?= base_url("assets/foto") ?>/" + foto + "' width='180px' ></center>");
            out.push('Nomer  : ' + f.properties['Kode']);
            out.push('Koordinat : ' + f.properties['Koordinat']);
            l.bindPopup(out.join("<br />"));
        }
    };

    L.control.groupedLayers(baseLayers, groupedOverlays, {
        collapsed: false
    }).addTo(map);
</script>
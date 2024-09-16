<div class="container-fluid p-0 bg-body-tertiary">

    <div class="container-fluid d-flex align-items-top justify-content-center p-0" style="min-height: calc(100vh - 100px);">

        <div id="main" class="col p-1 bg-body-tertiary" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">

            <div id="map" class="rounded p-0 m-0" style="width: 100%; height:99vh"></div>

        </div>


    </div>

</div>
</div>
<style>
    html,
    body {
        height: 100%;
        margin: 0;
        overflow: hidden;
    }

    #map {
        width: auto;
        height: 90%;
        position: relative;
        z-index: 1;
    }



    h6 {

        color: #fff;

        padding: 0px;

    }

    .info {
        padding: 10px;
        translate: 0 100px;

        width: 300px;

        height: auto;

        max-height: 750px;

        min-height: 370px;

        overflow-y: scroll;

        scrollbar-color: transparent;

        font-family: 'Poppins', sans-serif;

        background: rgba(255, 255, 255, 0.28);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);

        border-radius: 10px;

        display: block;

        position: relative;

        z-index: 2;
    }

    .attr {
        padding: 10px;
        translate: 0 60%;

        width: 250px;

        max-width: 250px;

        height: auto;

        max-height: 750px;

        min-height: auto;

        z-index: 100;

        font-family: 'Poppins', sans-serif;

        background: white;
        background: rgba(255, 255, 255, 1);

        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);

        border-radius: 10px;

        display: block;

        position: absolute;

        z-index: 2;
        background: rgba(255, 255, 255, 0.28);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);

    }



    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
    }

    .atas {
        position: relative;
        width: 100%;

        margin-bottom: 5px;
        padding: 5px;

        font-family: 'Poppins', sans-serif;

        background: #0d6dfd77;

        border-radius: 5px;
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);

        .ataspencarian {



            position: relative;

            display: flex;

            vertical-align: middle;

            text-align: center;

            background: rgba(0, 145, 168, 0.8);

            height: 30px;

            padding: 6px 8px;



            align-items: baseline;

            justify-content: center;

        }

        .box_basemap {



            margin: 10px 5px 5px 10px;

            border-radius: 5px;

        }

        .center {


            display: flex;


            align-items: center;

        }

        .drop {

            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            margin-right: 10px;
            margin-top: 5px;

        }

        <?php foreach ($peta as $p) {
            $geo = $this->Buka_peta->frd('mp_geojson', $p->id, 'Kelompok', null, null);
            foreach ($geo as $g) {
        ?>.legend {
            padding: 10px;
            translate: 0 5%;
            position: relative;
            width: 300px;

            max-width: 300px;
            line-height: 25px;
            height: auto;
            overflow-y: hidden;
            z-index: 400;

        }

        .legend i {
            width: 20px;
            height: 20px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;

        }

        <?php }
        } ?><?php foreach ($peta as $p) {
                if ($p->id != 1) { ?>#frame_peta<?= $p->id ?> {
            display: none;
        }

        <?php }
            } ?>#from_tematik {
            display: none;
        }

        #from_rencana {
            display: none;
        }

        #from_rencana2 {
            display: none;
        }

        #from_renta {
            display: none;
        }



        .attrhead {
            width: 100%;



            position: relative;

            display: inline-block;

            vertical-align: middle;

            text-align: center;





        }

        .label_kec {
            width: auto;
            height: auto;
            font-size: 12px;

            border-color: none;

            border-width: 0;

            background: rgba(255, 255, 255, 0.0);

            font-weight: bold;

            text-shadow: -1px 0 red, 0 1px black, 1px 0 red, 0 -1px red;

            color: white;
        }



        .leaflet-control-dialog {

            position: absolute;

            background: white;
            background: rgba(255, 255, 255, 1);

            padding: 0px;

            text-align: center;

            border-radius: 4px;

            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.65);

        }

        .panelatas {

            /* width:384px; */

            /* height: 10px; */

            padding: 3px 0px;

            font-family: 'Poppins', sans-serif;

            background: rgba(0, 145, 168, 0.8);

            box-shadow: 0 0 15px rgb(0 0 0 / 20%);

            vertical-align: text-top;

            border-radius: 2px;

        }

        .panelcenter {



            padding: 7px;

            /* position: relative; */

            display: flex;

            vertical-align: middle;



            align-items: center;

            justify-content: center;

        }

        .leaflet-control-dialog-close {

            position: absolute;

            width: 20px;

            height: 20px;

            top: 0px;

            right: 0px;

            padding: 2px;

            font-size: 16px;

            line-height: 16px;
        }

        .isi {
            padding: 20px 15px;
        }

        .sticky-header1 {

            background-color: #0091a8;

            color: #000000;

            display: flex;





            align-items: center;



        }

        .content-scroll1 {

            margin-top: 0px;

            height: 100%;



        }

        .banner {



            display: inline;

            margin-top: 10px;

            margin-left: 15px;

            margin-bottom: 10px;





        }

        .banner1 {



            display: inline;

            margin-left: 10px;

            font-weight: bold;







        }

        .banner2 {

            color: black;

            margin-top: 31px;

            display: inline;

            margin-left: 15px;

            width: 1100px;

            position: relative;

            text-align: right;

        }

        .dinas1 {

            font-size: 28px;

            color: white;



        }

        .dinas2 {



            font-size: 22px;

            color: white;

        }

        .layertext {
            font-size: small;
        }

        .pencarian {

            width: 250px;

            max-width: 250px;

            min-height: 90px;

            z-index: 100;

            font-family: 'Poppins', sans-serif;

            background: white;
            background: rgba(255, 255, 255, 1);

            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);



            display: block;

            position: relative;

            z-index: 2;
        }
</style>
<script>
    var key = 'pk.87f2d9fcb4fdd8da1d647b46a997c727';
    peta1 = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

    peta2 = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {

        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });

    peta3 = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {

        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });

    peta4 = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    peta5 = new L.BingLayer("AvZ2Z8Jve41V_bnPTe2mw4Xi8YWTyj2eT87tSGSsezrYWiyaj0ldMaVdkyf8aik6", {
        type: 'Road'
    });
    peta6 = new L.BingLayer("AvZ2Z8Jve41V_bnPTe2mw4Xi8YWTyj2eT87tSGSsezrYWiyaj0ldMaVdkyf8aik6", {
        type: 'AerialWithLabels'
    });
    var base = [{

        "id": 'peta1',

        "nama_peta": "Opensteet Map",

        "tid": 0,

        "layer": peta1



    }, {

        "id": 'peta2',

        "nama_peta": "Google Road Map",

        "tid": 1,

        "layer": peta2

    }, {

        "id": "peta3",

        "nama_peta": "Google Hybrid",

        "tid": 2,

        "layer": peta3

    }, {

        "id": "peta4",

        "nama_peta": "Google Satelit",

        "tid": 3,

        "layer": peta4

    }, {
        "id": "peta5",
        "nama_peta": "Bing Road Map",
        "tid": 4,
        "layer": peta5
    }, {
        "id": "peta6",
        "nama_peta": "Bing Aerial",
        "tid": 5,
        "layer": peta6
    }];

    function enab() {
        map._handlers.forEach(function(handler) {
            handler.enable();
        });
    }

    function temporary_disabled() {
        map._handlers.forEach(function(handler) {
            handler.disable();
        });

    }
    var info = L.control({
        position: 'topright'
    });

    function find_base(e) {
        var radio = document.getElementById("ra" + e);
        for (let i = 0; i < base.length; i++) {
            let obj = base[i];
            if (i == e) {
                obj.layer.addTo(map);
            } else {
                obj.layer.remove(map);
            }
        }
    }

    function hid_bese() {

        var f = document.getElementById('from_base');

        f.style.display = "none";

        var d = document.getElementById('dr_atas');

        d.innerHTML = '<a href="#" onclick="show_bese()" ><img src="<?= base_url('assets/img/arrow_down.png') ?>"></a>'

    }

    function show_bese() {

        var f = document.getElementById('from_base');

        f.style.display = "block";

        var d = document.getElementById('dr_atas');

        d.innerHTML = '<a href="#" onclick="hid_bese()" ><img src="<?= base_url('assets/img/arrow_up.png') ?>"></a>'

    }

    function show_admin(i) {
        var f = document.getElementById('frame_peta' + i);
        f.style.display = "block";
        var d = document.getElementById('panah' + i);
        d.innerHTML = '<a href="#" onclick="hid_admin(' + i + ')" ><img src="<?= base_url('assets/img/arrow_up.png') ?>"></a>'

    }

    function hid_admin(i) {
        var f = document.getElementById('frame_peta' + i);
        f.style.display = "none";
        var d = document.getElementById('panah' + i);
        d.innerHTML = '<a href="#" onclick="show_admin(' + i + ')" ><img src="<?= base_url('assets/img/arrow_down.png') ?>"></a>'
    }

    function onEachkec(feature, layer) {
        layer.bindTooltip(feature.properties['KECAMATAN'], {
            permanent: true,
            direction: "center",
            className: "label_kec"
        });
    }

    function gaya_kecamatan(feature) {
        return {
            color: 'white',
            fillOpacity: 0.05,
            weight: 0.5
        };
    }

    function gaya_kecamatan1(feature) {
        return {
            color: 'red',

            fillOpacity: 1,
            weight: 1
        };
    }

    function getColor(d) {
        return d > 1000 ? '#800026' :
            d > 500 ? '#BD0026' :
            d > 200 ? '#E31A1C' :
            d > 100 ? '#FC4E2A' :
            d > 50 ? '#FD8D3C' :
            d > 20 ? '#FEB24C' :
            d > 10 ? '#FED976' : '#FFEDA0';
    }

    //------------------------------------------------------------------------------------------------

    var kecamatan = L.geoJSON([<?= $kecamatan ?>], {

    });

    var map = L.map('map', {
        center: [-6.753482, 111.0374407],
        zoom: 12,
        maxZoom: 25,
        minZoom: 9,
        layers: [peta3],
        attributionControl: false,
        zoomControl: false,
    });


    const legend = L.control({
        position: 'bottomleft'
    });

    map.on('dialog:opened', function(e) {
        console.log("dialog opened event fired.");
    });



    map.on('dialog:closehidden', function(e) {
        console.log("dialog closehidden event fired.");
    });

    map.on('dialog:closeshown', function(e) {
        console.log("dialog closeshown event fired.");
    });
    L.control.scale().addTo(map);
    L.control.zoom({
        position: 'bottomright'
    }).addTo(map);

    var attr = L.control({

        position: 'topleft'

    });

    attr.onAdd = function(map) {

        this._div = L.DomUtil.create('div', 'attr');

        header = L.DomUtil.create('div', 'attrhead');

        this._div.append(header, '');

        box = L.DomUtil.create('div', 'box_basemap');

        this._div.append(box);

        this.update('<h6><b>Informasi Peta</b></h6>', '<center><p>"Arahkan cursor mouse anda atau dengan mengklik layer peta untuk melihat informasi peta"</p></center>');

        return this._div;

    }

    attr.update = function(props, attribut) {

        var contents = props;

        header.innerHTML = `<h6>${contents}</h6>`;

        box.innerHTML = attribut;

    };

    attr.addTo(map);

    function popUp(f, l) {
        var layer = l;
        var out = [];
        var data = [];
        if (f.properties) {
            l.on('click', function(e) {

            })
        }
    }

    var base_label = '';
    for (let i = 0; i < base.length; i++) {
        let obj = base[i];
        if (i == 2) {
            base_label = base_label + '<input type="radio" id="ra' +
                obj.id + '" onClick="find_base(' + obj.tid + ')" checked ="true" name="peta" value="' +
                obj.id + '"><label for="html">' + obj.nama_peta + '</label><br>';
        } else {
            base_label = base_label + '<input type="radio" id=ra"' +
                obj.id + '" onClick="find_base(' + obj.tid + ')" name="peta" value="' +
                obj.id + '"><label for="html">' + obj.nama_peta + '</label><br>';
        }

    }


    <?php foreach ($peta as $p) {
        $id = $p->id;
        $geo = $this->Buka_peta->frd('mp_geojson', $id, 'Kelompok', null, null);
        $peta_ne = array(); ?>
        var base_ren<?= $p->id ?> = '';
        <?php foreach ($geo as $g) {
            $m = $g->id;
        ?>
            var o = '<input type="checkbox" style="display:inline-block" onClick="tampil<?= $m ?>(<?= $m ?>)" id="cek<?= $m ?>"> <label><?= $g->Nama . ' ' . $g->id ?> </label>';
            var t = '<br><input type="range"  id="trans<?= $m ?>" style="display:none;width: 170px;" oninput="set_transp<?= $m ?>(this.value,<?= $m ?>)" min="0" max="10" value = "5"  name="fav_language" >';
            var l = '  <input type="checkbox" onClick="legenda<?= $m ?>(<?= $m ?>)" id="cek2<?= $m ?>"  style="display:none"><p id="label<?= $m ?>" style="display:none">Legenda</p>';
            base_ren<?= $p->id ?> = base_ren<?= $p->id ?> + o + t + l + '<hr>';



            function fitur<?= $m ?>(feature, layer) {

                <?php if ($g->label != '0') { ?>
                    layer.bindTooltip(feature.properties['<?= $g->Dasar_Pencarian ?>'], {
                        permanent: true,
                        direction: "center",
                        className: "label_kec"
                    })
                <?php } ?>
                layer.on({
                    mouseover: highlightFeature<?= $m ?>,
                    mouseout: resetHighlight<?= $m ?>,
                })
            }

            function highlightFeature<?= $m ?>(e) {
                var layer = e.target;

                layer.setStyle({

                    fillOpacity: 1,
                    weight: 1
                });
                var ht = '';
                <?php
                $atribut = $this->Buka_peta->frd('mp_atribut', $g->id, 'Kelompok', null, null);
                if ($atribut != null) {
                    foreach ($atribut as $at) { ?>
                        ht = ht + '<b><?= $at->Alias ?></b> : ' + layer.feature.properties['<?= $at->Nama ?>'] + ' <br><br>';
                <?php }
                }
                ?>
                attr.update('<?= $g->Nama ?>', ht);

            }
            var peta<?= $m ?>;

            function resetHighlight<?= $m ?>(e) {
                peta<?= $m ?>.resetStyle(e.target);
            }

            function base_awal<?= $m ?>(feature) {
                return {
                    weight: '<?= $g->Ketajaman_Garis ?>',
                    fillOpacity: '<?= $g->Ketajaman_Isi ?>',
                    <?php if ($g->Simbologi == '0') { ?>
                        color: '<?= $g->Warna_Isi ?>',
                    <?php } else { ?>
                        color: warna<?= $m ?>(feature.properties['<?= $g->Simbologi ?>']),
                    <?php } ?>
                };
            }

            function titikku<?= $m ?>(feature, latlng) {
                var b = feature.properties['<?= $g->Simbologi ?>'];
                var c = '<?= base_url('assets/icons/') ?>';
                var v = warna<?= $m ?>(b);
                var Url_nya = c + v;
                var Icon = L.icon({
                    iconUrl: Url_nya,
                    iconSize: [14, 14],
                });
                var marker = L.marker(latlng, {
                    icon: Icon
                });

                return marker
            }

            function warna<?= $m ?>(w) {
                <?php
                $kelas = $this->Buka_peta->frd('mp_kelas', $m, 'Kelompok', null, null);
                $w = array();
                if ($kelas != null) {
                    foreach ($kelas as $k) {
                        $wa = array($k->Kelas => $k->Warna);
                        $w = array_merge($w, $wa);
                    } ?>
                    var war = <?= json_encode($w) ?>;
                    let obj = war[w];
                    return obj;
                <?php }

                ?>

            }

            function set_transp<?= $m ?>(s, id_map) {
                var opacity = s / 10;
                peta<?= $m ?>.setStyle({
                    fillOpacity: opacity,
                    opacity: opacity
                })
            }
            const legend<?= $m ?> = L.control({
                position: 'bottomleft'
            });
            legend<?= $m ?>.onAdd = function(map) {
                const div = L.DomUtil.create('div', 'info legend');
                <?php $kelas = $this->Buka_peta->frd('mp_kelas', $m, 'Kelompok', null, null);
                if ($kelas != null) {
                    $w = array();
                    foreach ($kelas as $k) {
                        $wa = array($k->Kelas);
                        $w = array_merge($w, $wa);
                    }
                }
                ?>
                const grades = <?= json_encode($w) ?>;
                //const grades = [0, 10, 20, 50, 100, 200, 500, 1000];
                const labels = ['<b>Legenda :</b><br>'];
                let from, to;
                for (let i = 0; i < grades.length; i++) {
                    from = grades[i];
                    var a = warna<?= $m ?>(from);

                    labels.push('<i style="background:' + a + '"></i> ' + from);
                }

                div.innerHTML = labels.join('<br>');
                return div;
            }

            function legenda<?= $m ?>(id) {
                var checkBox2<?= $m ?> = document.getElementById("cek2" + id);
                if (checkBox2<?= $m ?>.checked == true) {
                    legend<?= $m ?>.addTo(map);
                } else {
                    legend<?= $m ?>.remove(map);
                }
            }

            function tampil<?= $m ?>(id) {
                var checkBox<?= $m ?> = document.getElementById("cek" + id);
                var range<?= $m ?> = document.getElementById("trans" + id);
                var checkBox2<?= $m ?> = document.getElementById("cek2" + id);
                var label<?= $m ?> = document.getElementById("label" + id);
                $.ajax({
                    url: '<?= base_url('Peta/tampil/') ?>' + id,
                    success: function(msg) {
                        if (checkBox<?= $m ?>.checked == true) {
                            var geojsonFeature<?= $m ?> = JSON.parse(msg);
                            <?php if ($g->Tipe != 'Point') { ?>
                                var on = {
                                    style: base_awal<?= $m ?>,
                                    onEachFeature: fitur<?= $m ?>
                                }
                            <?php } else { ?>
                                var on = {
                                    pointToLayer: titikku<?= $m ?>,
                                    onEachFeature: fitur<?= $m ?>
                                }
                            <?php } ?>
                            peta<?= $m ?> = L.geoJSON(geojsonFeature<?= $m ?>, on);
                            peta<?= $m ?>.addTo(map);
                            range<?= $m ?>.style.display = "inline-block";
                            checkBox2<?= $m ?>.style.display = "inline-block";
                            label<?= $m ?>.style.display = "inline-block";

                        } else {
                            peta<?= $m ?>.remove(map);
                            legend<?= $m ?>.remove(map);
                            range<?= $m ?>.style.display = "none";
                            checkBox2<?= $m ?>.style.display = "none";
                            label<?= $m ?>.style.display = "none";

                        }



                    }
                });
            }

    <?php }
    } ?>





    info.onAdd = function(map) {

        this._div = L.DomUtil.create('div', 'info');
        this._div.id = "tubuh";
        //header basemaps
        head = L.DomUtil.create('div', 'atas');
        this._atas = L.DomUtil.create('div', 'center');
        this._atas.innerHTML = '<h6 class="layertext"><b>Base Maps</b></h6>';
        head.append(this._atas);
        panah = L.DomUtil.create('div', 'drop');
        panah.id = 'dr_atas';
        panah.innerHTML = '<a href="#" onclick="hid_bese()" ><img src="<?= base_url('assets/img/arrow_up.png') ?>"></a>';
        head.append(panah);
        this._div.append(head);

        //label_basemap
        frame_base_map = L.DomUtil.create('div', 'box_basemap');
        frame_base_map.id = "from_base";
        frame_base_map.innerHTML = base_label;
        this._div.append(frame_base_map);
        <?php foreach ($peta as $p) {
            $m = $p->id;
        ?>
            peta<?= $m ?> = L.DomUtil.create('div', 'atas');
            peta<?= $m ?>.innerHTML = '<div class="center"><h6 class="layertext"><b><?= $p->Nama_Layer ?></b></h6></div>';
            panah_peta<?= $m ?> = L.DomUtil.create('div', 'drop');
            panah_peta<?= $m ?>.innerHTML = '<a href="#" onclick="show_admin(<?= $m ?>)" ><img src="<?= base_url('assets/img/arrow_down.png') ?>"></a>';
            panah_peta<?= $m ?>.id = 'panah<?= $m ?>';
            peta<?= $m ?>.append(panah_peta<?= $m ?>);
            this._div.append(peta<?= $m ?>);


            frame_peta<?= $m ?> = L.DomUtil.create('div', 'box_basemap');
            frame_peta<?= $m ?>.id = "frame_peta<?= $m ?>"
            frame_peta<?= $m ?>.innerHTML = base_ren<?= $m ?>;
            this._div.append(frame_peta<?= $m ?>);


        <?php } ?>
        this._div.setAttribute("onmouseleave", "enab()");
        this._div.setAttribute("onmouseover", "temporary_disabled()");
        return this._div;



    }
    info.addTo(map);
</script>
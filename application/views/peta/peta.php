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

        width: 300px;

        height: auto;

        max-height: 750px;

        min-height: 370px;

        overflow-y: scroll;

        scrollbar-color: rebeccapurple green;

        font-family: 'Poppins', sans-serif;

        background: white;
        background: rgba(255, 255, 255, 0.8);

        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);

        border-radius: 5px;

        display: block;

        position: relative;

        z-index: 2;
    }

    .attr {

        width: 250px;

        max-width: 250px;

        height: auto;

        max-height: 750px;

        min-height: 170px;

        z-index: 100;

        font-family: 'Poppins', sans-serif;

        background: white;
        background: rgba(255, 255, 255, 1);

        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);

        border-radius: 5px;

        display: block;

        position: relative;

        z-index: 2;
    }

    .atas {

        width: 284px;

        height: 30px;

        padding: 6px 8px;

        font-family: 'Poppins', sans-serif;

        background: rgba(0, 145, 168, 0.8);

        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);

        vertical-align: text-top;

        border-radius: 2px;
    }

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

        margin: 0;

        position: absolute;

        justify-content: center;

        align-items: center;

    }

    .drop {
        padding-top: 10px;
        margin-left: 250px
    }

    #from_admin {
        display: none;
    }

    #from_tematik {
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
        width: 250px;



        position: relative;

        display: inline-block;

        vertical-align: middle;

        text-align: center;

        background: rgba(0, 145, 168, 0.8);

        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);





    }

    .label_kec {
        width: auto;
        height:

            auto;
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

    var map = L.map('map', {
        center: [-6.753482, 111.0374407],
        zoom: 13,
        maxZoom: 25,
        minZoom: 12,
        attributionControl: false,
        zoomControl: false,
    });
    map.addLayer(peta3);

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

        this.update('<h6><b>Informasi Peta</b></h6>', '<center>"Arahkan cursor mouse anda atau dengan mengklik layer peta untuk melihat informasi peta"</center>');

        return this._div;

    }

    attr.update = function(props, attribut) {

        var contents = props;

        header.innerHTML = `<h6>${contents}</h6>`;

        box.innerHTML = attribut;

    };

    attr.addTo(map);

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

    }];

    var info = L.control({
        position: 'topright'
    });

    info.onAdd = function(map) {

        this._div = L.DomUtil.create('div', 'info');

        this._div.id = "tubuh";

        head = L.DomUtil.create('div', 'atas');

        this._dalamatas = L.DomUtil.create('div', 'center');

        this._dalamatas.innerHTML = '<h6><b>Base Maps</b></h6>';

        return this._div;
        this._arrow = L.DomUtil.create('div', 'drop');

        this._arrow.id = 'dr_atas';

        this._arrow.innerHTML = '<a href="#" onclick="hid_bese()" ><img src="<?= base_url('assets/img/arrow_up.png') ?>"></a>';



        head.append(this._dalamatas);

        head.append(this._arrow);

        this._div.append(head);
        frame_base_map = L.DomUtil.create('div', 'box_basemap');

        frame_base_map.id = "from_base";

        frame_base_map.innerHTML = base_label;

        this._div.append(frame_base_map);
        rame_base_map = L.DomUtil.create('div', 'box_basemap');

        frame_base_map.id = "from_base";

        frame_base_map.innerHTML = base_label;

        this._div.append(frame_base_map);

    }


    info.addTo(map);
</script>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?= $title ?> </title>
	<?php include "layouts/header.php" ?>
</head>

<body class="overflow-x-hidden bg-body-tertiary">
	<?php include "layouts/nav.php" ?>
	<div class=" px-3 px-md-5" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
		<div class="archives mx-auto mt-3 mb-5 h-100">
			<div class="row ">
				<div class="card border-warning bg-warning bg-opacity-25 ">
					<h1 class="page-title h5 m-0 p-3 "><i class="fa fa-map-pin me-2" aria-hidden="true"></i> <b>Lokasi</b> : <?= $pju[0]->Nama_Ruas ?></h1>
				</div>
			</div>

			<div class="row py-3 g-3">
				<div class="col">
					<div class="img-thumbnail" id="map" style="min-height: 100%;" class="border"></div>
				</div>
				<div class="col-4 d-flex justify-content-end">
					<div id="pano">
						<?php $foto = base_url() . 'assets/foto/'.$pju[0]->Dokumentasi ; ?>
						<img class="img-thumbnail" src="<?= $foto ?>">
					</div>
				</div>
			</div>

			<form method="POST" action="https://sigpju.semarangkota.go.id/data-lampu-kota-semarang/115/philips/konvensional" accept-charset="UTF-8" id="form" enctype="multipart/form-data"><input name="_token" type="hidden" value="DplfrQ1G2aNe7qCsTWtQVmZ4d9vq40l654RKM5Ik">
				<fieldset disabled>

					<div class=" row row-cols-3 gx-2">
						<div class="form-group col">
							<label for="kecamatan" class="control-label">Nama Ruas :</label>
							<select class="select form-control" id="idkecamatan" name="kecamatan">
							<option value=""><?= $pju[0]->Nama_Ruas ?></option>
							</select>
						</div>
						<div class="form-group col">
							<label for="koordinat_x" class="control-label">Latitude :</label>
							<input class="form-control" id="txt_x" name="koordinat_x" type="text" value="<?= number_format($pju[0]->LAT, 5) ?>">
						</div>
						<div class="form-group col">
							<label for="koordinat_y" class="control-label">Longitude :</label>
							<input class="form-control" id="txt_y" name="koordinat_y" type="text" value="<?= number_format($pju[0]->LONG, 5) ?>">
						</div>

						<div class="form-group col">
							<label for="konstruksi" class="control-label">Jenis PJU :</label>
							<select class="select form-control" id="idkonstruksi" name="id_konstruksipju">
								<option value=""><?= $pju[0]->Jenis_PJU ?></option>
							</select>
						</div>

						<div class="form-group col">
							<label for="daya" class="control-label">Jenis Bohlam :</label>
							<select class="select form-control" id="iddaya" name="id_dayalampu">
								<option value=""><?= $pju[0]->Jenis_Bohlam ?>
							</select>
						</div>
						<div class="form-group col">
							<label for="merk" class="control-label">Jenis Jaringan :</label>
							<select class="select form-control" id="idmerk" name="id_merk">
								<option value=""><?= $pju[0]->Jenis_Jringan ?></option>
							</select>
						</div>

						<div class="form-group col">
							<label for="jenis" class="control-label">Lampu Hidup :</label>
							<select class="select form-control" id="idjenis" name="id_jenislampu">
								<option value=""><?= $pju[0]->Kondisi_Lampu ?></option>
							</select>
						</div>
						<div class="form-group col">
							<label for="jenis" class="control-label">Lampu Mati :</label>
							<select class="select form-control" id="idjenis" name="id_jenislampu">
								<option value=""> <?= $pju[0]->Kondisi_Lampu1 ?></option>
							</select>
						</div>
						<div class="form-group col">
							<label for="jumlahlampu" class="control-label">Kondisi Stang Operasional :</label>
							<input class="form-control" id="txtjumlahlamu" name="jumlahlampu" type="text" value="<?= $pju[0]->Kondisi_Stang ?>">
						</div>

						<div class="form-group col">
							<label for="kawasan" class="control-label">Kawasan :</label>
							<input class="form-control" id="txtlokasi" name="kawasan" type="text" value="<?= $pju[0]->Nama_Ruas ?>">
						</div>
						<div class="form-group col">
							<label for="keterangan" class="control-label">Letak Tiang :</label>
							<input class="form-control" id="txtketerangan" name="keterangan" type="text" value="<?= $pju[0]->Letak_Tiang ?>">
						</div>

						<div class="form-group col">
							<label for="kawasan" class="control-label">Kondisi Tiang :</label>
							<input class="form-control" id="txtlokasi" name="kawasan" type="text" value="<?= $pju[0]->Kondisi_Tiang ?>">
						</div>
						<div class="form-group col">
							<label for="keterangan" class="control-label">Keterangan :</label>
							<input class="form-control" id="txtketerangan" name="keterangan" type="text" value="">
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<?php include "layouts/foot.php" ?>
	<script>
	function marker_nya(feature, latlng) {
       
	   var Url_nya = "<?=base_url('assets/ico/lamp1.png')?>";
	   var Icon = L.icon({iconUrl:Url_nya,iconSize: [50, 50],});
	   var marker = L.marker(latlng, {icon:Icon});
	   return marker
   }
	var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
		maxZoom: 20,
		subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
	});
	var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']});
	var pju_titik = [<?= $peta ?>];
	var pju = L.geoJSON(pju_titik, {pointToLayer:marker_nya,
		filter: function(feature, layer) {
			return feature.properties.show_on_map;
		}
	});
	var map = L.map('map', {
		center: [<?= $pju[0]->LAT ?>, <?= $pju[0]->LONG ?>],
		zoom: 19,
		layers: [googleSat, pju],
		fullscreenControl: true,
		fullscreenControlOptions: {
			position: 'topleft'
		}
	});
</script>

</body>

</html>
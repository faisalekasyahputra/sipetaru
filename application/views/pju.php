<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?= $title ?> </title>
	<?php include "layouts/header.php" ?>
</head>

<body class="overflow-x-hidden">
	<?php include "layouts/nav.php" ?>
	<div class=" px-3 px-md-5" data-aos="fade-up" data-aos-offset="0" data-aos-delay="150" data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true">
		<div class="archives mx-auto mb-5 h-100 d-flex flex-column">
			<h1 class="page-title h4 my-3 m-auto">Data Titik Lampu Kabupaten Kotawaringin Barat</h1>
			<div class="card">
				<div class="card-body ">

					<form method="GET" action="#" id="search-form" class="form-horizontal " role="form">
						<div class="row row-cols-3 gx-2 gy-2">
							<div class="form-group col-md-4">
								<label for="kecamatan" class="control-label">Zona :</label>
								<select class="select form-control" id="idkecamatan" name="zona">
									<option value="">Pilih Zona</option>
									<option value="1">A</option>
									<option value="2">B</option>
									<option value="3">C</option>
									<option value="4">D</option>
									<option value="5">E</option>
									<option value="6">F</option>
									<option value="7">G</option>
									<option value="8">H</option>
									<option value="9">I</option>
									<option value="10">J</option>
								</select>
							</div>
							<div class="form-grouop col-md-4">
								<label for="konstruksi" class="control-label">Konstruksi Pju :</label>
								<select class="select form-control" id="idkonstruksi" name="konstruksi">
									<option value="" selected="selected">Pilih Konstruksi</option>
									<option value="1">Tiang Oktagonal</option>
									<option value="2">Tiang Poligonal</option>
									<option value="3">Tiang High Mast Motories</option>
									<option value="4">Stang</option>
									<option value="5">Tiang Ornamen</option>
									<option value="6">Tiang High Mast Manual</option>
									<option value="7">Tiang Swadaya</option>
									<option value="8">Ornamen Cor Beton</option>
									<option value="9">Tiang Solar Cell</option>
									<option value="10">Tiang Ornamen 4 Tangan</option>
									<option value="11">Tiang Ornamen 2 Tangan</option>
									<option value="12">Tiang Provider Oktagonal 1 Tangan</option>
									<option value="13">Tiang Provider 2 Tangan</option>
									<option value="14">Caping</option>
									<option value="15">Tiang PJU Swadaya</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="kategori">Kategori :</label>
								<select class="select form-control" id="kategori" name="kategori">
									<option value="" selected="selected">Semua Kategori</option>
									<option value="konvensional">Termeter</option>
									<option value="smart">Abondemen</option>
								</select>
							</div>

							
							
							
						</div>
						<div class="form-group p-2 ps-0">
							<button type="submit" class="btn btn-block btn-primary w-100">Filter Data</button>
						</div>
					</form>

					<div class="box-body table-responsive mt-3 rounded-3 overflow-hidden">
						<table id="tabeldetail" class="table table-bordered overflow-none table-hover table-condensed mb-0 border border-1" style="font-size: small;">
							<thead class="thead-light" >
								<tr>
									<th style="width: 5%">No</th>
									<th>Titik Lampu</th>
									<th class="text-center">Jumlah Lampu</th>
									<th>Lokasi</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($pju != null) {
									$i = 1;
									foreach ($pju as $pj) { ?>
										<tr>
											<td class="text-center">
												<?= $i ?>
											</td>
											<td>
												<b>Kode</b> : <?= $pj->Kode ?> / <b>Jenis PJU</b> : <?= $pj->Jenis_PJU ?> <br>
												<b>Jenis Lampu</b> : <?= $pj->Jenis_Bohlam ?> / <b>Letak Tiang</b> : <?= $pj->Letak_Tiang ?> <br>
												<b>Kondisi Tiang</b> : <?= $pj->Kondisi_Tiang ?> /
												<b>Jenis Jaringan</b> :<?= $pj->Jenis_Jringan ?><br>
												<a href="<?= base_url('index.php/Welcome/detail/') . $pj->Kode ?>" class="btn btn-sm btn-link p-0 mt-2 btnMap text-danger">
													<i class="fa fa-map-marker" aria-hidden="true"></i>
													Lihat Lokasi (<?= number_format($pj->LAT, 5) ?>, <?= number_format($pj->LONG, 5) ?>)
												</a>
											</td>
											<td class="text-center"><?= $pj->Kondisi_Lampu ?></td>
											<td><?= $pj->Nama_Ruas ?></td>
											<td></td>
										</tr>
								<?php $i++;
									}
								} ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include "layouts/foot.php" ?>

</body>
<script>
	function sortSelect(selElem) {
  var tmpAry = new Array();
  for (var i=0;i<selElem.options.length;i++) {
    tmpAry[i] = new Array();
    tmpAry[i][0] = selElem.options[i].text;
    tmpAry[i][1] = selElem.options[i].value;
  }
  tmpAry.sort();
  while (selElem.options.length > 0) {
    selElem.options[0] = null;
  }
  for (var i=0;i<tmpAry.length;i++) {
    var op = new Option(tmpAry[i][0], tmpAry[i][1]);
    selElem.options[i] = op;
  }
  return;
}

sortSelect(document.getElementById('#idkecamatan'));

</script>

</html>
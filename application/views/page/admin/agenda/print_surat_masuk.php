<style type="text/css">
	body {
		font-size: 12px !important;
		color: #212121;
	}

	table {
		width: 100%;
		font-size: 12px;
		color: 212121;
	}

	tr,
	td,
	tbody,
	thead {
		border: 1px solid #444;
		padding: 8px !important;
		vertical-align: middle !important;
	}

	#lbr {
		font-size: 17px;
		font-weight: bold;
	}

	.isi_rks {
		height: 150px !important;
	}

	.tgh {
		text-align: center;
	}

	#right {
		border-right: none !important;
	}

	#left {
		border-left: none !important;
	}

	.header {
		text-align: center;
		margin: -.5rem 0;
	}

	.logo1 {
		float: left;
		position: relative;
		width: 80px;
		height: 80px;
		margin: 0 0 0 1.2rem;
	}

	.logo2 {
		float: right;
		position: relative;
		width: 80px;
		height: 80px;
		margin: 0 0 0 1.2rem;
	}

	.text {
		font-size: 15px !important;
		font-weight: bold;
		text-transform: uppercase;
	}

	#lead {
		width: auto;
		position: relative;
		margin: 15px 0 0 75%;
	}

	.lead {
		font-weight: bold;
		text-decoration: underline;
		margin-bottom: -10px;
	}
</style>
<div class="row" align="center">
	<div class="header">
		<!-- Ubah Nanti Gambarnya -->
		<img src="<?= base_url() ?>assets/img/POLDA.png" class="logo1">
		<img src="<?= base_url() ?>assets/img/BIDTIK.jpg" class="logo2">
		<h6 class="text">KEPOLISIAN NEGARA REPUBLIK INDONESIA<br> DAERAH BALI <br> BIDANG TEKNOLOGI INFORMASI DAN KOMUNIKASI</h6>
		<h6 class="text">DATA AGENDA SURAT MASUK</h6>
	</div>
	<br>
	<br>
	<table cellspacing="0" cellspacing="5" border="">
		<thead>
			<tr style="font-size: 13px;">
				<th width="1" style="vertical-align: middle;">No</th>
				<th>
					<center>No Agd,<br>No Surat</center>
				</th>
				<th>
					<center>Tanggal Surat</center>
				</th>
				<th>
					<center>Jenis Naskah,<br>Jenis Surat</center>
				</th>
				<th style="vertical-align: middle;">
					<center>Klasifikasi Surat</center>
				</th>
				<th style="vertical-align: middle;">
					<center>Kode Arsip</center>
				</th>
				<th>
					<center>Asal Surat,<br> Perihal</center>
				</th>
				<th style="vertical-align: middle;">
					<center>Isi Ringkas</center>
				</th>
				<th style="vertical-align: middle;">
					<center>Jumlah Lampiran</center>
				</th>
				<th style="vertical-align: middle;">
					<center>Keterangan</center>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 1;
			foreach ($surat as $data) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $data['no_agenda'] ?>,<br><?= $data['no_surat'] ?> </td>
					<td><?= $data['tanggal_surat'] ?></td>
					<td><?= $data['jenis_naskah'] ?>,<br><?= $data['nama_jenis'] ?></td>
					<td><?= $data['nama_klasifikasi'] ?></td>
					<td><?= $data['kode_arsip'] ?></td>
					<td><?= $data['nama_satker'] ?>,<br><?= $data['perihal'] ?></td>
					<td><?= $data['isi_ringkas'] ?></td>
					<td><?= $data['lampiran'] ?> Lembar</td>
					<td><?= $data['keterangan'] ?></td>

				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<div id="lead">
		<p>Mengetahui,<br>
			Kepala Bidang TIK POLDA BALI</p>
		<div style="height: 50px"></div>
		<p class="lead">M. SAMSU ARIFIN, S,I.K., M.H.</p>
		<p>NRP. 74070753</p>
	</div>
</div>

<script type="text/javascript">
	window.print();
</script>

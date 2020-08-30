	<center>
		<h2>All Data Surat Masuk</h2>
	</center>
	<table border="1" cellspacing="0" cellpadding="5" width="100%">
		<thead>
			<tr style="font-size: 13px;">
				<th width="1" style="vertical-align: middle;">No</th>
				<th>
					<center>No Agd</center>
				</th>
				<th>
					<center>No Surat</center>
				</th>
				<th>
					<center>Tanggal Surat</center>
				</th>
				<th>
					<center>Jenis Naskah</center>
				</th>
				<th>
					<center>Jenis Surat</center>
				</th>
				<th style="vertical-align: middle;">
					<center>Klasifikasi Surat</center>
				</th>
				<th style="vertical-align: middle;">
					<center>Kode Arsip</center>
				</th>
				<th>
					<center>Asal Surat</center>
				</th>
				<th>
					<center>Perihal</center>
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
			foreach ($data as $data) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $data['no_agenda'] ?></td>
					<td><?= $data['no_surat'] ?></td>
					<td><?= $data['tanggal_surat'] ?></td>
					<td><?= $data['jenis_naskah'] ?></td>
					<td><?= $data['nama_jenis'] ?></td>
					<td><?= $data['nama_klasifikasi'] ?></td>
					<td><?= $data['kode_arsip'] ?></td>
					<td><?= $data['nama_satker'] ?></td>
					<td><?= $data['perihal'] ?></td>
					<td><?= $data['isi_ringkas'] ?></td>
					<td><?= $data['lampiran'] ?> Lembar</td>
					<td><?= $data['keterangan'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>

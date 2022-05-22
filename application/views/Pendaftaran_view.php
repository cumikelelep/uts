<?php
if ($pendaftaran) {
	echo "<h1>List Pendaftaran Vaksin</h1>";
	echo "<table border='1' cellpadding='5' cellspacing='0'>";
	echo "<tr>
					<th>No.</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>Nomor Telepon</th>
					<th>Pilihan Vaksin</th>
					<th>Status Vaksin</th>
					<th colspan='2'>Action</th>
					</tr>";

	$no = 1;
	foreach ($pendaftaran as $content) {
		echo "<tr>
						<td>$no.</td>
						<td>$content[0]</td>
						<td>$content[1]</td>
						<td>$content[2]</td>
						<td>$content[3]</td>
						<td>$content[4]</td>
						<td>$content[5]</td>
						<td>$content[6]</td>
						<td>" .
			anchor('pendaftaran/delete/' . $content[0], 'Delete', 'title="Delete Data"') . " | " .
			anchor('pendaftaran/form_update/' . $content[0], 'Update', 'title="Update Data"') .
			"</td>
						</tr>";
		$no++;
	}
	echo "</table>";
	
}
?>
<a href="<?= base_url('pendaftaran/form_tambah'); ?>">Tambah Data</a>

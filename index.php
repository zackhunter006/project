<html>
<body>
<h2> Jenis Agama </h2>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from agama_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_agama'] = $row["id_agama"];
		$data['agama'] = $row["agama"];
		
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
<br>
<html>
<body>
<h2>Nama Guru Smkn 8 Semarang</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from guru_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['kode_guru'] = $row["kode_guru"];
		$data['nip'] = $row["nip"];
		$data['nama'] = $row["nama"];
		$data['telpon'] = $row["telepon"];
		$data['tempat_lahir'] = $row["tempat_lahir"];
		$data['tgl_lahir'] = $row["tgl_lahir"];
		$data['alamat'] = $row["alamat"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
<html>
<body>
<h2>Data Guru Mengajar</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from guru_mengajar_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['kode_guru'] = $row["kode_guru"];
		$data['kd_mapel'] = $row["kd_mapel"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
<html>
<body>
<h2>Jurusan Smkn 8 Semarang</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from jurusan_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_jurusan'] = $row["id_jurusan"];
		$data['nama_jurusan'] = $row["nama_jurusan"];
		$data['nama_full'] = $row["nama_full"];
		$data['kode_diklat'] = $row["kode_diklat"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
<html>
<body>
<h2>Kelas SMKN 8 Semarang</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from kelas_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_kelas'] = $row["id_kelas"];
		$data['prefix_kelas'] = $row["kd_jurusan"];
		$data['nomor_kelas'] = $row["nomor_kelas"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
<html>
<body>
<h2>Kelompok Mapel Smkn 8 Semarang</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from kelompok_mapel_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['kode_kelompok'] = $row["kode_kelompok"];
		$data['nama_kelompok_mapel'] = $row["nama_kelompok_mapel"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
<html>
<body>
<h2>Mapel Smkn 8 Semarang</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from mapel_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['kode_mapel'] = $row["kode_mapel"];
		$data['nama_mapel'] = $row["nama_mapel"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
<html>
<body>
<h2>Mata Diklat Smkn 8 Semarang</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from mata_diklat_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['kode_mata_diklat'] = $row["kode_mata_diklat"];
		$data['nama_mata_diklat'] = $row["nama_mata_diklat"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
<html>
<body>
<h2>Nilai portofolio Smkn 8 Semarang</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from nilai_portofolio_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['nis'] = $row["nis"];
		$data['kd_mapel'] = $row["kd_mapel"];
		$data['semester'] = $row["semester"];
		$data['tahun_ajaran'] = $row["tahun_ajaran"];
		$data['nilai'] = $row["nilai"];
		$data['kd_guru_penilai'] = $row["kd_guru_penilai"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
<html>
<body>
<h2>Nilai praktek Smkn 8 Semarang</h2> 
</body>
</html>
<?php
include'koneksi.php';
$no = 1;
$query = mysqli_query($conn, 'select * from nilai_praktek_6771');


if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id"];
		$data['nis'] = $row["nis"];
		$data['kd_mapel'] = $row["kd_mapel"];
		$data['semester'] = $row["semester"];
		$data['tahun_ajaran'] = $row["tahun_ajaran"];
		$data['nilai'] = $row["nilai"];
		$data['kd_guru_penilai'] = $row["kd_guru_penilai"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
</br>
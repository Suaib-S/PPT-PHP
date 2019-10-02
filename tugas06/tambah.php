<?php
require 'inkphp.php';

    if( isset($_POST["submit"]) ) {
        if (tambah($_POST) > 0 ) {
            echo " 
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
            ";
        }else{
            echo "
            <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Menambahkan Data Mahasiswa <br/> Kelomok XI </h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Menambahkan Data Baru</p>
 
		<form action= "" method= "post">
            <label for="NIM"> Nim </label>
                <input type="text" name="NIM" class="form_login" placeholder="NIM" id="NIM" required>
            <label for="NAMA"> Nama </label>
                <input type="text" name="NAMA" class="form_login" placeholder="Nama" id="NAMA" required>
            <label for="KELAS"> Kelas </label>
                <input type="text" name="KELAS" class="form_login" placeholder="Kelas" id="KELAS" required>
            <label for="TANGGAL_LAHIR"> Tanggal Lahir </label>
                <input type="text" name="TANGGAL_LAHIR" class="form_login" placeholder="Tanggal Lahir" id="TANGGAL_LAHIR" required>
            <label for="JENIS_KELAMIN"> Jenis Kelamin </label>
                <input type="text" name="JENIS_KELAMIN" class="form_login" placeholder="Jenis Kelamin" id="JENIS_KELAMIN" required>
            <label for="ALAMAT"> Alamat </label>
                <input type="text" name="ALAMAT" class="form_login" placeholder="Alamat" id="ALAMAT" required>
            <button type ="submit" name="submit" class="tombol_login">Tambah Data</button>

 
			<br/>
			<br/>
			<center>
				<a class="link" href="http://localhost/tugas06/index.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>
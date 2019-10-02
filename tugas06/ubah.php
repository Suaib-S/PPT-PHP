<?php
require 'inkphp.php';

$NIM = $_GET["NIM"];

$klp = query ("SELECT * FROM kelompok11 WHERE NIM = $NIM")[0];

    if( isset($_POST["submit"]) ) {
        if (ubah($_POST) > 0 ) {
            echo " 
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
            ";
        }else{
            echo "
            <script>
            alert('data gagal diubah');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mengubah Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Mengubah Data Mahasiswa <br/> Kelomok XI </h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Ubah Data</p>
 
		<form action= "" method= "post">
            <label for="NIM"> Nim </label>
                <input type="text" name="NIM" class="form_login" id="NIM" value="<?= $klp["NIM"];?>">
            <label for="NAMA"> Nama </label>
                <input type="text" name="NAMA" class="form_login" id="NAMA" value="<?= $klp["NAMA"];?>">
            <label for="KELAS"> Kelas </label>
                <input type="text" name="KELAS" class="form_login" id="KELAS" value="<?= $klp["KELAS"];?>">
            <label for="TANGGAL_LAHIR"> Tanggal Lahir </label>
                <input type="text" name="TANGGAL_LAHIR" class="form_login" id="TANGGAL_LAHIR" value="<?= $klp["TANGGAL_LAHIR"];?>">
            <label for="JENIS_KELAMIN"> Jenis Kelamin </label>
                <input type="text" name="JENIS_KELAMIN" class="form_login" id="JENIS_KELAMIN" value="<?= $klp["JENIS_KELAMIN"];?>">
            <label for="ALAMAT"> Alamat </label>
                <input type="text" name="ALAMAT" class="form_login" id="ALAMAT" value="<?= $klp["ALAMAT"];?>">
            <button type ="submit" name="submit" class="tombol_login">Ubah Data</button>
			<br/>
			<br/>
			<center>
				<a class="link" href="http://localhost/tugas06/index.php">Kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>
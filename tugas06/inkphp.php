<?php
$conn = mysqli_connect("localhost", "root", "", "kelompok11");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $NIM = htmlspecialchars($data["NIM"]);
    $NAMA = htmlspecialchars($data["NAMA"]);
    $KELAS = htmlspecialchars($data["KELAS"]);
    $TANGGAL_LAHIR = htmlspecialchars($data["TANGGAL_LAHIR"]);
    $JENIS_KELAMIN = htmlspecialchars($data["JENIS_KELAMIN"]);
    $ALAMAT = htmlspecialchars($data["ALAMAT"]);

    $query = "INSERT INTO  kelompok11
         VALUES 
        (' $NIM', '$NAMA', '$KELAS', '$TANGGAL_LAHIR', '$JENIS_KELAMIN', '$ALAMAT')
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($NIM) {
    global $conn;
    mysqli_query($conn, "DELETE FROM kelompok11 WHERE NIM = $NIM");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $NIM = htmlspecialchars($data["NIM"]);
    $NAMA = htmlspecialchars($data["NAMA"]);
    $KELAS = htmlspecialchars($data["KELAS"]);
    $TANGGAL_LAHIR = htmlspecialchars($data["TANGGAL_LAHIR"]);
    $JENIS_KELAMIN = htmlspecialchars($data["JENIS_KELAMIN"]);
    $ALAMAT = htmlspecialchars($data["ALAMAT"]);

    $query = "UPDATE kelompok11 SET
                NIM = '$NIM',
                NAMA = '$NAMA',
                KELAS = '$KELAS',
                TANGGAL_LAHIR = '$TANGGAL_LAHIR',
                JENIS_KELAMIN = '$JENIS_KELAMIN',
                ALAMAT = '$ALAMAT'
            WHERE NIM = $NIM
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
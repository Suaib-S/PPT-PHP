<?php

require 'inkphp.php';

    $NIM = $_GET["NIM"];

    if ( hapus ($NIM) > 0) {
        echo " 
        <script>
            alert('data berhasil dihapus');
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
?>
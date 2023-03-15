<?php
    include "koneksi.php";

    // baca ID data yang akan diedit
    $id = $_GET['id'];

    // baca data karyawan berdasarkan id
    $hapus = mysqli_query($konek, "Delete from karyawan where id='$id'");

    if($hapus){
        echo "
            <script>
                alert('Terhapus');
                location.replace('datakaryawan.php');
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Gagal Terhapus');
                location.replace('datakaryawan.php');
            </script>
        ";
    }

?>
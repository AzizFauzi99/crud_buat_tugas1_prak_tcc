<?php
    include "koneksi.php";

    // baca mode absensi terakhir
    $mode = mysqli_query($konek, "Select * from status");
    $data_mode = mysqli_fetch_array($mode);
    $mode_absen = $data_mode['mode'];

    // status terakhir kemudian ditambah 1
    $mode_absen = $mode_absen + 1;
    if($mode_absen > 2)
        $mode_absen = 1;
    
    // simpan mode absen di tabel status dengan cara update
    $simpan = mysqli_query($konek, "Update status set mode = '$mode_absen'");
    if($simpan)
        echo "Berhasil";
    else    
        echo "Gagal";
    

?>
<?php
    error_reporting(0);
    include "koneksi.php";

    //baca tabel status untuk mode absensi
    $sql = mysqli_query($konek, "SELECT * FROM status");
    $data = mysqli_fetch_array($sql);
    $mode_absen = $data['mode'];

    //uji mode absen
    
    $mode = "";
    if($mode_absen==1){
        $mode = "Masuk";
    }
    else if($mode_absen==2){
        $mode = "Pulang";
    }

    //baca tabel tmprfid
    $baca_kartu = mysqli_query($konek, "SELECT * FROM tmprfid");
    $data_kartu = mysqli_fetch_array($baca_kartu);
    $nokartu    = $data_kartu['nokartu'];

?>


<div class="container-fluid" style="text-align: center;">
    <?php if($nokartu==""){ ?>
        <h3>
            Absen : <?php echo $mode;  ?> <br><br>
            Silahkan Tempelkan Kartu RFID Anda</h3>
        <img src="images/rfid.png" style="width: 200px"><br>
        <img src="images/animasi2.gif" >

    <?php } else {
        //cek nomor kartu rfid tersebut apakah terdaftar pada tabel mahasiswa
        $cari_karyawan = mysqli_query($konek, "SELECT * FROM karyawan WHERE no_kartu='$nokartu'");
        $jumlah_data = mysqli_num_rows($cari_karyawan);

        if($jumlah_data==0){
            echo "<h1>Maaf! Kartu Tidak Dikenali</h1>";
        }
        else {
            //ambil nama karyawan
            $data_karyawan = mysqli_fetch_array($cari_karyawan);
            $nama = $data_karyawan['nama'];

            //tanggal dan jam hari ini
            date_default_timezone_set('Asia/Jakarta');
            $tanggal    = date('Y-m-d');
            $jam        = date('H:i:s');

            // cek di tabel absensi, apakah nomor kartu tersebut sudah ada sesuai tanggal saat ini. Apabila belum ada, maka dianggap absen masuk, tapi kalau ada maka update data sesuai mode absensi
            $cari_absen = mysqli_query($konek,"SELECT * from absensi WHERE nokartu='$nokartu' AND tanggal='$tanggal'");
            //hitung jumlah datanya
            $jumlah_absen = mysqli_num_rows($cari_absen);
            if($jumlah_absen == 0){
                echo "<h1> Selamat Datang <br> $nama </h1>";
                mysqli_query($konek, "INSERT INTO absensi(nokartu, tanggal, jam_masuk)VALUE('$nokartu', '$tanggal', '$jam')");   
            }
            else{
                 //update sesuai pilihan mode absen
                 if($mode_absen == 1){
                    echo "<h1>Selamat Datang <br> $nama </h1>";
                    mysqli_query($konek,"UPDATE absensi SET jam_masuk='$jam' WHERE nokartu='$nokartu' AND tanggal='$tanggal'");
                 }
                 else {
                    echo "<h1>Selamat Jalan <br> $nama </h1>";
                    mysqli_query($konek,"UPDATE absensi SET jam_pulang='$jam' WHERE nokartu='$nokartu' AND tanggal='$tanggal'");
                 }
            }
        }
        //kosongkan tabel temprfid
        mysqli_query($konek, "DELETE FROM tmprfid");
    } ?>
</div>
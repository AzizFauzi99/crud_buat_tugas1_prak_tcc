<?php
include "koneksi.php";

// Jika tombol simpan diklik
if (isset($_POST['btnSubmit'])) {
    // baca isi inputan form
    $nokartu = $_POST['nokartu'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // simpan ke tabel karyawan
    $simpan = mysqli_query($konek, "insert into karyawan(no_kartu, nama, alamat) values('$nokartu', '$nama', '$alamat')");

    // Jika berhasil tersimpan, tampilkan pesan tersimpan kembali ke data karyawan
    if ($simpan) {
        echo "
                <script>
                    alert('Tersimpan');
                    location.replace('datakaryawan.php');
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Gagal Tersimpan');
                    location.replace('datakaryawan.php');
                </script>
            ";
    }
}

// kosongkan tabel tmprfid
mysqli_query($konek, "delete from tmprfid")
?>

<!DOCTYPE html>
<html>

<head>
    <?php include "header.php"; ?>
    <title>Tambah Data Karyawan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <!-- isi -->
    <div class="container">
        <h3>Tambah Data Karyawan</h3>

        <form action="" method="POST">
            <div class="form-floating mt-3 mb-3">
                <input type="text" class="form-control" id="norfid" placeholder="No Kartu" name="nokartu">
                <label for="norfid">No Kartu</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="nama" placeholder="Nama Karyawan" name="nama">
                <label for="nama">Nama Karyawan</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <textarea class="form-control" placeholder="Alamat" id="alamat" name="alamat" style="height: 100px"></textarea>
                <label for="alamat">Alamat</label>
            </div>

            <input class="btn btn-primary mb-5" name="btnSubmit" type="submit" value="Simpan">
        </form>

    </div>

    <?php include "footer.php"; ?>
</body>

</html>
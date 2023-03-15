<!DOCTYPE html>
 <html>
 <head>
     <?php include "header.php"; ?>
     <title>Data Karyawan</title>
 </head>
 <body>
    <?php include "menu.php"; ?>

    <!-- isi -->
    <div class="container">
        <h3>Data Karyawan</h3>
        <table class="table table-bordered">
            <thead>
                <tr class="fs-4">
                    <th style="width: 10px; text-align: center">No.</th>
                    <th style="width: 200px; text-align: center">No.Kartu</th>
                    <th style="width: 400px; text-align: center">Nama</th>
                    <th style="text-align: center">Alamat</th>
                    <th style="width: 150px; text-align: center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    // koneksi ke database
                    include "koneksi.php";

                    // baca data karyawan
                    $sql = mysqli_query($konek, "SELECT * FROM karyawan");
                    $no = 0;
                    while($data = mysqli_fetch_array($sql)){
                        $no++
                                        
                ?>

                <tr>
                    <td> <?= $no;?> </td>
                    <td><?= $data['no_kartu'];?></td>
                    <td><?= $data['nama'];?></td>
                    <td><?= $data['alamat'];?></td>
                    <td> 
                        <a class="btn btn-success" role="button" href="edit.php?id=<?= $data['id'] ?>">Edit</a> 
                        <a class="btn btn-danger" role="button"href="hapus.php?id=<?= $data['id'] ?>">Hapus</a>
                    </td>

                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="tambah.php"> <button class="btn btn-primary mb-5">Tambah Data Karyawan</button> </a>
    </div>
     
    <?php include "footer.php"; ?>
 </body>
 </html>
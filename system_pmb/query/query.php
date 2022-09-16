<?php
include "../controllers/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/styles/notif-nav.css">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <title></title>
</head>
<body>
    <nav>
        <h1><a href="../index.php">home</a></h1>
    </nav>
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4"> . . . .</h1>
            <p class="lead">List peserta.</p>
            <div class="container mt-4">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>Tanggal Registrasi</th>
                        <th>Nama Pendaftar</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Jurusan Pilihan</th>
                        <th>Asal Sekolah</th>
                    </tr>
                    <?php
                        // menampilkan seluruh isi database
                        $datapendaftar ="SELECT DATE(tanggal_registrasi) tgl, nama, jenis_kelamin, 
                                                tanggal_lahir, tempat_lahir ,nama_prodi, nama_sekolah
                                        FROM calon_mahasiswa 
                                        INNER JOIN registrasi ON calon_mahasiswa.nisn=registrasi.nisn 
                                        INNER JOIN  program_studi ON registrasi.kode_prodi=program_studi.kode_prodi
                                        INNER JOIN histori_akademik ON calon_mahasiswa.nisn=histori_akademik.nisn
                                        INNER JOIN sekolah_sebelumnya ON histori_akademik.npsn=sekolah_sebelumnya.npsn;";
                                        
                        $hasil = mysqli_query($koneksi, $datapendaftar);
                        while($data = mysqli_fetch_array($hasil))
                        {
                            echo "<tr>";
                            echo "<td>$data[tgl]</td>";
                            echo "<td>$data[nama]</td>";
                            echo "<td>$data[jenis_kelamin]</td>";
                            echo "<td>$data[tanggal_lahir]</td>";
                            echo "<td>$data[tempat_lahir]</td>";
                            echo "<td>$data[nama_prodi]</td>";
                            echo "<td>$data[nama_sekolah]</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
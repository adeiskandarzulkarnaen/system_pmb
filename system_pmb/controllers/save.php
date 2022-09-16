<?php
include 'connection.php';

    // SAVE DATA into VARIABLE
    $nisn           = $_POST['nisn'];
    $name           = $_POST['name'];
    $gender         = $_POST['gender'];
    $cityOfBirth    = $_POST['cityOfBirth'];
    $dateOfBirth    = $_POST['dateOfBirth'];
    $province       = $_POST['province']; 
    $city           = $_POST['city'];           
    $district       = $_POST['district'];        
    $addressDetail  = $_POST['addressDetail'];
    $postalCode     = $_POST['postalCode'];
    $email          = $_POST['email'];
    $phoneNumber    = $_POST['phoneNumber'];
    $fatherName     = $_POST['fatherName'];
    $fatherJob      = $_POST['fatherJob'];
    $fatherEducation    = $_POST['fatherEducation'];
    $motherName         = $_POST['motherName'];
    $motherJob          = $_POST['motherJob'];
    $motherEducation    = $_POST['motherEducation'];
    $numberOfSiblings   = $_POST['numberOfSiblings'];
    $income          = $_POST['income'];
    $npsn            = $_POST['npsn'];
    $prevSchool      = $_POST['prevSchool'];
    $educationLevel  = $_POST['educationLevel'];
    $dateIn          = $_POST['dateIn'];
    $dateOut         = $_POST['dateOut'];
    $grade           = $_POST['grade'];
    $majors          = $_POST['majors'];


    /*     cek input NIM apakah sudah ada nim yang digunakan    */
    $pilih="SELECT * FROM calon_mahasiswa where nisn='$nisn'";
    $cek=mysqli_query($koneksi, $pilih);
    $jumlah_data = mysqli_num_rows($cek);
    if ($jumlah_data >= 1 ) 
        {
            echo "<script>alert('NISN sudah terdaftar!');history.go(-1);</script>";
        } else {            
            // query untuk insert data mahasiswa
            $query_insert_bio="INSERT INTO calon_mahasiswa(nisn,
                    nama,
                    jenis_kelamin,
                    tempat_lahir,
                    tanggal_lahir,
                    provinsi,
                    kabupaten,
                    kecamatan,
                    alamat_detail,
                    kode_pos,
                    email,
                    nomor_handphone, 
                    nama_ayah,
                    pekerjaan_ayah,
                    pendidikan_terakhir_ayah,
                    nama_ibu, 
                    pekerjaan_ibu,
                    pendidikan_terakhir_ibu,
                    jumlah_saudara,
                    penghasilan_bulanan )
                VALUES('$nisn',
                    '$name',
                    '$gender',
                    '$cityOfBirth',
                    '$dateOfBirth',
                    '$province',
                    '$city',
                    '$district',
                    '$addressDetail',
                    '$postalCode',
                    '$email',
                    '$phoneNumber',
                    '$fatherName',
                    '$fatherJob',
                    '$fatherEducation',
                    '$motherName',
                    '$motherJob',
                    '$motherEducation',
                    '$numberOfSiblings',
                    '$income')";

                        
        $query_insert_schoolprev="INSERT INTO sekolah_sebelumnya(npsn, nama_sekolah,jenjang )
                    VALUES ('$npsn', '$prevSchool', '$educationLevel')";   

        $query_insert_history="INSERT INTO histori_akademik(nisn, npsn, tanggal_masuk, tanggal_lulus, nilai_akhir)
                    VALUES ('$nisn','$npsn','$dateIn','$dateOut','$grade')";

        $query_insert_registrasi = "INSERT INTO registrasi(nisn, kode_prodi )
                    VALUES ('$nisn','$majors')";

        mysqli_query($koneksi, $query_insert_bio);
        mysqli_query($koneksi, $query_insert_schoolprev);
        mysqli_query($koneksi, $query_insert_history);
        mysqli_query($koneksi, $query_insert_registrasi);
        // echo " Input Data yang anda masukkan sukses berhasil";
        // header("location:query.php");

    // echo "<script>alert('Data yang anda Input sukses');</script>";
    echo "<script>window.location='../page/notification.php'</script>";
    }

?>
<!DOCTYPE html>
<html lang="id" translate="no">
<head>
    <link rel="stylesheet" href="../assets/styles/notif-nav.css" />
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Registrasi</title>
</head>
<body>
    <header>
        <nav>
            <h1><a href="../index.php">home</a></h1>
        </nav>
    </header>
    <body>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">Form Registrasi</div>
                <div class="card-body">
                    <form method="post" action="../controllers/save.php">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" id="NISN" name="nisn" maxlength="10"/>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" maxlength="40"/>
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select id="gender" class="form-control" name="gender">
                                <option selected>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cityOfBirth">Tempat Lahir</label>
                            <input type="text" class="form-control" id="cityOfBirth" name="cityOfBirth" maxlength="20"/>
                        </div>
                        <div class="form-group">
                            <label for="dateOfBirth">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" />
                        </div>
                        <div class="form-group">
                            <label for="province">Provinsi</label>
                            <input type="text" class="form-control" id="province" name="province" maxlength="20"/>
                        </div>
                        <div class="form-group">
                            <label for="city">Kabupaten / Kota</label>
                            <input type="text" class="form-control" id="city" name="city" maxlength="20"/>
                        </div>
                        <div class="form-group">
                            <label for="district">Kecamatan</label>
                            <input type="text" class="form-control" id="district" name="district" maxlength="20"/>
                        </div>
                        <div class="form-group">
                            <label for="addressDetail">Alamat Detail</label>
                            <input type="text" class="form-control" id="addressDetail" name="addressDetail" maxlength="50"/>
                        </div>
                        <div class="form-group">
                            <label for="postalCode">Kode Pos</label>
                            <input type="text" class="form-control" id="postalCode" name="postalCode" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" maxlength="35"/>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Nomor Handphone</label>
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" maxlength="14"/>
                        </div>
                        <div class="form-group">
                            <label for="fatherName">Nama Ayah</label>
                            <input type="text" class="form-control" id="fatherName" name="fatherName" maxlength="40"/>
                        </div>
                        <div class="form-group">
                            <label for="fatherJob">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" id="fatherJob" name="fatherJob" />
                        </div>
                        <div class="form-group">
                            <label for="fatherEducation">Pendidikan Terakhir Ayah</label>
                            <select id="fatherEducation" class="form-control" name="fatherEducation">
                                <option>S3</option>
                                <option>S2</option>
                                <option>D4/S1</option>
                                <option>D1/D2/D3</option>
                                <option>SLTA/Sederajat</option>
                                <option>SLTP/Sederajat</option>
                                <option>SD</option>
                                <option selected>Tidak Sekolah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="motherName">Nama Ibu</label>
                            <input type="text" class="form-control" id="motherName" name="motherName" maxlength="40"/>
                        </div>
                        <div class="form-group">
                            <label for="motherJob">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="motherJob" name="motherJob" />
                        </div>
                        <div class="form-group">
                            <label for="motherEducation">Pendidikan Terakhir Ibu</label>
                            <select id="motherEducation" class="form-control" name="motherEducation">
                                <option>S3</option>
                                <option>S2</option>
                                <option>D4/S1</option>
                                <option>D1/D2/D3</option>
                                <option>SLTA/Sederajat</option>
                                <option>SLTP/Sederajat</option>
                                <option>SD</option>
                                <option selected>Tidak Sekolah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="numberOfSiblings">Jumlah Saudara</label>
                            <input type="text" class="form-control" id="numberOfSiblings" name="numberOfSiblings" maxlength="2"/>
                        </div>
                        <div class="form-group">
                            <label for="income">Penghasilan Bulanan</label>
                            <input type="text" class="form-control" id="income" name="income" maxlength="17"/>
                        </div>
                        <div class="form-group">
                            <label for="npsn">NPSN Sekolah/Kampus Asal</label>
                            <input type="text" class="form-control" id="npsn" name="npsn" maxlength="10"/>
                        </div>
                        <div class="form-group">
                            <label for="prevSchool">Nama Sekolah Sebelumnya</label>
                            <input type="text" class="form-control" id="prevSchool" name="prevSchool" />
                        </div>
                        <div class="form-group">
                            <label for="educationLevel">Jenjang</label>
                            <select id="educationLevel" class="form-control" name="educationLevel">
                                <option selected>SMA</option>
                                <option>SMK</option>
                                <option>D3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dateIn">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="dateIn" name="dateIn" />
                        </div>
                        <div class="form-group">
                            <label for="dateOut">Tanggal Lulus</label>
                            <input type="date" class="form-control" id="dateOut" name="dateOut" />
                        </div>
                        <div class="form-group">
                            <label for="grade">Nilai Akhir</label>
                            <input type="text" class="form-control" id="grade" name="grade" />
                        </div>
                        <div class="form-group">
                            <label for="majors">Pilih Program Studi</label>
                            <select id="majors" class="form-control" name="majors">
                                <option value="BPI">Bimbingan Penyuluhan Islam</option>
                                <option value="KPI">Komunikasi dan Penyiaran Islam</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Daftar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</body>
</html>
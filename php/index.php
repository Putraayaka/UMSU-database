<?php
    include 'koneksi.php';
    
    if(isset($_POST['submit'])){

        if (
        isset($_POST['th_ajaran']) && !empty($_POST['th_ajaran']) &&
        isset($_POST['jurusan']) && !empty($_POST['jurusan']) &&
        isset($_POST['nm']) && !empty($_POST['nm']) &&
        isset($_POST['tmp_lahir']) && !empty($_POST['tmp_lahir']) &&
        isset($_POST['tgl_lahir']) && !empty($_POST['tgl_lahir']) &&
        isset($_POST['jk']) && !empty($_POST['jk']) &&
        isset($_POST['agama']) && !empty($_POST['agama']) &&
        isset($_POST['alamat']) && !empty($_POST['alamat'])
    ) {

        // ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter saja dari sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);

        // proses insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
            '".$generateId."',
            '".date('Y-m-d')."',
            '".$_POST['th_ajaran']."',
            '".$_POST['jurusan']."',
            '".$_POST['nm']."',
            '".$_POST['tmp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['jk']."',
            '".$_POST['agama']."',
            '".$_POST['alamat']."'
        )");

        if($insert){
            echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
        }else{
            echo 'gagal'.mysqli_error($conn);
        }
        
        $stmt->close();
        $conn->close();
    }else{
        echo '<script>alert("Gagal, Harap isi data!")</script>';
    }
    }
// else{
//     echo '<script>alert("Gagal, Harap isi semua data!")</script>';
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran UMSU</title>
    <link href="../css/stylesphp.css" rel="stylesheet" />
    <!-- favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
</head>
<body>

    <!-- nav -->
    <header class="nav">
    <div class="logo">
        <a href="../index.html">
            <img src="../assets/img/portfolio/favicon.png" alt="UMSU Logo">
            <span>UMSU</span>
        </a>
    </div>
    </header>

    
    <!-- box formulir -->
    <section class="box-formulir">

        <h2>Formulir Pendaftaran Mahasiswa Baru</h2>

        <!-- bagian form -->
         <form action="" method="post">

            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2024/2025" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan">
                                <option value="0">--Pilih--</option>
                                <option value="Agama Islam">Agama Islam</option>
                                <option value="Hukum">Hukum</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Ilmu Sosial Dan Politik">Ilmu Sosial Dan Politik</option>
                                <option value="Ekonomi Dan Bisnis">Ekonomi Dan Bisnis</option>
                                <option value="Keguruan Dan Ilmu Pendidikan">Keguruan Dan Ilmu Pendidikan</option>
                                <option value="Kedokteran">Kedokteran</option></option>
                                <option value="Ilmu Komputer Dan Teknologi Informasi">Ilmu Komputer Dan Teknologi Informasi</option>
                                <option value="Teknik">Teknik</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Data Diri Calon Mahasiswa</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="Laki-Laki">Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="Perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama">
                                <option value="0">--Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Budha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea name="alamat" class="input-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value="DAFTAR SEKARANG">
                        </td>
                    </tr>
                </table>
            </div>

         </form>

    </section>

    <!-- footer -->
    <!-- <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; UMSU</div>
            <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="#!"
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-dark btn-social mx-2" href="#!"
              ><i class="fab fa-facebook-f"></i
            ></a>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a class="link-dark text-decoration-none me-3" href="#!"
              >Privacy Policy</a
            >
            <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
          </div>
        </div>
      </div>
    </footer> -->

    
</body>
</html>
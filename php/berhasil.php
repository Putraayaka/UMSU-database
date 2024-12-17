<?php
    include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <link href="../css/stylesphp.css" rel="stylesheet" />
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

    <header class="nav">
    <div class="logo">
        <a href="../index.html">
            <img src="../assets/img/portfolio/favicon.png" alt="UMSU Logo">
            <span>UMSU</span>
        </a>
    </div>
    </header>
    
    <!-- box formulir -->
    <section class="box-formulir2">

        <h2>Pendaftaran Berhasil</h2>

        <div class="box">
            <h4>Kode Pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
            <a href="cetak-bukti.php?id=<?php echo $_GET['id']?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
        </div>

        

    </section>

    
</body>
</html>
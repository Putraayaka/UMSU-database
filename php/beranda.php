<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin</title>
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
    
    <!-- bagian header -->
     <header>
        <h1><a href="beranda.php">Admin UMSU</a></h1>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="data-peserta.php">Peserta</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
     </header>

     <!-- content -->
      <section class="content">
        <h2>Beranda</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama']?>, Selamat Datang di Administrator</h3>
        </div>
      </section>

</body>
</html>
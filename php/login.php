<?php
    session_start();
    include 'koneksi.php';

    if(isset($_POST['login'])){

        // cek akun
        $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".htmlspecialchars($_POST['user'])."' AND password  = '".MD5(htmlspecialchars($_POST['pass']))."'");

        if(mysqli_num_rows($cek) > 0){

            $a = mysqli_fetch_object($cek);

            $_SESSION['stat_login'] = true;
            $_SESSION['id'] = $a->id_admin;
            $_SESSION['nama'] = $a->nm_admin;

            echo '<script>window.location="beranda.php"</script>';
        }else{
            echo '<script>alert("Gagal, username atau password salah")</script>';
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
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
    
    <!-- main login -->
     <section class="main-login">

        <div class="box-login">
            <h2>Login Admin</h2>

            <!-- form login -->
            <form action="" method="post">

                <div class="box">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="user" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="pass" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="login" value="Login" class="btn-login">
                            </td>
                        </tr>
                    </table>
                </div>

            </form>

        </div>

     </section>
    
</body>
</html>
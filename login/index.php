<?php
  include '../config/dbconfig.php';
?>

<!DOCTYPE html>
  <head>
    <title>Laman Login</title>

    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/pertamina/static/css/formLogin.css" />

    <link rel="stylesheet" href="/pertamina/static/css/login.css" />
    <link rel="shortcut icon" type="image/png" href="/pertamina/static/img/favicon.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  </head>

  <body>
    <div class="left-side">
      <center>
        <img src="../static/img/work.svg">
        <h1 style="font-size: 200%; font-weight:bold">Selamat datang!</h1><br>
        Pertamina Unit Pemasaran V Bertanggung Jawab terhadap<br>
        Pemasaran Produk-produk Pertamina di Wilayah<br>
        Jawa Timur, Kepulauan Nusa Tenggara, dan Sekitarnya<br><br>
        <a href="https://www.pertamina.com/" target=blank><button >Website Utama</button></a>
      </center>
    </div>

    <div class="right-side">

      <!-- DIV FOR LOGIN BOX -->
      <div style="background: white; margin: 120px 120px 120px 120px;border-radius: 25px">
        <center>
                <img src="../static/img/logo.png" width="40%" height="50%">
        </center>  

        <form class="form" action="/pertamina/routes/routeLogin.php" method="post">
          <!-- ACCESS DATABASE FOR LOGIN -->
          <?php 
            if(isset($_GET['status'])){
              if($_GET['status']=="gagal"){
                echo '<center style="color:#DA251C; font-weight: bold">E-mail dan/atau Kata Sandi salah!</center>';
              }
            }
          ?>

          <!-- USERNAME, PASSWORD, & SUBMIT -->
          <p class="field" style="margin-left: 85px; margin-top: 10px">
            <input type="text" name="nama" placeholder="E-mail" required/>
            <i class="fa fa-user"></i>
          </p>
          <p class="field" style="margin-left: 85px;">
            <input type="password" name="sandi" placeholder="Kata Sandi" required/>
            <i class="fa fa-lock"></i>
          </p>
          <center>
            <p class="submit"><input type="submit" name="commit" value="Masuk" style="background: #DA251C"></p>
          </center>

          <!-- AFTER SUBMIT BUTTON -->
          <p class="remember" style="margin-left: 45px">
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember"><span></span>Simpan Akun</label>
            <a style="color: #DA251C; float: right; margin-right: 75px; font-size: 14px;" href="#">Lupa Sandi?</a>
          </p>
          <center style="margin-bottom:10px">
            Belum punya akun? <a href="#" style="color: #DA251C; font-size: 14px"> Daftar!</a>
          </center>

        </form>        
      </div>
    </div>

  </body>
</html>
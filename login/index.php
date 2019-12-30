<?php  
include '../config/dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

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
    <center><img src="work.svg">
      <p><h1>Lorem Ipsum!</h1>Dolor si amet</p>
    </div>
<div class="right-side">

<div style="background: white; height: 460px; width: 450px; margin-left: 120px; margin-top: 30px;border-radius: 25px">
  <center>
          <img src="../static/img/logo.png" width="40%" height="50%">
  </center>  

<form class="form" action="/pertamina/routes/routeLogin.php" method="post">
      
      <?php 
        if(isset($_GET['status'])){
          if($_GET['status']=="gagal"){
            echo "<p><font color=red> Nama dan Password tidak sesuai !</font></p>";
          }
        }
      ?>

      <p class="field" style="margin-left: 100px; margin-top: 10px">
        <input type="text" name="nama" placeholder="Nama" required/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field" style="margin-left: 100px;">
        <input type="password" name="sandi" placeholder="Sandi" required/>
        <i class="fa fa-lock"></i>
      </p>

<center>
      <p class="submit"><input type="submit" name="commit" value="Masuk" style="background: #DA251C"></p>
</center>

      <p class="remember" style="margin-left: 45px">
        <input type="checkbox" id="remember" name="remember" />
        <label for="remember"><span></span>Remember Me</label>
        <a style="color: red; float: right; margin-right: 75px; font-size: 14px; font-style: italic; font-weight: bold;" href="#">Lupa Sandi?</a>
      
      </p>

 <center>
<p>
  Don't have an account? <a href="" style="color: red; font-weight: bold; font-size: 14px">Sign Up</a> 
</p>
</center>
    </form>


</div>

</div>

</body>
</html>
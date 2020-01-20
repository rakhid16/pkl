<div class="right-side">
  <div style="background: white; margin: 120px 120px 120px 120px;border-radius: 25px">
    <center>
      <img src="../../pertamina/static/assetLogin/img/logo.png" width="40%" height="50%">
    </center>  
          <!-- ACCESS DATABASE FOR LOGIN -->
    <form class="form" action="/pertamina/routes/routeLogin.php" method="post">
      <?php 
        if(isset($_GET['status'])){
          if($_GET['status']=="salah"){
            echo '<center style="color:#DA251C; font-weight: bold">E-mail dan/atau Kata Sandi salah!</center>';
          }
          else{
            echo '<center style="color:#DA251C; font-weight: bold" class="alert alert-danger">E-mail dan/atau Kata Sandi error!</center>';
         }
        }
      ?>

    <!-- USERNAME, PASSWORD, & SUBMIT -->
    <p class="field" style="margin-left: 85px; margin-top: 10px">
      <input type="text" name="nama" placeholder="Nama" autofocus required/>
      <i class="fa fa-user"></i>
    </p>
    <p class="field" style="margin-left: 85px;">
      <input type="password" name="sandi" placeholder="Kata Sandi" required/>
      <i class="fas fa-lock"></i>
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

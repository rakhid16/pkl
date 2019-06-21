<!DOCTYPE HTML>
<html>

<head>
  <title>FWC | Register</title>
  <meta charset="utf-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
  <meta name="theme-color" content="#4e342e">
  <link href="img/logo/logo-fwc.png" rel="shortcut icon">
  <link rel="stylesheet" text="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" text="text/css" href="css/fonts.css">
  <link rel="stylesheet" text="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" text="text/css" href="css/animate.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
  <link rel="stylesheet" text="text/css" href="css/styles.css">
  <link rel="stylesheet" text="text/css" href="css/sweet.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="api/global.js"></script>
  <script src="js/styles.fwc.register.js"></script>
  <script src="js/photo_uploader.js"></script>
  <script src="js/sweet.min.js"></script>
  <?php
    include("_include/APIInclude.php");
  ?>
</head>

<body class="ff-card-model brown darken-3 white-text">
  <div class="container">
    <div class="row web-register ff-row">
      <div class="col s12 m8 offset-m2 l6 offset-l3" style="margin-top: 10px;">
        <h5 class="center header">PENDAFTARAN PESERTA FWC</h5>
        <div class="progress deep-orange lighten-3">
          <div class="determinate deep-orange"></div>
        </div>
        <div class="row ff-row progress-text">
          <div class="col s4">
            <font class="step-1 active">DATA</font>
          </div>
          <div class="col s4">
            <font class="step-2">IDENTITAS</font>
          </div>
          <div class="col s4">
            <font class="step-3">SELESAI</font>
          </div>
        </div>

        <!-- Register step 1 -->
        <div class="card primary hoverable white grey-text text-darken-2 register-step1" style="margin-top: 30px;">
          <div class="card-content">
            <div class="card secondary deep-orange white-text">
              <div class="card-content">
                <p>
                  Silahkan isi <b>FORM DATA PESERTA</b> dibawah dengan data asli.
                </p>
              </div>
            </div>
            <div class="row" style="margin: 30px 6px 20px 6px">
              <form class="col s12" id="loginForm">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="register-namatim" type="text" class="validate" style="text-align: left">
                    <label for="register-namatim">Nama Tim</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="register-namaketua" type="text" class="validate" style="text-align: left">
                    <label for="register-namaketua">Nama Lengkap Ketua</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="register-telpketua" type="number" class="validate no-spinners" style="text-align: left">
                    <label for="register-telpketua">No. Telepon Ketua</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="register-emailketua" type="email" class="validate" style="text-align: left">
                    <label for="register-emailketua">Email Ketua</label>
                    <font class="deep-orange-text text-lighten-2" style="font-size: 12px">*email akan digunakan saat login</font>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="register-lineketua" type="text" class="validate" style="text-align: left">
                    <label for="register-lineketua">ID Line Ketua</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <select id="register-gender" class="validate" required="required">
                      <option value="0" disabled selected>Gender Ketua</option>
                      <option value="1">Laki-Laki</option>
                      <option value="2">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="register-sekolah" type="text" class="validate" style="text-align: left">
                    <label for="register-sekolah">Asal Sekolah</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="register-password" type="Password" class="validate" style="text-align: left">
                    <label for="register-password">Password</label>
                    <font class="deep-orange-text text-lighten-2" style="font-size: 12px">*password minimal terdiri dari 8 digit</font>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="register-password2" type="Password" class="validate" style="text-align: left">
                    <label for="register-password2">Confirm Password</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <select id="register-anggota" class="validate" required="required">
                      <option value="0" disabled selected>Daftar Sebagai</option>
                      <option value="1">Tim</option>
                      <option value="2">Individu</option>
                    </select>
                    <font class="deep-orange-text text-lighten-2" style="font-size: 12px">
                      *ketentuan opsi ini dapat dilihat di <a href="fwc" class="brown-text">FAQ</a>
                    </font>
                  </div>
                </div>
                <a class="waves-effect btn deep-orange accent-3" onclick="validateRegister(1,2)">&nbsp;Next&nbsp;</a><br>
              </form>
            </div>
          </div>
        </div>

        <!-- Register step 2 -->
        <div class="card primary hoverable white grey-text text-darken-2 register-step2" style="margin-top: 30px;">
          <div class="card-content">
            <div class="card secondary deep-orange white-text">
              <div class="card-content">
                <p>
                  Silahkan upload Kartu Pelajar / Surat Pengganti Kartu Pelajar ketua tim sesuai
                   dengan data yang diisi sebelumnya.
                </p>
              </div>
            </div>
            <div class="row" style="margin: 30px 15px 20px 15px">
              <form class="col s12 ff-row" id="identitas-upload" style="padding-bottom: 20px !important">
                <p>Ketentuan file:</p>
                <p> - Format file diunggah dalam ekstensi <font class="deep-orange-text">*.jpg / *.jpeg</font></p>
                <p> - Ukuran file maksimum <font class="deep-orange-text">1 MB</font></p>
                <p> - Identitas dapat dibaca dengan jelas</p>
                <div class="file-field input-field">
                  <img src="img/drag/drag-photo-fwc.png" id="image-preview" class="file-field input-field" accept="image/*">
                  <br>
                  <div class="btn deep-orange">
                    <span>FILE</span>
                    <input type="file" onchange="showImage.call(this)" accept="image/jpeg">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" id="disabled" disabled>
                  </div>
                </div>
              </form>
              <a class="waves-effect btn brown" onclick="registerTo(1)">&nbsp;Back&nbsp;</a>
              <a class="waves-effect btn deep-orange accent-3" onclick="validateRegister(2,3)">&nbsp;Next&nbsp;</a>
              <br>
            </div>
          </div>
        </div>

        <!-- Register step 3 -->
        <div class="card primary hoverable white grey-text text-darken-2 register-step3" style="margin-top: 30px;">
          <div class="card-content">
            <div class="card secondary deep-orange white-text">
              <div class="card-content">
                <p>
                  Silahkan cek kembali identitas anda.
                </p>
              </div>
            </div>
            <div style="padding: 0 15px">
              <table class="striped">
                <tr>
                  <th class="center" id="lomba"></th>
                </tr>
              </table>
              <img id="preview-identitas" src="img/profile-user-default.png" width="200px;">
              <table>
                <tr>
                  <th>Nama Tim</th>
                  <td id="namatim"></td>
                </tr>
                <tr>
                  <th>Nama Ketua</th>
                  <td id="namaketua"></td>
                </tr>
                <tr>
                  <th>Email Ketua</th>
                  <td id="emailketua"></td>
                </tr>
                <tr>
                  <th>Telp. Ketua</th>
                  <td id="telpketua"></td>
                </tr>
                <tr>
                  <th>ID Line Ketua</th>
                  <td id="lineketua"></td>
                </tr>
                <tr>
                  <th>Gender Ketua</th>
                  <td id="genderketua"></td>
                </tr>
                <tr>
                  <th>Asal Sekolah</th>
                  <td id="asalsekolah"></td>
                </tr>
              </table>
            </div>
            <div class="row" style="margin: 30px 15px 20px 15px">
              <p align="left" style="margin-bottom: 30px;">
                <label>
                  <input type="checkbox" id="register-finishing" class="validate"/>
                  <span><a style="text-transform: none" class="deep-orange-text">Data yang saya isi adalah benar</a></span>
                </label>
              </p>
              <a class="waves-effect btn brown" onclick="registerTo(2)">&nbsp;Back&nbsp;</a>
              <a class="waves-effect btn deep-orange accent-3" onclick="validateRegister(3,4)">&nbsp;Submit&nbsp;</a>
              <br>
            </div>
          </div>
        </div>

      </div>

      <div class="col s12 m8 offset-m2 l6 offset-l3 center">
        <?php
          include("_include/footer.textonly.php");
        ?>
        <br>
      </div>

    </div>
  </div>
</body>

</html>

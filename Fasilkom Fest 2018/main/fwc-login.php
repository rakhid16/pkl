<!DOCTYPE HTML>
<html>

<head>
  <title>FWC | Login</title>
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
  <script src="js/styles.fwc.login.js"></script>
  <script src="js/sweet.min.js"></script>
  <?php
    include("_include/APIInclude.php");
  ?>
</head>

<body class="ff-card-model for-login webcon">
  <div class="container">
    <div class="row">
      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card primary hoverable white grey-text text-darken-2">
            <div class="card-content login-content">
              <a href="fwc"><img src="img/logo/logo-fwc.png"></a>
              <div class="card secondary deep-orange white-text">
                <div class="card-content">
                  <p>
                    Silahkan isi <b>FORM LOGIN</b> dibawah sesuai dengan data saat
                    <a class="white-text" href="fwc-register"><b><u>Registrasi</u></b></a>
                  </p>
                </div>
              </div>
              <div class="row" style="margin: 30px 6px 20px 6px">
                <form class="col s12" id="loginForm">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="login-email" type="email" class="validate" style="text-align: left">
                      <label for="login-email">Email</label>
                    </div>
                  </div>
                  <div class="row" style="margin-top: -20px">
                    <div class="input-field col s12">
                      <input id="login-password" type="password" class="validate" style="text-align: left">
                      <label for="login-password">Password</label>
                    </div>
                  </div>
                  <p align="left" style="margin-bottom: 30px;">
                    <label>
                      <input type="checkbox" id="login-robot-check" tabindex="-1" class="validate modal-trigger" href="#validateRobot"/>
                      <span><a style="text-transform: none" id="login-robot" class="modal-trigger deep-orange-text" href="#validateRobot">Saya bukan robot</a></span>
                    </label>
                  </p>
                  <a class="waves-effect btn deep-orange accent-3 loginFormSubmit">Masuk</a><br><br>
                  <a class="deep-orange-text" onclick="forgotPassword()">Lupa password?</a>
                </form>
              </div>
            </div>

          </div>
      </div>

      <div class="col s12 m8 offset-m2 l6 offset-l3 center">
        <?php
          include("_include/footer.textonly.php");
        ?>
      </div>

    </div>
  </div>

  <!-- Validate robot -->
  <div id="validateRobot" class="modal bottom-sheet">
    <div class="modal-content">
      <div class="row" style="margin: 0px 0px -30px 0px">
        <form class="col s12 m8 offset-m2 l6 offset-l3">
          <div class="row" style="margin: 10px 0px 0px 0px">
            <div class="col s12" style="margin-bottom: 12px;">
              <h6 style="font-family: 'Open Sans', sans-serif !important">Buktikan jika anda bukan robot</h6>
            </div>
            <div class="input-field col s8">
              <i class="fa fa-undo prefix grey-text text-darken-1 reload-robot-question"></i>
              <input disabled value="1 + 1" id="validate-robot-question" type="text" class="validate" style="text-align: left">
              <label for="validate-robot-question">Pertanyaan</label>
            </div>
            <div class="input-field col s4">
              <input id="validate-robot-answer" type="number" class="validate" style="text-align: left">
              <label for="validate-robot-answer">Jawaban</label>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row" style="margin: 0px 0px 5px 0px">
      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="modal-footer">
          <a class="modal-close waves-effect btn-flat submit-validate-robot">OKE</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

<!DOCTYPE HTML>
<html>

<head>
  <title>FPC 2018</title>
  <meta charset="utf-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
  <meta name="theme-color" content="#263238">
  <link href="img/logo/logo-fpc.png" rel="shortcut icon">
  <link rel="stylesheet" text="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" text="text/css" href="css/fonts.css">
  <link rel="stylesheet" text="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" text="text/css" href="css/animate.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
  <link rel="stylesheet" text="text/css" href="css/styles.css">
  <link rel="stylesheet" text="text/css" href="css/timeline-fpc.min.css">
  <link rel="stylesheet" text="text/css" href="css/sweet.min.css">
  <link rel="stylesheet" text="text/css" href="css/loader.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/loader.js"></script>
  <script src="js/timeline.min.js"></script>
  <script src="js/styles.fpc.js"></script>
  <script src="js/faq.js"></script>
  <script src="js/sweet.min.js"></script>
  <?php
    include("_include/APIInclude.php");
  ?>
</head>

<body>
  <div class="ff-row" id="body">
    <div class="col s12 ff-layout grey darken-4" id="home">
      <div class="ff-header">
        <!-- Navigation bar content -->
        <!-- Navigation bar for PC -->
        <nav class="ff-navbar grey darken-4 noselect">
          <a data-target="slide-out" class="ff-hamburger sidenav-trigger">
            <i class="fa fa-bars"></i> &nbsp;
            <font class="ff-navbar-tittle">FPC 2018</font>
          </a>
          <div class="nav-wrapper">
            <ul class="ff-navbar-tittle-pc hide-on-med-and-down">
              <li><a onclick="location.reload()"><i><img src="img/logo/logo-fpc.png"></i>FPC 2018</a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a onclick="scrollToElement('#home')">Home</a></li>
              <li><a onclick="scrollToElement('#timeline', true)">Timeline</a></li>
              <li><a onclick="scrollToElement('#about', true)">About</a></li>
              <li><a onclick="scrollToElement('#gift', true)">Prize</a></li>
              <li><a onclick="scrollToElement('#faq', true)">FAQ</a></li>
              <li><a onclick="scrollToElement('#contact', true)">Contact</a></li>
            </ul>
          </div>
        </nav>

        <!-- Navigation bar for Mobile -->
        <ul id="slide-out" class="sidenav noselect">
          <li><div class="user-view">
            <div class="background">
              <div class="ff-doodle grey darken-4"></div>
            </div>
            <a><img class="circle" src="img/logo/logo-fpc.png"></a>
            <a><span class="white-text name">FPC 2018</span></a>
            <a><span class="white-text email">UPN "Veteran" Jawa Timur</span></a>
          </div></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#home')">Home</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#timeline', true)">Timeline</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#about', true)">About</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#gift', true)">Prize</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#faq', true)">FAQ</a></li>
          <li><a class="waves-effect sidenav-close" onclick="scrollToElement('#contact', true)">Contact</a></li>
        </ul>

        <!-- Header content -->
        <div class="container white-text ff-header-content">
          <div class="row ff-row">
            <div class="col s12 l7 right noselect">
              <div class="ff-header-bg">
                <img src="img/header/header-fpc.png">
              </div>
            </div>
            <div class="col s10 offset-s1 l4 offset-l1">
              <p class="primary center">FPC 2018</p>
              <div class="tagline-event center">
                "Different Code, One GOAL"
              </div>
              <span class="ff-header-button">
                <div class="countdown">
                  <div class="row">
                    <div class="col s3">
                      <font id="days" class="value">00</font>
                      <font class="desc center">Hari</font>
                    </div>
                    <div class="col s3">
                      <font id="hours" class="value">00</font>
                      <font class="desc center">Jam</font>
                    </div>
                    <div class="col s3">
                      <font id="minutes" class="value">00</font>
                      <font class="desc center">Menit</font>
                    </div>
                    <div class="col s3">
                      <font id="seconds" class="value">00</font>
                      <font class="desc center">Detik</font>
                    </div>
                    <div class="col s12 ff-progress">
                      <div class="ff-progress-layout">
                        <div class="filler indigo">
                          <div class="percentage">100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <span class="ff-header-button center">
                  <a class="waves-effect btn white akademik" onclick="scrollToElement('#about',true)">SELENGKAPNYA</a>
                </span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 ff-layout secondary white" id="timeline">
      <div class="container" style="width: 100% !important">
        <div class="row ff-row">
          <div class="col s12 ff-event-tittle">
            TIMELINE
          </div>
        </div>
        <div class="row ff-row ff-timeline">
          <div class="col s12">
            <div class="timeline">
              <div class="timeline__wrap">
                <div class="timeline__items">
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>Tanggal</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                    </div>
                  </div>
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>Tanggal</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                    </div>
                  </div>
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>Tanggal</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                    </div>
                  </div>
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>Tanggal</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                    </div>
                  </div>
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2>Tanggal</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 ff-layout secondary indigo" id="about">
      <div class="container" style="width: 100% !important">
        <br>
        <div class="row ff-row">
          <div class="col s12 m3 ff-about-icon right">
            <div class="col s12 m8">
              <i class="fa fa-quote-left"></i>
            </div>
          </div>
          <div class="col s12 m8 offset-m1">
            <p class="ff-about-desc">
              <b>FPC</b> atau <b>Fasilkom Programming Contest</b> merupakan sebuah kompetisi
              yang menguji kemampuan berfikir logika serta kemampuan algoritma dan pemograman
              dalam memecahkan masalah yang diberikan. <b>Fasilkom Programming Contest</b> ditujukan
              bagi mahasiswa FASILKOM UPN "VETERAN" JATIM yang suka dengan pemograman dan memiliki
              <i>passion</i> dalam dunia pemograman.
            </p>
          </div>
        </div>
        <br>
      </div>
    </div>

    <div class="col s12 ff-layout secondary white" id="gift">
      <div class="container" style="width: 78% !important">
        <div class="row ff-row">
          <div class="col s12 ff-event-tittle" style="font-size: 25px">
            HADIAH PEMENANG
          </div>
        </div>
        <div class="row ff-row" style="margin: 60px 0px 0px 0px !important">
          <div class="col l4 s12">
            <div class="ff-gift red">
              <a class="fa fa-trophy"></a>
              <p class="primary">Juara 1</p>
              <div class="gift-list">
                <ul>
                  <li>Rp 2.000.000</li>
                  <li>Sertifikat</li>
                  <li>Tropi</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
          <div class="col l4 s12 center">
            <div class="ff-gift deep-purple">
              <a class="fa fa-trophy"></a>
              <p class="primary">Juara 2</p>
              <div class="gift-list">
                <ul>
                  <li>Rp 1.500.000</li>
                  <li>Sertifikat</li>
                  <li>Tropi</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
          <div class="col l4 s12 center">
            <div class="ff-gift teal">
              <a class="fa fa-trophy"></a>
              <p class="primary">Juara 3</p>
              <div class="gift-list">
                <ul>
                  <li>Rp 1.000.000</li>
                  <li>Sertifikat</li>
                  <li>Tropi</li>
                </ul>
              </div>
            </div>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 ff-layout secondary indigo" id="faq">
      <div class="container">
        <div class="row ff-row">
          <div class="col s12 ff-event-tittle white-text">
            FREQUENTLY ASKED QUESTION
          </div>
        </div>
        <br>
        <div class="row ff-row">
          <div class="col s12" id="faq-content">
          </div>
        </div>
        <br><br>
      </div>
    </div>

    <div class="col s12 ff-layout secondary grey darken-4" id="contact">
      <?php
        include("_include/contact.php");
      ?>
    </div>

    <div class="col s12 ff-layout secondary grey darken-5" id="footer">
      <?php
        include("_include/footer.php");
      ?>
    </div>

  </div>

  <?php
    include("_include/loader.php");
  ?>

</body>

</html>

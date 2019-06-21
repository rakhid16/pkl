<!DOCTYPE HTML>
<html>

<head>
  <title>FWC | Dashboard</title>
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
  <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
  <link rel="stylesheet" text="text/css" href="css/styles.css">
  <link rel="stylesheet" text="text/css" href="css/styles.dashboard.css">
  <link rel="stylesheet" text="text/css" href="css/sweet.min.css">
  <link rel="stylesheet" text="text/css" href="css/loader.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/loader.js"></script>
  <script src="js/counterUp.js"></script>
  <script src="js/styles.fwc.dashboard.js"></script>
  <script src="api/dashboard.js"></script>
  <script src="js/photo_uploader.dashboard.js"></script>
  <script src="js/sweet.min.js"></script>
  <?php
    include("_include/APIInclude.php");
  ?>
</head>

<body class="dashboard-web">
  <div class="ff-row" id="body">
    <div class="col s12 ff-layout">
      <div class="ff-header">
        <!-- Navigation bar content -->
        <!-- Navigation bar for PC -->

        <!-- Dropdown for informasi -->
        <ul id="dropdown-info" class="dropdown-content">
          <li><a onclick="changeContent('info-lomba')">Lomba</a></li>
          <li><a onclick="changeContent('info-tim')">Tim</a></li>
        </ul>

        <!-- Dropdown for kelengkapan data -->
        <ul id="dropdown-data" class="dropdown-content">
          <li><a onclick="changeContent('data-pembayaran')">Pembayaran</a></li>
          <li><a onclick="changeContent('data-anggota')">Anggota</a></li>
        </ul>

        <!-- Dropdown for akun -->
        <ul id="dropdown-akun" class="dropdown-content">
          <li><a onclick="logout()">Logout</a></li>
          <li class="divider"></li>
          <li><a onclick="changeContent('akun-gantiPass')">Ganti Password</a></li>
        </ul>

        <a id="menu" data-target="slide-out" class="btn-floating hoverable btn-large waves-effect waves-light deep-orange sidenav-trigger">
          <i class="fa fa-bars"></i>
        </a>

        <!-- Navigation bar for Mobile -->
        <ul id="slide-out" class="sidenav noselect">
          <li><div class="user-view">
            <div class="background">
              <div class="ff-doodle brown darken-3"></div>
            </div>
            <a><img class="circle" src="img/logo/logo-fwc.png"></a>
            <a><span class="white-text name" id="sidenav-show-name"></span></a>
            <a><span class="white-text email" id="sidenav-show-email"></span></a>
          </div></li>
          <li><a class="subheader">Informasi</a></li>
          <li><a class="sidenav-close" onclick="changeContent('info-lomba')">Lomba</a></li>
          <li><a class="sidenav-close" onclick="changeContent('info-tim')">Tim</a></li>
          <li><div class="divider"></dvi></li>
          <li><a class="subheader">Kelengkapan Data</a></li>
          <li><a class="sidenav-close" onclick="changeContent('data-pembayaran')">Pembayaran</a></li>
          <li><a class="sidenav-close" onclick="changeContent('data-anggota')">Data Anggota</a></li>
          <li><div class="divider"></div></li>
          <li><a class="subheader">Pengaturan Akun</a></li>
          <li><a onclick="logout()"><i class="fa fa-sign-out"></i>Logout</a></li>
          <li><a class="sidenav-close" onclick="changeContent('akun-gantiPass')"><i class="fa fa-key"></i>Ganti Password</a></li>
        </ul>

        <div class="ff-row row">
          <!-- Left menu -->
          <div class="dashboard-left-menu col s12 l4 brown darken-3 hoverable">
            <div class="dashboard-hi center">
              <a href="fwc-dashboard"><img src="img/dashboard/dashboard-fwc.png" class="logo"></a>
              <div class="secondary">
                Selamat datang <font id="show-namatim"></font>
              </div>
              <!-- Dropdown trigger -->
              <div><a class="dropdown-trigger btn waves-effect deep-orange" data-target="drop-info"><i class="fa fa-info"></i> &nbsp; Informasi</a></div>
              <div><a class="dropdown-trigger btn waves-effect deep-orange" data-target="drop-data"><i class="fa fa-check"></i> &nbsp; Kelengkapan Data</a></div>
              <!-- <div><a class="btn waves-effect deep-purple darken-1" onclick="changeContent('penyisihan-cso')"><i class="fa fa-hourglass-start"></i> &nbsp; Penyisihan</a></div> -->
              <div><a class="dropdown-trigger btn waves-effect deep-orange" data-target="drop-akun"><i class="fa fa-user"></i> &nbsp; Pengaturan Akun</a></div>
              <!-- Dropdown content -->
              <ul id="drop-info" class="dropdown-content">
                <li><a onclick="changeContent('info-lomba')">Lomba</a></li>
                <li><a onclick="changeContent('info-tim')">Tim</a></li>
              </ul>
              <ul id="drop-data" class="dropdown-content">
                <li><a onclick="changeContent('data-pembayaran')">Pembayaran</a></li>
                <li><a onclick="changeContent('data-anggota')">Data Anggota</a></li>
              </ul>
              <ul id="drop-akun" class="dropdown-content">
                <li><a onclick="logout()"><i class="fa fa-sign-out"></i>Logout</a></li>
                <li><a onclick="changeContent('akun-gantiPass')"><i class="fa fa-key"></i>Ganti Password</a></li>
              </ul>
            </div>
          </div>

          <!-- Dashboard content -->
          <div class="dashboard-right-content fwc col s12 l8 right">
            <div class="dashboard-margin">

              <div class="dashboard-content col m8 s12 offset-m2" id="info-lomba">
                <div class="row ff-row">
                  <div class="col s12">
                    <div class="card yellow grey-text text-darken-2 hoverable">
                      <div class="card-content">
                        <h5 class="content-title">
                          <i class="fa fa-hourglass-start"></i>&nbsp; &nbsp;COUNTDOWN
                        </h5>
                        <div class="countdown" style="padding: 18px 0">
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
                          </div>
                          <br>
                          <div class="card white" style="margin: 0px">
                            <div class="card-content" style="padding: 8px 10px 10px 10px;">
                              <div class="row ff-row grey-text text-darken-2">
                                <div class="col m1 s2 center">
                                  <b><h6 style="line-height: 25px"><i class="fa fa-hourglass-end fa-spin"></i></h6></b>
                                </div>
                                <div class="col m11 s10">
                                  <h6 style="line-height: 25px"><b><font>12 NOVEMBER 2018 | 06:00</font></b></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ff-row">
                  <div class="col s6">
                    <div class="card indigo white-text hoverable">
                      <div class="card-content">
                        <div class="team-count team center">
                          <i class="fa fa-users"></i>
                          <span class="value counter" id="team-value">0</span>&nbsp;TEAM
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col s6">
                    <div class="card pink white-text hoverable">
                      <div class="card-content">
                        <div class="team-count peserta center">
                          <i class="fa fa-user"></i>
                          <span class="value counter" id="peserta-value">0</span>&nbsp;PESERTA
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ff-row">
                  <div class="col s12">
                    <div class="card brown darken-3 white-text hoverable">
                      <div class="card-content">
                        <h5 class="content-title">
                          <i class="fa fa-question-circle"></i>&nbsp; &nbsp;POSTER
                        </h5>
                        <br>
                        <div class="card deep-orange white-text" style="margin: 0px">
                          <div class="card-content" style="padding: 8px 5px 10px 5px;">
                            <div class="row ff-row">
                              <div class="col s12 center">
                                <h6 style="line-height: 25px"><font>POSTER FWC</font></h6>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <img src="img/poster/poster-fwc.png" style="width: 100%" class="materialboxed" id="poster-value">
                        <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content" id="info-tim">
                <div class="row ff-row">
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card hoverable">
                      <div class="card-content">
                        <h5 class="content-title grey-text text-darken-2">
                          <i class="fa fa-list-ul"></i>&nbsp; &nbsp;STATUS TIM
                        </h5>
                        <div id="status-tim">
                          <br>
                          <p>Kategori Lomba :
                            <font id="info-show-onoff" class="deep-orange-text"></font>
                          </p>
                          <div class="card secondary white-text" id="check-data-anggota">
                            <div class="card-content row ff-row">
                              <div class="col m2 s3 center">
                                <i class="fa fa-3x"></i>
                              </div>
                              <div class="col m10 s9">
                                <p style="font-size: 20px">DATA ANGGOTA</p>
                                <p style="font-size: 14px" id="desc"></p>
                              </div>
                            </div>
                          </div>
                          <div class="card secondary white-text" id="check-pembayaran">
                            <div class="card-content row ff-row">
                              <div class="col m2 s3 center">
                                <i class="fa fa-3x"></i>
                              </div>
                              <div class="col m10 s9">
                                <p style="font-size: 20px">PEMBAYARAN</p>
                                <p style="font-size: 14px" id="desc"></p>
                              </div>
                            </div>
                          </div>
                          <br>
                          <font class="deep-orange-text" id="check-siap-lomba">
                          </font>
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card hoverable">
                      <div class="card-content">
                        <h5 class="content-title grey-text text-darken-2">
                          <i class="fa fa-users"></i>&nbsp; &nbsp;INFORMASI TIM
                        </h5>
                        <div class="card secondary deep-orange white-text">
                          <div class="card-content">
                            <p class="center" style="font-size: 20px;">
                              <font id="info-show-namatim" style="text-transform: uppercase">VETERAN</font>
                            </p>
                          </div>
                        </div>
                        <table class="striped grey-text text-darken-2">
                          <tr>
                            <th class="center">DATA KETUA</th>
                          </tr>
                        </table>
                        <table class="grey-text text-darken-2">
                          <tr>
                            <th>Nama</th>
                            <td id="info-show-ketua-nama"></td>
                          </tr>
                          <tr>
                            <th>Sekolah</th>
                            <td id="info-show-ketua-sekolah"></td>
                          </tr>
                          <tr>
                            <th>Email</th>
                            <td id="info-show-ketua-email"></td>
                          </tr>
                          <tr>
                            <th>Telepon</th>
                            <td id="info-show-ketua-telp"></td>
                          </tr>
                          <tr>
                            <th>ID Line</th>
                            <td id="info-show-ketua-line"></td>
                          </tr>
                          <tr>
                            <th>Gender</th>
                            <td id="info-show-ketua-gender"></td>
                          </tr>
                        </table>
                        <br>
                        <div id="info-show-anggota" class="grey-text text-darken-2">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content" id="data-pembayaran">
                <div class="row ff-row">
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card hoverable">
                      <div class="card-content">
                        <h5 class="content-title grey-text text-darken-2">
                          <i class="fa fa-money"></i>&nbsp; &nbsp;UPLOAD BUKTI PEMBAYARAN
                        </h5>
                        <div class="card secondary deep-orange white-text">
                          <div class="card-content">
                            <p>Silahkan melakukan pembayaran biaya lomba, kemudian
                              upload bukti pembayaran ke form dibawah ini.
                              Untuk pembayaran biaya lomba, silahkan transfer ke:</p>
                            <table>
                              <tr>
                                <td style="width: 25%">Bank</td>
                                <td>:</td>
                                <td>Mandiri</td>
                              </tr>
                              <tr>
                                <td style="width: 25%">No. Rekening</td>
                                <td>:</td>
                                <td>1234567890</td>
                              </tr>
                              <tr>
                                <td style="width: 25%">Atas Nama</td>
                                <td>:</td>
                                <td>FASILKOM FEST UPN</td>
                              </tr>
                              <tr>
                                <td style="width: 25%">Jumlah</td>
                                <td>:</td>
                                <td><b>Rp <font id="show-bayar"></font></b> <br>(Mohon melakukan pembayaran sesuai dengan nominal yang tertera untuk mempercepat proses verifikasi)</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <form id="upload-pembayaran" style="margin-top: 30px;" class="grey-text text-darken-2">
                          <p>Ketentuan file:</p>
                          <p> - Format file diunggah dalam ekstensi <font class="deep-orange-text">*.jpg / *.jpeg</font></p>
                          <p> - Ukuran file maksimum <font class="deep-orange-text">1 MB</font></p>
                          <p> - Bukti pembayaran dapat dibaca dengan jelas</p>
                          <div class="file-field input-field">
                            <img src="img/drag/drag-photo-fwc.png" id="image-preview-bayar" class="file-field input-field" accept="image/*">
                            <br><br>
                            <div class="btn deep-orange">
                              <span>FILE</span>
                              <input type="file" onchange="showImageBayar.call(this)" accept="image/jpeg">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text" id="disabled" disabled>
                            </div>
                          </div>
                          <br>
                          <div class="input-field">
                            <textarea id="note-bayar" class="materialize-textarea"></textarea>
                            <label for="note-bayar">Keterangan</label>
                            <font class="deep-orange-text text-lighten-2" style="font-size: 12px">*masukkan keterangan pembayaran disini (opsional)</font>
                          </div>
                          <br>
                          <a class="waves-effect btn deep-orange" onclick="uploadPembayaran()">&nbsp;SUBMIT&nbsp;</a>
                        </form>
                        <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content" id="data-anggota">
                <div class="row ff-row">
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card hoverable">
                      <div class="card-content">
                        <h5 class="content-title grey-text text-darken-2">
                          <i class="fa fa-users"></i>&nbsp; &nbsp;DATA ANGGOTA
                        </h5>
                        <form id="input-anggota" style="margin-top: 30px;">
                          <div class="row">
                            <div class="input-field col s12">
                              <select id="banyak-anggota" class="validate" required="required" onchange="innerInputAnggota()">
                                <option value="0" disabled selected>Tambah Anggota</option>
                                <option value="2">Tambah 1 Anggota</option>
                              </select>
                            </div>
                          </div>
                          <div id="inner-anggota">
                            <!-- Tempat input anggota sebanyak n -->
                          </div>
                          <div id="inner-button">
                            <!-- Tempat submit button anggota -->
                          </div>
                        </form>
                        <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content" id="data-anggota-view">
                <div class="row ff-row">
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card hoverable">
                      <div class="card-content">
                        <h5 class="content-title grey-text text-darken-2">
                          <i class="fa fa-users"></i>&nbsp; &nbsp;DATA TIM
                        </h5>
                        <div class="card secondary deep-orange white-text">
                          <div class="card-content">
                            <p>
                              Silahkan cek kembali data tim anda. Anda hanya dapat
                              menginputkan data anggota sebanyak sekali, jadi pastikan
                              anggota tim anda sudah benar.
                            </p>
                          </div>
                        </div>
                        <br>
                        <table class="striped grey-text text-darken-2">
                          <tr>
                            <th class="center" id="show-lomba" style="text-transform: uppercase"></th>
                          </tr>
                        </table>
                        <br>
                        <table class="grey-text text-darken-2" id="check-data-tim">
                        </table>
                        <br><br>
                        <a class="waves-effect btn brown darken-3 animated zoomIn" onclick="changeContent('data-anggota');">&nbsp;BACK&nbsp;</a>
                        <a class="waves-effect btn deep-orange animated zoomIn" onclick="dataAnggota()">&nbsp;SUBMIT&nbsp;</a>
                        <br><br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content" id="data-anggota-lengkap">
                <div class="row ff-row">
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card hoverable deep-orange white-text">
                      <div class="card-content">
                        <h5 class="content-title">
                          <i class="fa fa-users"></i>&nbsp; &nbsp;DATA TIM
                        </h5>
                        <br>
                        <div style="font-size: 16px !important">
                          Konten yang anda minta tidak dapat ditampilkan. Kenapa hal ini bisa terjadi?<br>
                          <table>
                            <tr>
                              <th style="width: 10%" class="center">1</th>
                              <td>Konfirmasi data anggota anda masih dalam proses pengecekan oleh Admin.</td>
                            </tr>
                            <tr>
                              <th style="width: 10%" class="center">2</th>
                              <td>Konfirmasi data anggota anda sudah diperiksa dan dikunci oleh Admin.</td>
                            </tr>
                            <tr>
                              <th style="width: 10%" class="center">3</th>
                              <td>Anda tidak dapat menambah anggota lagi.</td>
                            </tr>
                          </table>
                          <br>
                          Silahkan hubungi &nbsp;&nbsp;<font class="btn brown darken-3 waves-effect waves-light modal-trigger" href="#admin-contact">Admin</font>&nbsp;&nbsp; jika terjadi kesalahan
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content" id="data-pembayaran-lengkap">
                <div class="row ff-row">
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card hoverable deep-orange white-text">
                      <div class="card-content">
                        <h5 class="content-title">
                          <i class="fa fa-money"></i>&nbsp; &nbsp;UPLOAD BUKTI PEMBAYARAN
                        </h5>
                        <br>
                        <div style="font-size: 16px;">
                          Konten yang anda minta tidak dapat ditampilkan. Kenapa hal ini bisa terjadi?<br>
                          <table>
                            <tr>
                              <th style="width: 10%" class="center">1</th>
                              <td>Konfirmasi pembayaran anda masih dalam proses pengecekan oleh Admin.</td>
                            </tr>
                            <tr>
                              <th style="width: 10%" class="center">2</th>
                              <td>Konfirmasi pembayaran anda sudah berhasil.</td>
                            </tr>
                          </table>
                          <br>
                          Silahkan hubungi &nbsp;&nbsp;<font class="btn brown darken-3 waves-effect waves-light modal-trigger" href="#admin-contact">Admin</font>&nbsp;&nbsp; jika terjadi kesalahan
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content" id="akun-gantiPass">
                <div class="row ff-row">
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card hoverable">
                      <div class="card-content">
                        <h5 class="content-title grey-text text-darken-2">
                          <i class="fa fa-key"></i>&nbsp; &nbsp;GANTI PASSWORD
                        </h5>
                        <form id="ganti-password" style="margin-top: 30px;">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="password" type="password" class="validate" style="text-align: left">
                              <label for="password">Password Lama</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="password-new" type="password" class="validate" style="text-align: left">
                              <label for="password-new">Password Baru</label>
                              <font class="deep-orange-text text-lighten-2" style="font-size: 12px">*password minimal terdiri dari 8 digit</font>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="password-new-confirm" type="password" class="validate" style="text-align: left">
                              <label for="password-new-confirm">Konfirmasi Password Baru</label>
                            </div>
                          </div>
                          <p align="left" style="margin-bottom: 30px;">
                            <label>
                              <input type="checkbox" id="check-gantiPass" class="validate"/>
                              <span><a style="text-transform: none" class="deep-orange-text">Ganti password</a></span>
                            </label>
                          </p>
                          <a class="waves-effect btn brown darken-3" onclick="clearForm('#ganti-password')">&nbsp;BATAL&nbsp;</a>
                          <a class="waves-effect btn deep-orange" onclick="gantiPass()">&nbsp;SUBMIT&nbsp;</a>
                        </form>
                        <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content" id="penyisihan-fwc">
                <div class="row ff-row">
                  <div class="col l8 m8 s12 offset-l2 offset-m2">
                    <div class="card green white-text">
                      <div class="card-content">
                        Penyisihan FWC
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php
    include("_include/admin.contact.php");
  ?>

  <?php
    include("_include/loader.php");
  ?>
</body>

</html>

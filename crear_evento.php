<?php
require_once("control/controlSessionAdmin.php");
include 'config/config.php';
$myusername=$_SESSION["user_signin"];
$tipoUsuario=$_SESSION["rol"];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="dist/img/logo.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image-715x657.png" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image-715x657.png" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Admin</p>
                  <p class="font-weight-light text-muted mb-0">Administrador</p>
                </div>
                <a class="dropdown-item" href="logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image-715x657.png" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <p class="designation">Administrador</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Admin</li>
            <li class="nav-item">
              <a class="nav-link" href="crear_evento.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title" >Crear evento</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="eventos.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title" >Eventos</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                      <!-- <li><a href="#">ICE Market data</a></li>
                      <li><a href="#">Own analysis</a></li>
                      <li><a href="#">Historic market data</a></li> -->
                    </ul>
                    <ul class="quick-links ml-auto">
                      <!-- <li><a href="#">Settings</a></li>
                      <li><a href="#">Analytics</a></li>
                      <li><a href="#">Watchlist</a></li> -->
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                    <!-- <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button> -->
                    <!-- <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button> -->
                    <!-- <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button> -->
                  </div>
                  <div class="filter-wrapper">
                    <!-- <div class="dropdown toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Last Day</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                    </div> -->
                    <!-- <a href="#" class="advanced-link toolbar-item">Advanced Options</a> -->
                  </div>
                  <div class="sort-wrapper">
                    <!-- <button type="button" class="btn btn-primary toolbar-item">New</button>
                    <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownexport">
                        <a class="dropdown-item" href="#">Export as PDF</a>
                        <a class="dropdown-item" href="#">Export as DOCX</a>
                        <a class="dropdown-item" href="#">Export as CDR</a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page Title Header Ends-->
            <div class="container" class="">
                <div>
                <form action="crear_evento_ok.php" method="post">
                    <h3>Crear evento</h3>
                    <div class="form-group">
                        <label>Banner (1378x768)</label>
                        <input type="text" class="form-control"  placeholder="Introduzca la ruta de la fotografia" name="fotoEvento" id="fotoEvento" required >
                    </div>

                    <div class="form-group">
                        <label>Nombre del evento</label>
                        <input type="text" class="form-control" name="nombreEvento" id="nombreEvento" required maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Fecha</label>
                        <br>
                        <input type="date" class="form-control"  id="fechaEvento" name="fechaEvento" required >
                    </div>

                    <div class="form-group">
                        <label>Edad del evento</label>
                        <input type="number" class="form-control" name="edadEvento" id="edadEvento" required maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" class="form-control" name="precioEvento" id="precioEvento" required maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Artista</label>
                        <input type="text" class="form-control" name="artistaEvento" id="artistaEvento" required/>
                    </div>

                    <div class="form-group">
                        <label for="animacionEvento">Animación :</label>
                            <select id="animacionEvento"  class="form-control" name="animacionEvento" required>
                                <option value="vacaPantera">Vaca/Pantera</option>
                                <option value="tematico">Animadores temáticos</option>
                                <option value="bailarinas">Bailarinas</option>
                            </select>                    
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-dark btn-lg btn-block">Registrar evento</button>
                </form>
                <br>
                <br>
                <br>
                <br>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright m 2021</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>

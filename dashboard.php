<?php
require_once("control/controlSessionAdmin.php");
$myusername=$_SESSION["username"];
include 'config/config.php';


header("Content-Type: text/html;charset=utf-8");


?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bienvenido/a! <?php echo $myusername?></title>


	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
          <img src="https://midnight.es/wp-content/uploads/2019/02/midnight-group-blanc.png" width="80">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider  my-0">

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        PRODUCTOS
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Inventario</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="inventario.php">Ver Invenatario</a>
            <a class="collapse-item" href="nuevoProducto.php">Nuevo Producto</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider  my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-tasks fa-cog"></i>
          <span>CheckList</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="checklist.php">Ver Checklist</a>
            <a class="collapse-item" href="nuevaTarea.php">Nueva Tarea</a>
          </div>
        </div>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Opcion</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opcion</h6>
            <a class="collapse-item" href="utilities-color.html">Opcion</a>
            <a class="collapse-item" href="utilities-border.html">Opcion</a>
            <a class="collapse-item" href="utilities-animation.html">Opcion</a>
            <a class="collapse-item" href="utilities-other.html">Opcion</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
      Opcion
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Opcion</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opcion</h6>
            <a class="collapse-item" href="login.html">Opcion</a>
            <a class="collapse-item" href="register.html">Opcion</a>
            <a class="collapse-item" href="forgot-password.html">Opcion</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Opcion</h6>
            <a class="collapse-item" href="404.html">Opcion</a>
            <a class="collapse-item" href="blank.html">Opcion</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Opcion</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Opcion</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $myusername?></span>
                <img class="img-profile rounded-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXx8PCqqqn08/Onp6bPz86trazb2tru7e3V1NS1tLSxsLDl5OTr6urCwsHi4eG9vLzIx8eJCJq4AAAFBElEQVR4nO2d2bajIBBFpZxn//9rW2K6r7czqHAMB1P7MU/ZC6iCAiFJFEVRFEVRFEVRFEVRFEVRFEVRFCU+5IfQfwXPLNUNRVVllqoqhu5SmrNMkY11kxuTWozJm3rMiotIStJV4+L1C/vTWHVJ7JKSFFPzv9zKspmKqB3n3jnmL/0WyXws4u2s5VA/dM5nDVkPZei/6oS006bdX6Y2wmaU4vX4e2zHpohNUbp+v9/Nse+icpS2PiY4K9Yx9VQZDgtaxSEaRanMccFZ0VSRKErhoLcQR7yZg6izYRQhVYbcWXCekkcwFrsDafCRtOlCC2xyMA8+KPahBbbI/ARnxSy0wlv8BuEC91AUh0z/0Ig1saF499GbYsar2LpnwjVNG1rkJZAmZA42rX+YWchJGxEzCi2sI1FQTTg3IqWhFKgmnBuRcgYuI9BwZDQEpYoFxoQxL+yRMC73J1wnnbvpFFrnkW4EChoz8q0TW6igMXQDEZkrLHz5AjehuRvSTWuQ2fBmSJcRpYYKGkO3DhZkvrc0dIZgQWPoDLHDcB6Iavhp1FAN1TA8X5AtcGWoBbpi1BfM2rAL4HkJzGd4+bUFtExjCzV0htdfAV++ipG0YEO6ShRua22BcIOtwybEmq9eWkLTRToSHoy+fFUfmy74koVNF8hQk/Mliy/YP0xKZDCtCQNNIp6nEtekPWEnTaQCGjJuAc85H2jIl+8tlz9PAxyInMMQuYAiXDotdKiMSHucvQR107RnzIYW2KEhzlxhuf4Z4QSyRkzH0BqvwUxrSCc0C5j9GWJBSNJnTfd3BkATDqEl3uKfEnmT4QIgJTLHGYt32ZSwUPob34RBnSru+K0S89B/fxu/uiljnfQBr5FIPwpv+ITTKvSf34VH4ZSyTPqIDK4jMaX+BHiF67kMvvMXL3H8ojvnnpH+InMypP049gmdQz9NCT8Eeo1LsIkmzCwcn9lEMZtZc/TgAuXRhPccrCwyVxBfIMcKGnENwgU5kjJiG4R3dp+wYTw9s4+954aJi9wbXN5w91o4jnXvE4a9CaOJaMq95sDde6y72ltcPpYemNVEOKNJjk2+o5t23yh3+1mim3cfXVxEuLQ4XMiIqYRhcdhli2BLZo3D5gXvLW1PKPffVb5mimUsivPeTB3Fnd7SZU43QVtSk0XgWHidi0rHIrTAe6TtN1572FTMe9672aUc+h2vPWw6pv1QMkpKWfTOA/A/R9MXdI4i2dZrJIcc8zFjernEdk9Q860kDU1nlda+BQT2uzmmYxU+6oi0UwNvv3+OppnakL1VyrZqTmm+lWTaVG2g3mqDJzC4vJHMg4RWSbL6I36LY5199uErUG4/JPnJeYDtnh/2uzt+prOKFPVpwXPD0dTnv2A2t5/XCx3eks3Z7ei3NoI4nrm+kuQz6WFDMe/PiqtlReBnSfPqjIqOdH1osxUnvNImbfARuCYd0XNyx4fGzgP+hJn7Q2PngYyp2Fs9UABvB/F4Ku5cYIodYwtactQZDuCVHlhQT5hhn3XAAvk+A3yJFxbEWSPkpSx4EJ+6wa9exQK4BcX5A5jPkHofGEPf2onG/xZQ6P1WZ+D9MRj0jrIz8D0wxjkjXeM7OwW/4nQGnvkCfXkuHt9Df2oYHjVUQzUMjxqq4RcYshYSf/AtKUpmUmYA32ZKkTGDKAoLN/6CiqIoiqIoiqIoiqIoiqIoiqIoirKTP9B9T5hC65cQAAAAAElFTkSuQmCC">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
          </div>
          <div class="container botones">

          <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Productos Registrados</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                  
                  $query = $mysqli -> query ("Select count(*) FROM productos");
                  while ($valores = mysqli_fetch_array($query)) {
                    echo $valores[0] ;
                  }
                ?>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-box-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Productos Disponibles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                  
                  $query = $mysqli -> query ("SELECT COUNT(*) FROM productos WHERE disponibilidadProducto ='si'");
                  while ($valores = mysqli_fetch_array($query)) {
                    echo $valores[0] ;
                  }
                ?>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-box-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              <br>
                 <a href="inventario.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-eye"></i>
                    </span>
                    <span class="text">Ver Inventario</span>
                  </a>
                  <br>
                  <a href="nuevoProducto.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-cash-register"></i>
                    </span>
                    <span class="text">Registrar Producto</span>
                  </a> 
                  <br>
                  <a href="nuevaTarea.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus-square"></i>
                    </span>
                    <span class="text">Generar Tareas</span>
                  </a>




          
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Midnight 2020</span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro de que quieres cerrar sesión?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="/logout.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <!-- <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script> 
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

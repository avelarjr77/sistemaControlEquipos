<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Equipos Reservados | Sistema control UCAD</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Iconos-->
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" rel="stylesheet">
    <link href="css/iconos.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php 
        include("models/conex.php");
        $con=conectar();

        $sql="SELECT 
        idReservaEquipo,
        idEquipo,
        fechaReserva,
        usuario.nombres Usuario
        FROM reservaequipo
        INNER JOIN usuario
        On reservaequipo.idUsuario = usuario.idUsuario
        order by idReservaEquipo asc";
        $query=mysqli_query($con, $sql);

    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-0 row"><br>
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 7rem" src="img/log1.svg" alt="...">
                    
                </div>
                <div class="sidebar-brand-text ">Sistema Control</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Inicio
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users fa-cog"></i>
                    <span>Departamentos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Departamentos</h6>
                        <a class="collapse-item" href="cc1.php">CC I</a>
                        <a class="collapse-item" href="cc2.php">CC II</a>
                        <a class="collapse-item" href="academica.php">Académica</a>
                        <a class="collapse-item" href="colecturia.php">Colecturía</a>
                    </div>
                </div>
            </li>

            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Control
            </div>

            

            <!-- Nav Agregar Equipos - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="agregarEquipos.php">
                    <i class="fas fa-plus "></i>
                    <span>Agregar Equipos</span></a>
            </li>

            <!-- Nav Equipos - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="equipos.php">
                    <i class="fas fa-desktop fa-chart-area"></i>
                    <span>Equipos</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gestión
            </div>
            

            <!-- Nav Equipos reservados - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="reservados.php">
                    <i class="fas fa-hdd "></i>
                    <span>Reservar Equipo</span></a>
            </li>
            

            <!-- Nav Equipos prestados - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="prestamoEquipo.php">
                    <i class="fas fa-suitcase "></i>
                    <span>Prestamos Equipo</span></a>
            </li>

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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/user.jpg">
                            </a>
                            

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                     <h1 class="h3 mb-0 text-gray-800">¡Bienvenido!</h1>
                                           
                         <a href="index.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                         class="fas fa-home fa-sm text-white-50"></i> Regresar a Inicio</a> 
                 </div>
 
                    <!-- Content Row -->
                    <div class="row">
                        
                        <!-- Cards Etiquetas -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Departamentos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    
                                                    $q2="SELECT count(idDepartamento) AS total from departamento";
                                                    $query2=mysqli_query($con, $q2);
                                                    $values=mysqli_fetch_assoc($query2);
                                                    $num=$values['total'];
                                                    echo $num;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Cards Etiquetas -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Equipos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    
                                                    $q2="SELECT count(idEquipo) AS total from equipo";
                                                    $query2=mysqli_query($con, $q2);
                                                    $values=mysqli_fetch_assoc($query2);
                                                    $num=$values['total'];
                                                    echo $num;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-desktop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cards Etiquetas -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Equipos Reservados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    
                                                    $q2="SELECT count(idReservaEquipo) AS total from reservaequipo";
                                                    $query2=mysqli_query($con, $q2);
                                                    $values=mysqli_fetch_assoc($query2);
                                                    $num=$values['total'];
                                                    echo $num;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hdd fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cards Etiquetas -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Prestamos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    
                                                    $q2="SELECT count(idPrestamoEquipo) AS total from prestamoequipo";
                                                    $query2=mysqli_query($con, $q2);
                                                    $values=mysqli_fetch_assoc($query2);
                                                    $num=$values['total'];
                                                    echo $num;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-suitcase fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                     
                    <!-- Content Row -->
                     <div class="row">
                         <main class="content">
                                                
                               <!-- Begin Page Content -->
                     <div class="container-fluid">
 
                     <!-- Page Heading -->
                     <h1 class="h3 mb-2 text-gray-800">Equipos reservados</h1>
                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                         For more information about DataTables, please visit the <a target="_blank"
                             href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- Formulario | Reservar Equipos -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-2">
                            <h6 class="m-0 font-weight-bold text-primary">Reservar Equipos</h6>
                        </div><br>

                        <div class="card-body">
                            <div class="table-responsive container">
                                <form action="models/reservar.php" method="POST" name="frm" id="frm" autocomplete="off" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Id Equipo</label>
                                                <input name="idEquipo" type="text" class="form-control" id="idEquipo" placeholder="Id equipo">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Fecha de Reserva</label>
                                                    <input name="fechaReserva" type="date" class="form-control" id="fechaReserva" placeholder="Fecha">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Id Usuario</label>
                                                <input name="idUsuario" type="text" class="form-control" id="idUsuario" placeholder="idUsuario">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">      
                                            <div class="form-group">

                                                <button type="submit" class="btn btn-outline-success btn-block mt-4" id="btn_operacion">Reservar</button>
                                            </div>                                           
                                        </div>
                                    </div>        
        
                                </form>
                            </div>
                        </div>
                    </div>
 
                     <!-- Formulario | Ver Equipos -->
                     <div class="card shadow mb-4">
                         <div class="card-header py-2">
                             <h6 class="m-0 font-weight-bold text-primary">Equipos</h6>
                         </div><br>
                         
                         <div class="card-body">
                             <div class="table">
                                 <table class="table" id="dataTable" width="100%" >
                                     <div class="container">
                                         <thead>
                                             <tr>
                                                 
                                                 <th>Equipo</th>
                                                 <th>Fecha Reserva</th>
                                                 <th>Usuario</th>                                                 
                                                 <th>Acciones</th>  
                                             </tr>
                                         </thead>
                                         
                                         <tbody>
                                             <?php
                                                while ($filas=mysqli_fetch_array($query)) {
                                             ?>
                                             <tr>
                                                 
                                                 <td><?php echo $filas['idEquipo']       ?></td>
                                                 <td><?php echo $filas['fechaReserva']   ?></td>
                                                 <td><?php echo $filas['Usuario']      ?></td>
                                                 <td><a  class=" d-sm-inline-block btn btn-sm btn-primary "  name="Mover"><i class="fas fa-handshake"></i></a></td>
                                                  
                                                                                                
                                             </tr>  
                                             <?php  } ?>                                          
                                         </tbody>
                                     </div>
                                 </table>
                             </div>
                         </div>
                     </div>
 
                 </div>
                 <!-- /.container-fluid -->
                         <!-- End of Main Content -->
                         
                     </div>
 
                </div>
                 <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistema Control <br><br> Universidad Cristiana de las Asambleas de Dios</span>
                    </div>
                    <div class="redes-container">
                        <ul>
                            <li><a target="_blank" rel="nofollow" href="https://www.facebook.com/universidad.cristiana.ucad/" class="facebook"><i class="fab fa-facebook-f"></i><a></li>
                            <li><a href="https://www.twitter.com/@ucad_sv" class="twitter"><i class="fab fa-twitter"></i><a></li>
                            <li><a href="https://www.instagram.com/universidad_cristriana" class="instagram"><i class="fab fa-instagram"></i><a></li>
                        </ul>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal (EN MANTENIMIENTO)-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>-->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
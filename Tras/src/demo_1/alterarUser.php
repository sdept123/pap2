<?php
    
    include 'db.inc.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">   
    <link rel="stylesheet" href="../assets/css/shared/style.css">   
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">   
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="../assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">                 
          <ul class="navbar-nav ml-auto">                       
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>

                <a class="dropdown-item" href='logout.php'>Terminar Sessão<i class="dropdown-item-icon ti-power-off"></i></a>
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
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="chartjs.php">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Charts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tabelas.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Tables</span>
              </a>
            </li>
            
            
          </ul>
        </nav>
        <div> 
        <?php
          $result=executarSQL("select * from tblutilizador where id=".$_GET['id']."");

          while($linha=mysqli_fetch_array($result)){
            $nome = $linha["nome"];
            $datanascimento = $linha["datanascimento"];
            $contacto = $linha["contacto"];
            $email = $linha["email"];
            $foto = $linha["foto"];
            $designacao = $linha["tipoutilizador"];
            
          }

        ?>
        <div class="container">
            <form action="./bd_funcoes.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="id" class="col-sm-5 col-form-label">ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>" readonly />
                  </div>
                </div>

                <div class="form-group row">
                  <label for="nome" class="col-sm-5 col-form-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="datanascimento" class="col-sm-5 col-form-label">Data Nascimento</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="datanascimento" name="datanascimento" value="<?php echo $datanascimento; ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="contacto" class="col-sm-5 col-form-label">Contacto</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="contacto" name="contacto" value="<?php echo $contacto; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-5 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-5 col-form-label">Foto</label>
                  <div class="col-sm-10">
                    <img src="./<?php echo $foto; ?>" width="200px" height="200px" />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-5 col-form-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" />
                  </div>
                </div>


                <div class="form-group row">
                  <label for="descricao_convidados" class="col-sm-5 col-form-label">Tipo</label>
                  <div class="col-sm-10">
                    <select name="descricao_convidados" class="form-control" id="descricao_convidados">
                      <?php
                        $resultado=executarSQL("select * from tbltipoutilizador");

                        while($linha=mysqli_fetch_assoc($resultado)){
                          if($linha["id"] ==  $designacao)
                            echo "<option value='".$linha["id"]."' selected>".$linha["tipoutilizador"]."</option>";
                          else
                            echo "<option value='".$linha["id"]."'>".$linha["tipoutilizador"]."</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
                    
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="editar_convidados" class="btn btn-primary">Alterar</button>
                </div>
              </form>
            </div>
        
        
      </div>
    </div>
   </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>
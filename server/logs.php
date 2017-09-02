<?php 
    include_once('libs/list_logs.php');
    include_once('libs/session.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Логи</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">
      <link rel="icon" type="image/png" href="images/295144.ico">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="index.php">My offers</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Все приложения</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
            <a class="nav-link" href="add_new.php">
              <i class="fa fa-fw fa-link"></i>
              <span class="nav-link-text">
                Добавить приложение</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="edit.php">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Редактирование/удаление приложений</span>
            </a>
          </li>
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="logs.php">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                Логи</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
     
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Выйти</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Главная</a>
          </li>
          <li class="breadcrumb-item active">Логи</li>
        </ol>


        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Список всех логов
          </div>
          <div class="card-body">
            <div class="table-responsive table-striped table-hover">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Дата</th>
                    <th>Автор</th>
                    <th>Описание</th>
                    <th>Действия</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Дата</th>
                    <th>Автор</th>
                    <th>Описание</th>
                    <th>Действия</th>
                  </tr>
                </tfoot>
                <tbody>
                    <?php foreach($list_logs as $key => $value){  ?>
                  <tr>
                    <td><?php echo $value['log_date']; ?></td>
                    <td><?php echo $value['log_author']; ?></td>
                    <td><?php echo substr($value['description'], 3, 50); ?>...</td>
                    <td>
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#viewApp<?php echo $value['id']; ?>" title="<?php echo $dictionary['delete']; ?>"> <img src="images/eye%20(1).png" height="25px" width="25px"></button>
                        <div id="viewApp<?php echo $value['id']; ?>" class="modal fade text-dark">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"><button class="close" type="button" data-dismiss="modal">Х</button>
                                            <h4 class="modal-title">Просмотр</h4>
                                        </div>
                                        <div class="modal-body">
                                            <b>Описание:</b>
                                            <?php echo $value['description']; ?>
                                        </div> 
                                            <div class="modal-footer"></div>
                                            <div class="modal-footer">
                                                <button class="btn btn-dark" type="button" data-dismiss="modal">Закрыть</button>
                                            </div>
                                    </div>
                                </div>
                            </div> 
                    </td>
                  </tr>
                 <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright My offers 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Желаете выйти?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              Выберите "Выйти" ниже если Вы готовы завершить текущую сессию.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
            <a class="btn btn-primary" href="libs/logout.php">Выйти</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>

<?php 
    include_once('libs/delete_app.php');
    include_once('libs/create_app.php');
    include_once('libs/list_app.php');
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
    <title>Редактирование</title>

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
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="edit.php">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Редактирование/удаление приложений</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="logs.php">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                Логи</span>
            </a>
          </li>
        <!--  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Components</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="static-nav.html">Static Navigation</a>
              </li>
              <li>
                <a href="#">Custom Card Examples</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-file"></i>
              <span class="nav-link-text">
                Example Pages</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
              <li>
                <a href="login.html">Login Page</a>
              </li>
              <li>
                <a href="register.html">Registration Page</a>
              </li>
              <li>
                <a href="forgot-password.html">Forgot Password Page</a>
              </li>
              <li>
                <a href="blank.html">Blank Page</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-sitemap"></i>
              <span class="nav-link-text">
                Menu Levels</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
              <li>
                <a href="#">Second Level Item</a>
              </li>
              <li>
                <a href="#">Second Level Item</a>
              </li>
              <li>
                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                  <li>
                    <a href="#">Third Level Item</a>
                  </li>
                  <li>
                    <a href="#">Third Level Item</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Link</span>
            </a>
          </li> -->
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
         <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="new-indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">12</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Jane Smith</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all messages
              </a>
            </div>
          </li>  -->
             
        <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">6</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all alerts
              </a>
            </div>
          </li> -->
        <!--  <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li> -->
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
          <li class="breadcrumb-item active">Редактирование приложений</li>
        </ol>

        <!-- Icon Cards -->
      <!--  <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">
                  26 New Messages!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  11 New Tasks!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">
                  123 New Orders!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-support"></i>
                </div>
                <div class="mr-5">
                  13 New Tickets!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div> -->

        <!-- Area Chart Example -->
      <!--  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-area-chart"></i>
            Area Chart Example
          </div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>
        </div> -->

  <!-- <div class="row">

          <div class="col-lg-8">

          
       <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bar-chart"></i>
                Bar Chart Example
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8 my-auto">
                    <canvas id="myBarChart" width="100" height="50"></canvas>
                  </div>
                  <div class="col-sm-4 text-center my-auto">
                    <div class="h4 mb-0 text-primary">$34,693</div>
                    <div class="small text-muted">YTD Revenue</div>
                    <hr>
                    <div class="h4 mb-0 text-warning">$18,474</div>
                    <div class="small text-muted">YTD Expenses</div>
                    <hr>
                    <div class="h4 mb-0 text-success">$16,219</div>
                    <div class="small text-muted">YTD Margin</div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">
                Updated yesterday at 11:59 PM
              </div>
            </div> 

            
         <div class="mb-0 mt-4">
              <i class="fa fa-newspaper-o"></i>
              News Feed</div>
            <hr class="mt-2">
            <div class="card-columns">

            
              <div class="card mb-3">
                <a href="#">
                  <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
                </a>
                <div class="card-body">
                  <h6 class="card-title mb-1">
                    <a href="#">David Miller</a>
                  </h6>
                  <p class="card-text small">These waves are looking pretty good today!
                    <a href="#">#surfsup</a>
                  </p>
                </div>
                <hr class="my-0">
                <div class="card-body py-2 small">
                  <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-thumbs-up"></i>
                    Like
                  </a>
                  <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-comment"></i>
                    Comment
                  </a>
                  <a class="d-inline-block" href="#">
                    <i class="fa fa-fw fa-share"></i>
                    Share
                  </a>
                </div>
                <hr class="my-0">
                <div class="card-body small bg-faded">
                  <div class="media">
                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <h6 class="mt-0 mb-1">
                        <a href="#">John Smith</a>
                      </h6>
                      Very nice! I wish I was there! That looks amazing!
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#">Like</a>
                        </li>
                        <li class="list-inline-item">
                          ·
                        </li>
                        <li class="list-inline-item">
                          <a href="#">Reply</a>
                        </li>
                      </ul>
                      <div class="media mt-3">
                        <a class="d-flex pr-3" href="#">
                          <img src="http://placehold.it/45x45" alt="">
                        </a>
                        <div class="media-body">
                          <h6 class="mt-0 mb-1">
                            <a href="#">David Miller</a>
                          </h6>
                          Next time for sure!
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <a href="#">Like</a>
                            </li>
                            <li class="list-inline-item">
                              ·
                            </li>
                            <li class="list-inline-item">
                              <a href="#">Reply</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer small text-muted">
                  Posted 32 mins ago
                </div>
              </div>

            
              <div class="card mb-3">
                <a href="#">
                  <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
                </a>
                <div class="card-body">
                  <h6 class="card-title mb-1">
                    <a href="#">John Smith</a>
                  </h6>
                  <p class="card-text small">Another day at the office...
                    <a href="#">#workinghardorhardlyworking</a>
                  </p>
                </div>
                <hr class="my-0">
                <div class="card-body py-2 small">
                  <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-thumbs-up"></i>
                    Like
                  </a>
                  <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-comment"></i>
                    Comment
                  </a>
                  <a class="d-inline-block" href="#">
                    <i class="fa fa-fw fa-share"></i>
                    Share
                  </a>
                </div>
                <hr class="my-0">
                <div class="card-body small bg-faded">
                  <div class="media">
                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <h6 class="mt-0 mb-1">
                        <a href="#">Jessy Lucas</a>
                      </h6>
                      Where did you get that camera?! I want one!
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#">Like</a>
                        </li>
                        <li class="list-inline-item">
                          ·
                        </li>
                        <li class="list-inline-item">
                          <a href="#">Reply</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-footer small text-muted">
                  Posted 46 mins ago
                </div>
              </div>

              
              <div class="card mb-3">
                <a href="#">
                  <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
                </a>
                <div class="card-body">
                  <h6 class="card-title mb-1">
                    <a href="#">Jeffery Wellings</a>
                  </h6>
                  <p class="card-text small">Nice shot from the skate park!
                    <a href="#">#kickflip</a>
                    <a href="#">#holdmybeer</a>
                    <a href="#">#igotthis</a>
                  </p>
                </div>
                <hr class="my-0">
                <div class="card-body py-2 small">
                  <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-thumbs-up"></i>
                    Like
                  </a>
                  <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-comment"></i>
                    Comment
                  </a>
                  <a class="d-inline-block" href="#">
                    <i class="fa fa-fw fa-share"></i>
                    Share
                  </a>
                </div>
                <div class="card-footer small text-muted">
                  Posted 1 hr ago
                </div>
              </div>

            
              <div class="card mb-3">
                <a href="#">
                  <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
                </a>
                <div class="card-body">
                  <h6 class="card-title mb-1">
                    <a href="#">David Miller</a>
                  </h6>
                  <p class="card-text small">It's hot, and I might be lost...
                    <a href="#">#desert</a>
                    <a href="#">#water</a>
                    <a href="#">#anyonehavesomewater</a>
                    <a href="#">#noreally</a>
                    <a href="#">#thirsty</a>
                    <a href="#">#dehydration</a>
                  </p>
                </div>
                <hr class="my-0">
                <div class="card-body py-2 small">
                  <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-thumbs-up"></i>
                    Like
                  </a>
                  <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-comment"></i>
                    Comment
                  </a>
                  <a class="d-inline-block" href="#">
                    <i class="fa fa-fw fa-share"></i>
                    Share
                  </a>
                </div>
                <hr class="my-0">
                <div class="card-body small bg-faded">
                  <div class="media">
                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <h6 class="mt-0 mb-1">
                        <a href="#">John Smith</a>
                      </h6>
                      The oasis is a mile that way, or is that just a mirage?
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#">Like</a>
                        </li>
                        <li class="list-inline-item">
                          ·
                        </li>
                        <li class="list-inline-item">
                          <a href="#">Reply</a>
                        </li>
                      </ul>
                      <div class="media mt-3">
                        <a class="d-flex pr-3" href="#">
                          <img src="http://placehold.it/45x45" alt="">
                        </a>
                        <div class="media-body">
                          <h6 class="mt-0 mb-1">
                            <a href="#">David Miller</a>
                          </h6>
                          <img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt="">
                          I'm saved, I found a cactus. How do I open this thing?
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <a href="#">Like</a>
                            </li>
                            <li class="list-inline-item">
                              ·
                            </li>
                            <li class="list-inline-item">
                              <a href="#">Reply</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer small text-muted">
                  Posted yesterday
                </div>
              </div>

            </div>
          
          </div>

          <div class="col-lg-4">

              
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-pie-chart"></i>
                Pie Chart Example
              </div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">
                Updated yesterday at 11:59 PM
              </div>
            </div>
         
              
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bell-o"></i>
                Feed Example
              </div>
              <div class="list-group list-group-flush small">
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>David Miller</strong>
                      posted a new article to
                      <strong>David Miller Website</strong>.
                      <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>Samantha King</strong>
                      sent you a new message!
                      <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>Jeffery Wellings</strong>
                      added a new photo to the album
                      <strong>Beach</strong>.
                      <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <i class="fa fa-code-fork"></i>
                      <strong>Monica Dennis</strong>
                      forked the
                      <strong>startbootstrap-sb-admin</strong>
                      repository on
                      <strong>GitHub</strong>.
                      <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  View all activity...
                </a>
              </div>
              <div class="card-footer small text-muted">
                Updated yesterday at 11:59 PM
              </div>
            </div>
          </div>
        </div> -->

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Список всех приложений
          </div>
          <div class="card-body">
            <div class="table-responsive table-striped table-hover">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Иконка</th>
                    <th>Название</th>
                    <th>Пакет</th>
                    <th>Приоритет</th>
                    <th>Цена</th>
                    <th>Ключевые слова</th>
                    <th>Действия</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Иконка</th>
                    <th>Название</th>
                    <th>Пакет</th>
                    <th>Приоритет</th>
                    <th>Цена</th>
                    <th>Ключевые слова</th>
                    <th>Действия</th>
                  </tr>
                </tfoot>
                <tbody>
                    <?php foreach($list_apps as $key => $value){  ?>
                  <tr>
                    <td>
                        <?php echo '<img style="height: 40px; width: 40px;" 
										src="data:image/jpeg;base64,'.base64_encode( $value['image']).'"/>';
					?> 
                    </td>
                  
                    <td><?php echo substr($value['app_name'], 0, 7); ?>...</td>
                    <td><?php echo substr($value['package'], 0, 7); ?>...</td>
                    <td><?php echo $value['priority']; ?></td>
                    <td><?php echo $value['price']; ?></td>
                    <td><?php echo $value['keywords']; ?></td>
                    <td>
                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#editModal<?php echo $value['id'];?>" href="edit/<?php echo $value['id']; ?>" title="<?php echo $dictionary['edit']; ?>"><img src="images/pencil.png" height="25px" width="25px"></button>
                        
                        
                        <div id="editModal<?php echo $value['id'];?>" class="modal fade text-dark">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header"><button class="close" type="button" data-dismiss="modal">Х</button>
                                            <h4 class="modal-title">Редактирование</h4>
                                        </div>
                <form enctype="multipart/form-data" method="post" action="edit.php"> 
                 <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
                    <input type="hidden" name="id_copy" value="<?php echo $value['id']; ?>">
                <div class="form-group">
                  <label for="app_name" style="margin-left:10px;">Название приложения</label>
                  <input type="text" class="form-control" required placeholder="Ведите название для приложения" name="app_name" value="<?php echo  $value['app_name']; ?>" style="width: 85%; margin-right:10px; margin-left:10px;">
                </div>
                 <div class="form-group">
                  <label for="userfile" style="margin-left:10px;">Если хотите обновить картинку для приложения, просто загрузите новую сюда</label>
                  <input type="file" class="form-control" name="userfile" style="width: 85%; margin-right:10px; margin-left:10px;">
                </div>
                 <div class="form-group">
                  <label for="package" style="margin-left:10px;">Пакет приложения</label>
                  <input type="text" class="form-control" placeholder="Укажите пакет приложения" 
                    required name="app_package" aria-describedby="basic-addon2" value="<?php echo $value['package']; ?>" style="width: 85%; margin-right:10px; margin-left:10px;">
                </div>
                  <div class="form-group">
                  <label for="package" style="margin-left:10px;">Ключевые слова</label>
                  <input type="text" class="form-control" placeholder="Укажите ключевые слова для приложения" 
                     name="keywords" aria-describedby="basic-addon2" value="<?php echo $value['keywords']; ?>" style="width: 85%; margin-right:10px; margin-left:10px;">
                </div>
                <div class="form-group">
                  <label for="priority" style="margin-left:10px;">Приоритет</label>
                   <input type="number" class="form-control" name="priority" min="1" step="1" m max="10" required aria-describedby="basic-addon4" maxlength="2" value="<?php echo $value['priority']; ?>" style="width: 85%; margin-right:10px; margin-left:10px;">
                </div>
                 <div class="form-group">
                  <label for="priority" style="margin-left:10px;">Цена в игровой валюте</label>
                   <input type="number" class="form-control" name="price" min="1" step="1" required aria-describedby="basic-addon4" value="<?php echo $value['price']; ?>" style="width: 85%; margin-right:10px; margin-left:10px;">
                </div>
                 
                <div class="form-group">
                </div>
                <button class="btn btn-outline-dark" type="button" data-dismiss="modal" style="float:right; margin-right:10px; margin-bottom:5px;">Закрыть</button>
                <button class="btn btn-outline-primary" name="edit_app" type="submit" style="float:right; margin-right:10px; margin-bottom:5px;">
                   Сохранить</button>
                
          </form>
                                    </div>
                                </div>
                            </div> 
                        
                        
                        
                        |
                        <button class="btn btn-outline-danger" type="button" data-toggle="modal" data-target="#deleteModal<?php echo $value['id']; ?>" title="<?php echo $dictionary['delete']; ?>"> <img src="images/can.png" height="25px" width="25px"></button>
                        
                        <div id="deleteModal<?php echo $value['id']; ?>" class="modal fade text-dark">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header"><button class="close" type="button" data-dismiss="modal">Х</button>
                                            <h4 class="modal-title">Подтвердите удаление</h4>
                                        </div>
                                        <div class="modal-body">Вы действительно хотите удалить приложение из списка?
                                        </div>
                                        <div class="modal-footer"></div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" type="button" href="edit.php?delete=<?php echo $value['id']; ?>">Удалить</a>
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

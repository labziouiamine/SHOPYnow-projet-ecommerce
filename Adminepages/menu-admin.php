<?php ?>



<!--                <nav class="navbar navbar-expand-md navbar-light bg-primary">
                    <div class="col-lg-10 col-auto">
                        <a href="#" class="navbar-brand text-light ">SHOPYnow<i class="fa fa-shopping-cart"></i></a>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bg-aqua text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> <span id="username" class="">Admin name</span> 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">mon profile</a>
                            <i class="dropdown-item "></i>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>-->

<div class="wrapper">
    <!--Sidebar-->  
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Menu</h3>
        </div>

        <ul class="list-unstyled components">
            <h1>Nom de Admin </h1>
            <li class="active">
                <a href="#" style="color:black">Home</a>
            </li>
            <li>
                <a href="#" style="color:black">About</a>
            </li>
            <li>
                <a href="#" style="color:black">Pages</a>
            </li>
        </ul>

        <!--              Les deux button a la fin de nav bar
                      <ul class="list-unstyled CTAs">
                          <li>
                              <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                          </li>
                          <li>
                              <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                          </li>
                      </ul>-->
    </nav>

    <!--Page Content-->  
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span><a href="#" class="navbar-brand text-light ">SHOPYnow<i class="fa fa-shopping-cart"></i></a> </span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <!--<a class="nav-link dropdown-item" href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dropdown</a>-->  
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dropdown</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <h2>Gestion de clients</h2>           
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Ville</th>
                        <th>Telephone</th>
                        <th>Adresse</th>
                        <th>Modification</th>
                        <th>Suppression</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>djjd655è</td>
                        <td>Casa</td>
                        <td>06555432</td>
                        <td>Qu Mouazarne</td>
                        <td><button type="button" class="btn btn-info">Modifier</button></td>
                        <td> <button type="button" class="btn btn-danger">Supprimer</button> </td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>djjd655è</td>
                        <td>Casa</td>
                        <td>06555432</td>
                        <td>Qu Mouazarne</td>
                        <td><button type="button" class="btn btn-info">Modifier</button></td>
                        <td> <button type="button" class="btn btn-danger">Supprimer</button> </td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>djjd655è</td>
                        <td>Casa</td>
                        <td>06555432</td>
                        <td>Qu Mouazarne</td>
                        <td><button type="button" class="btn btn-info">Modifier</button></td>
                        <td> <button type="button" class="btn btn-danger">Supprimer</button> </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>







<!--        <script src="../bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../dist/js/sb-admin-2.min.js" type="text/javascript"></script>
        <script src="../vendor/metisMenu/metisMenu.min.js" type="text/javascript"></script>

 <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
     Bootstrap CSS
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
     Font Awesome CSS
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
     Fontastic Custom icon font
    <link rel="stylesheet" href="css/fontastic.css">
     Google fonts - Roboto 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
     jQuery Circle
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
     Custom Scrollbar
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
     theme stylesheet
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
     Custom stylesheet - for your changes
    <link rel="stylesheet" href="css/custom.css">
     Favicon
    <link rel="shortcut icon" href="img/favicon.ico">
     Tweaks for older IEs[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]

<nav class="side-navbar">
      <div class="side-navbar-wrapper">
         Sidebar Header    
        <div class="sidenav-header d-flex align-items-center justify-content-center">
           User Info
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
          </div>
           Small Brand information, appears on minimized sidebar
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
         Sidebar Navigation Menus
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.html"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="forms.html"> <i class="icon-form"></i>Forms                             </a></li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts                             </a></li>
            <li><a href="tables.html"> <i class="icon-grid"></i>Tables                             </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo
                <div class="badge badge-warning">6 New</div></a></li>
          </ul>
        </div>
        <div class="admin-menu">
            <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul>
        </div>
      </div>
    </nav>-->
<?php
session_start();
if(!$_SESSION['username'] || $_SESSION['username']==NULL){
     header('Localtion : ../admin/login.php');
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <title>Home</title>
            <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="./css/index.css">
        <script type="text/javascript" src="./js/index.js"></script>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Trang quản lý cựu sinh viên</h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href=""><i class="fa fa-home fa-lg"></i> Tin tức cựu sinh viên</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file fa-lg"></i> Báo cáo về cựu sinh viên</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Báo cáo 1</a></li>
                            <li><a href="#">Báo cáo 2</a></li>
                            <li><a href="#">Báo cáo 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-sliders-h fa-lg"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-chart-bar fa-lg"></i> Thống kê</a>
                    </li>
                     <li>
                        <a href=""><i class="fa fa-question-circle fa-lg"></i> Trung tâm trợ giúp</a>
                    </li>
                     <li>
                        <a href=""><i class="fa fa-cog fa-lg"></i> Cài đặt tài khoản</a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-link navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left" >
                                <form class="form-group form-inline">
                                    <input class="form-control" type="text" placeholder="Search.." name="search">
                                    <button type="submit" class="btn btn-default">Search</button>
                                </form>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                     <button class="btn btn-default" data-toggle="dropdown">
                                        <?php
                                            if($_SESSION['username']== "admin")
                                                echo '<i class="fa fa-user-shield"> '.$_SESSION['username'].'</i>';
                                            else  echo '<i class="fa fa-user"> '.$_SESSION['username'].'</i>';
                                         ?>
                                      <span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li><a href="changeInfo.php">Cập nhật thông tin</a></li>
                                        <li><a href="../admin/logout.php">Logout</a></li>
                                      </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <h2>Collapsible Sidebar Using Bootstrap 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h3>Lorem Ipsum Dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>

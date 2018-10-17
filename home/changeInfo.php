<?php
session_start();
if(!$_SESSION['username'] || $_SESSION['username']==NULL){
     header('Localtion : ../admin/login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
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
                    <a href="#"><i class="fa fa-home fa-lg"></i> Tin tức cựu sinh viên</a>
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
                    <a href="#"><i class="fa fa-sliders-h fa-lg"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-chart-bar fa-lg"></i> Thống kê</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-question-circle fa-lg"></i> Trung tâm trợ giúp</a>
                </li>
                <li>
                    <a href="##"><i class="fa fa-cog fa-lg"></i> Cài đặt tài khoản</a>
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
                        <ul class="nav navbar-nav navbar-left">
                            <form class="form-group form-inline">
                                <input class="form-control" type="text" placeholder="Search.." name="search">
                                <button type="submit" class="btn btn-default">Search</button>
                            </form>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <button class="btn btn-default" data-toggle="dropdown">
                                    <?php
                                            if($_SESSION['username']== "admin" || $_SESSION['username']=="tieuconghoa193@gmail.com"){
                                                $_SESSION['username']="admin";
                                                echo '<i class="fa fa-user-shield"> '.$_SESSION['username'].'</i>';
                                            }
                                            else  echo '<i class="fa fa-user"> '.$_SESSION['username'].'</i>';
                                         ?>
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Cập nhật thông tin</a></li>
                                    <li><a href="../admin/logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content -->
            <div id="PersonalInfomation">
                <ul class="nav nav-tabs">
                    <li class="active"><button class="btn btn-default" data-toggle="tab" href="#home">Thông tin</button></li>
                    <li><button class="btn btn-default" data-toggle="tab" href="#menu1"><i class="fa fa-edit"></i></button></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div id="info" class="card col-md-9">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><b>Họ và tên</b></td>
                                            <td>Trần Hưng Nhật</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><b>Giới tính:</b></td>
                                            <td>Nam</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><b>Ngày sinh</b></td>
                                            <td>30/04/1975</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td><b>Nơi sinh</b></td>
                                            <td>Hà Nội</td>
                                            <td><i class="fas fa-search"></i> Tìm theo nơi sinh</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td><b>Mã số sinh viên</b></td>
                                            <td>16021234</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td><b>Lớp</b></td>
                                            <td>CMT8-1975</td>
                                            <td><i class="fas fa-search"></i> Tìm theo lớp</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td><b>Niên khóa</b></td>
                                            <td>2016-2020</td>
                                            <td><i class="fas fa-search"></i> Tìm theo niên khóa</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td><b>Số điện thoại</b></td>
                                            <td>18008198</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td><b>Địa chỉ email</b></td>
                                            <td>nhatbeo@gmail.com</td>
                                            <td><i class="fas fa-search"></i> Tìm theo nơi sinh</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td><b>Nơi ở hiện tại</b></td>
                                            <td>Gầm cầu Thăng Long, Hà Nội</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <td><b>Công việc hiện tại</b></td>
                                            <td>Ăn hại ở nhà</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">12</th>
                                            <td><b>Nơi đang công tác</b></td>
                                            <td>Nhà</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="summary" class="card col-md-3">
                            <img class="card-img-top img-responsive img-circle" src="./images/avatar.png" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" id="hoten"><b>Họ và tên:</b> Trần Hưng Nhật</li>
                                    <li class="list-group-item" id="ngaysinh"><b>Ngày sinh:</b> 30/04/1975</li>
                                    <li class="list-group-item" id="lop"><b>Lớp:</b> CMT8-1945</li>
                                    <li class="list-group-item" id="niemkhoa"><b>Niên khóa:</b> 2016-2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="card card-default col-md-9" style="margin: auto">
                            <div class="card-body">
                                <h2 style="text-align: center">Cập nhật thông tin cá nhân</h2>
                                <form id="formsuadoi" method="POST">
                                    <label>Họ và tên</label>
                                    <input type="text" id="hovaten">
                                    <br>
                                    <label>Giới tính</label>
                                    <input type="radio" name="gioitinh" value="1"> Nam
                                    <input type="radio" name="gioitinh" value="0"> Nữ
                                    <br>
                                    <label>Ngày sinh</label>
                                    <input type="date" id="ngaysinh">
                                    <br>
                                    <label>Nơi sinh</label>
                                    <input type="text" id="noisinh">
                                    <br>
                                    <label>Mã số sinh viên</label>
                                    <input type="text" id="masosinhvien">
                                    <br>
                                    <label>Lớp</label>
                                    <input type="text" id="lop">
                                    <br>
                                    <label>Niên khóa</label>
                                    <input type="text" id="nienkhoa1"> -
                                    <input type="text" id="nienkhoa2">
                                    <br>
                                    <label>Số điện thoại</label>
                                    <input type="tel" id="sodienthoai">
                                    <br>
                                    <label>Địa chỉ email</label>
                                    <input type="email" id="sodienthoai">
                                    <br>
                                    <label>Nơi ở hiện tại</label>
                                    <input type="text" id="noio">
                                    <br>
                                    <label>Công việc hiện tại</label>
                                    <input type="text" id="congviec">
                                    <br>
                                    <label>Nơi đang công tác</label>
                                    <input type="text" id="congty">
                                    <br>
                                    <label>&nbsp;</label>
                                    <input type="button" value="Ghi nhận">
                                    <input type="button" value="Bỏ qua">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->

<!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
    </script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <title>Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../view/admin/css/dashboard.admin.css">
</head>

<body>
    <header class="header">
        <div class="row">
            <div class="nav-bar">
                <div class="navbar-left">
                    <i class="fa fa-bars" style="font-size:24px"></i>
                    <p>Admin</p>
                </div>
                <div class="navbar-search">
                    <form action="" method="get">
                        <input type="text" placeholder="What you looking for....">
                        <button type=" " class="btn-search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="navbar-right">
                    <i class="fa fa-arrows" style="font-size:20px"></i>
                    <i class="fa fa-bell-o" style="font-size:20px"></i>
                    <img src="../view/admin/images/logo.jpg" alt="">
                </div>
            </div>
        </div>
    </header>
    <main class="main pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="boxmain">
                    <div class="main-left">
                        <div class="boxuser">
                            <div class="boxuser-img">
                                <img src="../view/admin/images/logo.jpg" alt="">
                            </div>
                            <div class="boxuser-intro">
                                <div class="intro-name">Quang Nhân</div>
                                <div class="intro-job">Web Developer</div>
                            </div>
                        </div>
                        <div class="boxnavleft">
                            <ul class="navleft">
                                <li>
                                    <i class="fa fa-dashboard" style="font-size:18px"></i>
                                    <a href="admin.php?act=dashboard">DashBoard</a>
                                </li>
                                <li>

                                    <div class="click_title"><i class="fa fa-archive" style="font-size:18px"></i>Categories</div>
                                    <div class="alert">
                                        <ul>
                                            <li><a href="admin.php?act=addcategory">Add new</a></li>
                                            <li><a href="admin.php?act=categories">List categories</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="click_title"><i class="fa fa-diamond" style="font-size:18px"></i>Products</div>
                                    <div class="alert">
                                        <ul>
                                            <li><a href="admin.php?act=addproduct">Add new</a></li>
                                            <li><a href="admin.php?act=dashboard">List products</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="click_title"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Order</div>
                                    <div class="alert">
                                        <ul>
                                            <li><a href="">List Order</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
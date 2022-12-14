<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ADMIN</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./css/style4.css">
    <link rel="stylesheet" href="./css/Task.css">
    <link rel="stylesheet" type="text/css" href="./css/themify-icons/themify-icons.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>DashBoard</h3>
                <strong>DB</strong>
            </div>
            <ul class="list-unstyled components">
                <li class="<?= ($_GET['type']=='home') ? 'active' :''; ?>">
                    <a href="index.php?type=home">
                        <i class="ti-home"></i>
                        Home
                    </a>
                </li>
                <li class="<?= ($_GET['type']=='employee') ? 'active' :''; ?>">
                    <a href="employee.php?sort=emp_id&search=&type=employee&page=1">
                        <i class="ti-user"></i>
                        Employee
                    </a>
                </li>
                <li class="<?= ($_GET['type']=='orders') ? 'active' :''; ?>">
                    <a href="orders.php?sort=id&search=&type=orders&page=1">
                        <i class="ti-notepad"></i>
                        Orders
                    </a>
                </li>
                <li class="<?= ($_GET['type']=='menu') ? 'active' :''; ?>">
                    <a href="menu.php?sort=id&search=&type=menu&page=1">
                        <i class="ti-menu-alt"></i>
                        Menu
                    </a>
                </li>
                <li class="<?= ($_GET['type']=='customer') ? 'active' :''; ?>">
                    <a href="customer.php?sort=phone&search=&type=customer&page=1">
                        <i class="ti-user"></i>
                        Customer
                    </a>
                </li>
                <li class="<?= ($_GET['type']=='custom') ? 'active' :''; ?>">
                    <a href="logout.php">
                        <i class="ti-shift-left"></i>
                        Log out
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
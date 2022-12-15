<?php
require_once 'connection.php';
if (isset($_GET['page']) && $_GET['page'] !== "") {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$record1page = 3;
$previous = $page - 1;
$next = $page + 1;
$offset = ($page - 1) * $record1page;
?>
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
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        About
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
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

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="nav_sort">
                    <!-- Nav pills -->
                    <form class="form-inline" action="" method="GET">
                        <select type="sort" class="form-control mb-2 mr-sm-2" id="sort" name="sort">
                            <option value="emp_id" <?php if (isset($_GET['sort']) && $_GET['sort'] == "emp_id") {
                                                        echo "selected";
                                                    } ?>>ID</option>
                            <option value="emp_fname" <?php if (isset($_GET['sort']) && $_GET['sort'] == "emp_fname") {
                                                            echo "selected";
                                                        } ?>>Họ</option>
                            <option value="emp_lname" <?php if (isset($_GET['sort']) && $_GET['sort'] == "emp_lname") {
                                                            echo "selected";
                                                        } ?>>Tên</option>
                        </select>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="search">
                        <button type="submit" class="btn btn-primary mb-2" name="page" value="<?= $page ?>">Sort</button>
                    </form>
                </div>
                <div class="button">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalCollector">
                        <i class="ti-plus" style="font-size:12px;padding:2px; font-weight:bold;"></i>
                    </button>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID Nhân viên</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sort_option = $_GET['sort'];
                    $query = "SELECT * from `employee` order by $sort_option limit $offset,$record1page";
                    $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from `employee`");
                    if (isset($_GET["search"]) && !empty($_GET["search"])) {
                        $sort_option = $_GET['sort'];
                        $str = $_GET['search'];
                        $query = "SELECT * from `employee` where $sort_option REGEXP '$str+' order by $sort_option limit $offset,$record1page";
                        $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from (SELECT * from `employee` where $sort_option REGEXP '$str+') as a");
                        echo "SELECT COUNT(*) as total_records from (SELECT * from `employee` where $sort_option REGEXP '$str+') as a";
                    }
                    $records = mysqli_fetch_array($result_count);
                    $total_records = $records['total_records'];
                    $total_page = ceil($total_records / $record1page);
                    $result = mysqli_query($conn, $query);
                    while ($r = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $r['emp_id']; ?></td>
                            <td><?php echo $r['emp_fname']; ?></td>
                            <td><?php echo $r['emp_lname']; ?></td>
                            <td><?php echo $r['emp_phone']; ?></td>
                            <td><?php echo $r['mail']; ?></td>
                            <td><?php echo $r['username']; ?></td>
                            <td><?php echo $r['password']; ?></td>
                            <td>
                                <a name="ID" href="editEmp.php?ID=<?php echo $r['emp_id']; ?>" class="btn btn-primary">Sửa</a>
                                <a name="ID" href="deleteEmp.php?ID=<?php echo $r['emp_id']; ?>" onclick="return confirm('Bạn có muốn xóa nhân viên này?')" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <ul class="pagination justify-content-center">
                <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>"><a class="page-link" <?= ($page > 1) ? 'href=?page=' . $previous . '&sort=' . $sort_option . '&search=' . $_GET["search"] : ''; ?>>Previous</a></li>

                <li class="page-item active"><a class="page-link"><?= $page ?></a></li>

                <li class="page-item <?= ($page >= $total_page) ? 'disabled' : ''; ?>"><a class="page-link" <?= ($page < $total_page) ? 'href=?page=' . $next . '&sort=' . $sort_option . '&search=' . $_GET["search"] : ''; ?>>Next</a></li>
            </ul>
            <div>
                <strong>Page <?php echo $page ?> of <?= $total_page ?></strong>
            </div>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
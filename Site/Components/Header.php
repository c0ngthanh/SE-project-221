<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="logoNav" src="../assets/image/logo.png"
                alt="Logo restaurant"></a>
        <form class="d-flex" role="search">
            <input class="form-control me-2 border border-light bg-light" type="search" placeholder="Tìm kiếm.."
                aria-label="Search">
            <button class="btn border border-light " type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </form>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="float-right collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="float-right navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="?controller=products&action=index">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=aboutus&action=index">Về nhà hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../html/History.php">Lịch sử mua hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=cart&action=index">Giỏ hàng</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
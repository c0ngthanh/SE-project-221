<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" type="text/css" href="../assets/header.css">
    <link rel="stylesheet" type="text/css" href="../assets/cart1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="../assets/fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php
    include_once './Components/Header.php';
    ?>
    <!-- End Narbar -->
    <div class="container-fluid text-center text-secondary">
        <h1>THANH TOÁN</h1>
    </div>
    <div class="container text-center">
        <div class="row row-cols-md-2 g-3">
            <div class="col-md-6">
                <div class ="p-2 text-bg-light border border-dark rounded-5">
                    <h3>Địa chỉ giao hàng</h3>
                    <form class="row g-2">
                        <div class="col-8 text-start">
                          <label for="validationDefault01" class="form-label">Họ và Tên</label>
                          <input type="text" class="form-control" id="validationDefault01" value="" required="">
                        </div>
                        <div class="col-4 text-start">
                            <label for="validationDefault01" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="validationDefault01" value="" required="">
                          </div>
                        <div class="col-12 text-start">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-6 text-start">
                          <label for="validationDefault04" class="form-label">Quận</label>
                          <select class="form-select" id="validationDefault04" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option>Quận 1</option>
                            <option>Quận 2</option>
                            <option>Quận 3</option>
                            <option>Quận 4</option>
                            <option>Quận 5</option>
                            <option>Quận 6</option>
                            <option>Quận 7</option>
                            <option>Quận 8</option>
                            <option>Quận 9</option>
                            <option>Quận 10</option>
                            <option>Quận 11</option>
                            <option>Quận 12</option>
                            <option>Quận Tân Bình</option>
                            <option>Quận Bình Tân</option>
                            <option>Quận Thủ Đức</option>
                          </select>
                        </div>
                        <div class="col-6 text-start">
                            <label for="validationDefault04" class="form-label">Phường</label>
                            <select class="form-select" id="validationDefault04" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option>Phường 1</option>
                            <option>Phường 2</option>
                            <option>Phường 3</option>
                            <option>Phường 4</option>
                            <option>Phường 5</option>
                            <option>Phường 6</option>
                            <option>Phường 7</option>
                            <option>Phường 8</option>
                            <option>Phường 9</option>
                            <option>Phường 10</option>
                            </select>
                        </div>
                        <div class="col-12 text-start">
                            <label for="validationDefault01" class="form-label">Tên đường, số nhà</label>
                            <input type="text" class="form-control" id="validationDefault01" value="" required="">
                        </div> 
                      </form>
                </div>
            </div>
            <div class="col-md-6  text-bg-light border border-dark rounded-5">
                <div class ="table-resonsive-md">
                    <h3 class ="pt-2"> Giỏ hàng</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Tên món</th>
                            <th style="width: 28%">Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Tổng tiền (VNĐ)</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider align-middle">
                        <tr>
                            <td>Mì xào giòn</td>
                            <td>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary minus" type="button" id="button-addon2">&minus;</button>
                                    <input type="number" class="form-control count" placeholder="" value="1">
                                    <button class="btn btn-outline-secondary plus" type="button" id="button-addon2">&plus;</button>
                                </div>
                            </td>
                            <td>50.000</td>
                            <td>50.000</td>
                            <td><button type="button" class="btn btn-danger">Xóa</button></td>
                        </tr>
                        <tr>             
                            <td>Rau muống xào</td>
                            <td>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary minus" type="button" id="button-addon2">&minus;</button>
                                    <input type="number" class="form-control count" placeholder="" value="1">
                                    <button class="btn btn-outline-secondary plus" type="button" id="button-addon2">&plus;</button>
                                </div>
                            </td>
                            <td>50.000</td>
                            <td>50.000</td>
                            <td><button type="button" class="btn btn-danger">Xóa</button></td>
                        </tr>
                        <tr>
                            <td>rau muốn xào tỏi ớt</td>
                            <td>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary minus" type="button" id="button-addon2">&minus;</button>
                                    <input type="number" class="form-control count" placeholder="" value="1">
                                    <button class="btn btn-outline-secondary plus" type="button" id="button-addon2">&plus;</button>
                                </div>
                            </td>
                            <td>50.000</td>
                            <td>50.000</td>
                            <td><button type="button" class="btn btn-danger">Xóa</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Mã giảm giá -->
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Promo Code</span>
                    <input type="text" class="form-control" placeholder="Promo code">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Apply</button>
                </div>
                <div class ="row">
                    <div class="col-6 d-flex justify-content-start">
                        <div class ="">Tạm tính</div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class ="row-cols-1">300,000 VNĐ</div>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-6 d-flex justify-content-start">
                        <div class ="">Tạm tính</div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class ="row-cols-1">300,000 VNĐ</div>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-6 d-flex justify-content-start">
                        <div class ="">Tạm tính</div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class ="row-cols-1">300,000 VNĐ</div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            Xuất hóa đơn công ty
                        </label>
                    </div>
                </div>
                <!-- Tổng tiền -->
                <div class="d-md-flex justify-content-center">
                    <button type="button" class="btn btn-primary duy1">Đặt hàng</button>
                </div>                
            </div>
        </div>
    </div>
    <!-- <script src="cart1.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>

  <link rel="stylesheet" type="text/css" href="../assets/font_icon/themify-icons-font/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="../assets/header.css">
  <link rel="stylesheet" type="text/css" href="../assets/footer.css">
  <link rel="stylesheet" type="text/css" href="../assets/detail-food.css">
</head>

<body>

    <?php
        include_once './Components/Header.php';
    ?>
    <!-- <?php 
        echo '<pre>';
        print_r($product_id);
    ?> -->
    <div class="card mb-3 border border-white" style="max-width: 100%;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="../assets/image/<?= $product_id['imgURL']?>" class="card-img" alt="Bánh mâm xôi" style="max-width: 600px; max-height: 400px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text"><?= $product_id['name']?></h5>
              <div class="rating">
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <p class="RateNum in text"> 5</p>
              </div>
              <p class="card-text in text" style="text-decoration-line: line-through;"><?= $product_id['price']?></p>
              <p class="in discount text">-10%</p>
              <p class="card-text text" style="color:red;"><?= $product_id['price']*0.9?></p>
            </div>
          </div>
        </div>
        <br>
        <p style="font-size: 20px"><?= $product_id['description']?></p>
        <a href="?controller=cart&action=store&id=<?= $product_id['description']?>">
            <button class="btn btn-primary order-button" type="submit">Thêm vào giỏ hàng <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        </a>
        
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg></i></button>
      </div>

      <div class="card" style="width: 80%;">
        <div class="card-body">
          <h5 class="card-title text">Đánh giá</h5>
          <div>
            <img src="../assets/image/avatar_pp_1.png" alt="" class="avatar in">
            <p class="card-text in name-user">Công Thành</p>
            <div class="rating">
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <p class="RateNum in"> 5</p>
            </div>
            <p class="card-text in comment">Món ăn rất ngon, hợp khẩu vị.</p>
          </div>
          <div>
            <img src="../assets/image/avatar_pp_1.png" alt="" class="avatar in">
            <p class="card-text in name-user">Công Thành</p>
            <div class="rating">
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <div class="fa fa-star checked in"></div>
                <p class="RateNum in"> 5</p>
            </div>
            <p class="card-text in comment">Món ăn rất ngon, hợp khẩu vị.</p>
          </div>
          
        </div>
      </div>
    <?php
        include_once './Components/Footer.php';
    ?>

</body>

</html>
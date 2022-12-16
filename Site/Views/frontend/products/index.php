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
  <link rel="stylesheet" type="text/css" href="../assets/main.css">
</head>

<body>

    <?php
        include_once './Components/Header.php';
    ?>
  <!--Mon hot-->
  <div class="card border border-white" style="width: 100%; height: auto;">
    <div class="card-body">
      <h5 class="card-title content">Món chính</h5>
    </div>
    <div class="owl-carousel owl-theme">
            <?php 
                $data = [];
                foreach ($products as $products){
                    if($products['product_category']==1)
                    {
                        array_push($data,$products);
                    }
                    else continue;
                }
                foreach($data as $data){
            ?>
            <div class="item">
                <div class="card" style="width: auto;">
                <a href="?controller=products&action=show&id=<?=$data['id']?>">
                <img class="card-img-top" src="../../../../assets/image/<?=$data['imgURL']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px;"><?= $data['name']?></h5>
                        <!-- <p class="card-text" style="text-decoration-line: line-through; font-size: 25px;">45.000đ</p> -->
                        <p class="card-text" style="font-size: 30px;"><?= $data['price'] ?></p>
                        <div class="text-center">
                            <a href="?controller=cart&action=store&id=<?= $data['id'] ?>" class="btn btn-primary button-cart text-dark">Thêm vào giỏ hàng <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
  </div>
  <!--End Mon hot-->
  <?php
        include_once './Components/Footer.php';
    ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
    integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script text="text/javascript">
    $('.owl-carousel').owlCarousel({
      loop: false,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  </script>
</body>

</html>
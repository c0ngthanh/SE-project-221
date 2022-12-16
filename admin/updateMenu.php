<?php
    $id= $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $product_category = $_POST['product_category'];
    require_once 'connection.php';
    $query1 = "UPDATE `products` SET `name` = '$name',`description`='$description', `price` = '$price', `product_category`='$product_category' where `id`='$id'";
    mysqli_query($conn,$query1);;
?>
<?php
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    echo "<script type='text/javascript'>alert('$em');</script>";
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$img_upload_path = 'img/'.$img_name;
                if(!file_exists($img_upload_path))
				move_uploaded_file($tmp_name, $img_upload_path);
				// Insert into Database
				$sql = "UPDATE products set `imgURL`= ('$img_name') where `id`='$id'";
				mysqli_query($conn, $sql);
			}else {
				$em = "You can't upload files of this type";
		        echo "<script type='text/javascript'>alert('$em');</script>";
			}
		}
	}else {
		$em = "unknown error occurred!";
		echo "<script type='text/javascript'>alert('$em');</script>";
	}

}
header("location: menu.php?sort=id&search=&type=menu&page=1");
?>
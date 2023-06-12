<?php
include_once('../admin_dashboard/connection.php');
  $product_brand = $_POST['brand'];
  $product_type = $_POST['laptop_type'];
  $product_name = $_POST['name'];
  $graphics_card = $_POST['graphics_card'];

  $processor = $_POST['processor'];
  $ram_size = $_POST['ram'];
  $ram_type = $_POST['ddr'];
  $ram_mhz = $_POST['mhz'];

  $ssd_size = $_POST['ssd'];
  $ssd_type = $_POST['ssd_types'];
  $memory_size = $_POST['memory_size'];

  
  $main_price = $_POST['main-price'];
  $discount_price = $_POST['discount-price'];
  $offer_price = $_POST['offer-price'];


  $photo = $_POST['image'];

    
  $sql = "INSERT INTO product_details (brand, laptoptypes, name, graphicscard, processor, ram, ddr, mhz, ssd, ssdtypes, memorysize, mainprice, discountprice, offerprice, image) 
  VALUES ('$product_brand','$product_type','$product_name','$graphics_card','$processor','$ram_size','$ram_type','$ram_mhz','$ssd_size','$ssd_type','$memory_size','$main_price','$discount_price','$offer_price','$photo')";
  
  $query = $con->query($sql);
  
  if ($query) {
      header("location:../admin_dashboard/product_details.php");
  } else {
      echo "Error: " . $con->error;
  }
  
// else 
// {
//   echo "Data inserted";
  
// }
?>


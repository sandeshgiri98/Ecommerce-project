<?php
include_once('../user dashboard/connection.php');
  $product_brand = $_POST['brand'];
  $product_type = $_POST['laptop_type'];
  $product_name = $_POST['name'];
  $graphics_card = $_POST['graphics_card'];

  $ram_size = $_POST['ram'];
  $ram_type = $_POST['ddr'];
  $ram_mhz = $_POST['mhz'];

  $ssd_size = $_POST['ssd'];
  $ssd_type = $_POST['ssd_types'];
  $memory_size = $_POST['memory_size'];

  
  $main_price = $_POST['main_price'];
  $discount_price = $_POST['discount_price'];
  $offer_price = $_POST['offer_price'];


  $photo = $_POST['image'];

    
    $sql = "INSERT INTO product_details (brand, laptop_type, name, graphics_card, ram, ddr, mhz, ssd, ssd_types, memory_size, main_price, discount_price, offer_price, image) 
    VALUES ('$product_brand','$product_type','$product_name','$graphics_card','$ram_size','$ram_type','$ram_mhz','$ssd_size','$ssd_type','$memory_size','$main_price','$discount_price','$offer_price','$photo')";
    $query = $con->query($sql);

    if(!$query){
        echo "Data inserted";
  
    }
else 
{
  echo "Data inserted";
  
}
?>

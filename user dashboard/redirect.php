<?php
include_once('../user dashboard/connection.php');
  $product = $_POST['brand'];
  $product_name = $_POST['name'];
  $ram = $_POST['ram'];
  $ssd = $_POST['ssd'];
  $photo = $_POST['image'];

    
    $sql = "INSERT INTO dashboard_details (brand, name, ram, ssd, image) VALUES ('$product', '$product_name', '$ram', '$ssd', '$photo')";
    $query = $con->query($sql);

    if(!$query){
        echo "Data inserted";
  
    }
else 
{
  echo "Data inserted";
  
}
?>

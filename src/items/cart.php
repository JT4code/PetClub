<!DOCTYPE html> <link rel="stylesheet" href="../style.css">

<?php 

  session_start();

  $item_title = $_SESSION['veiwing-item'];

  $mysqli = require __DIR__ . "/stock-items-database.php";

  $sql = sprintf("SELECT * FROM items
  WHERE title = '%s'",
  $mysqli->real_escape_string($item_title));
    
  $result = $mysqli->query($sql);
    
  $item_data = $result->fetch_assoc();

  $item_ID = $item_data["ID"];
  $item_image_path = $item_data["Img_path"];
  $price = $item_data["Price"];
  $sale_percentage = $item_data["Discount"];
  $stock_quantity = $item_data["Stock_quantity"];
  $item_description = $item_data["Description"];
  $item_type = $item_data["Item_type"];
  $pet_type = $item_data["Pet_type"];


  echo "<pre style='font-size: 30px'>";
  print_r($_SESSION['cart']);
  echo "</pre>";

?>
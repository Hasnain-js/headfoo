<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["name"]);
  $price = test_input($_POST["price"]);
  $imgname = $_FILES["image"]["name"];
  $tmploc = $_FILES["image"]["tmp_name"];




  require "conn.php";

  $mysql = "insert into product ( product_name , price , image)  values( '$name' , '$price' , '$imgname')";
  if ($conection->query($mysql) === true) {
    $lastid = $conection->insert_id;
    move_uploaded_file($tmploc, 'assets/images/' . $lastid . '.jpg');
    echo "<script type='text/javascript'> alert( 'Product Add Sucessfully.Last ID is $lastid'); </script>";
  } else {
    echo "Error: " . $mysql . "<br>" . $conection->error;
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
         
?>
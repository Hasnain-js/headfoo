<?php
       $id =  $_GET['id'] ;
      
       require 'conn.php' ;
       $mysql = "DELETE from product where id ='{$id}'";
       if($conection->query($mysql) === true){    
                header('location:../admin.php') ;
                    
                } else {
                  echo "Error: " . $mysql . "<br>" . $conection->error;
                }
      
      
       
       
 ?>
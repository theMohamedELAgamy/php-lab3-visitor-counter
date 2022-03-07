<?php

require_once("vendor/autoload.php");
dbhandler::connect();
  if(isset($_GET["id"])){
     $table= dbhandler::returncapsule();
    $id=$_GET["id"];
   $record= $table->find(number_format($id));
  
             echo "<center>";     
        echo "<table border='1'>";
                
            
                    echo "<tr>";
                    echo "<td> Name </td>";
                    echo "<td> Price </td>";
                    echo "<td> Country </td>";

                    echo "</tr>";
                
                echo "<tr>";

                    echo "<td>".$record->product_name ."</td>";
                    echo "<td>".$record->list_price ."</td>";
                    $imag= "images/$record->Photo";
                    echo "<td><img src=$imag></td>";
                    
                echo "</tr>";
   echo "</center>"; }



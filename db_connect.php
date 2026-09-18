<?php
   $connect = pg_connect("host=localhost port=8888 dbname=GAMMY user=postgres password=admin123");
    if($connect){
      echo "connected";
    }
    else{
      echo "not connected";
    }
?>
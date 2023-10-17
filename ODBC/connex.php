<?php
function conectar(){
$dsn = "demo";
$user="root";
$password="";
  $conn = odbc_connect($dsn, $user, $password);    
    //$conn = odbc_connect($dsn,"root", "");
        if (!($conn)) {
          echo "<p>Connection to DB via ODBC failed: ";
          echo odbc_errormsg ($conn );
          echo "</p>\n";
        }
        else{
          return $conn;
        }
 
      }
?>
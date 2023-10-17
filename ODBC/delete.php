<?php
 
include ("connex.php");
$conn=conectar();
 
$id=$_GET['id'];
 
$sql="DELETE FROM estudiantes  WHERE id='$id'";
$rs = odbc_exec($conn,$sql);
 
    if(!$sql){
        Header("Location: conexion.php");
        echo $sql;
    }else{
        Header("Location: conexion.php");
    }
 
 
?>
 
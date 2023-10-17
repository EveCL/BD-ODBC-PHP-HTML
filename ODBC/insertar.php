<?php
include("connex.php");
$conn=conectar();
 
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
 
 
$sql="INSERT INTO estudiantes VALUES('$id','$nombre','$apellido','$edad', '$direccion', '$telefono')";
$rs = odbc_exec($conn,$sql);
//$query= mysqli_query($con,$sql);
 
if($rs){
    Header("Location: conexion.php");
   
   
}else {
    echo "Query error " .odbc_error();
}
?>
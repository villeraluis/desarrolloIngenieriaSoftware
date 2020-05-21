
<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

include("datosconbd.php");
$consulta= " select * from empleado where nombreusuario='$usuario' and clave='$clave'" ;
$resultado = mysqli_query($conexiones,$consulta);


 $filas=mysqli_num_rows($resultado);


if($filas==0){
	
	$mensaje = "DEBES ESTAR REGISTRADO PRA INGRESAR";
	echo "<script>";
	echo "alert('$mensaje');";  
	echo "window.location = 'index.php';";
	echo "</script>";  
				
     }
       else{

	header("location:./diseño/cuerpoinicio.php");
}

mysqli_close($conexiones);

?>
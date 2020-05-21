<?php 
$db_host="localhost"; 
$db_usuario="root"; 
$db_password=""; 
$db_nombre="app-ing-sofware"; 
$conexiones = mysqli_connect($db_host,$db_usuario,$db_password); 
$db = mysqli_select_db($conexiones,$db_nombre) or die ("Problemas al insertar".mysqli_error($conexiones)); 
?> 


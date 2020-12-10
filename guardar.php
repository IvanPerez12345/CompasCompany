<?php
	//Realizamos la conexion con el servidor
	$host='localhost';
	$user='root';
	$pass='';
	$db='compas_company';

	//Funcion llamada conexion
	$con=mysqli_connect($host, $user, $pass, $db) or die("Problemas al realizar la conexion");
	mysqli_select_db($con, $db)or die("Se presentaron algunos problemas al realizar la conexion a la base de datos");
	
    //Recuperar las variables
    $IdEncuestado=$_POST['IdEncuestado'];
	$Respuesta1=$_POST['Respuesta1'];
	$Respuesta2=$_POST['Respuesta2'];
	$Respuesta3=$_POST['Respuesta3'];
	$Respuesta4=$_POST['Respuesta4'];
	$Respuesta5=$_POST['Respuesta5'];
	$Respuesta6=$_POST['Respuesta6'];
	$Respuesta7=$_POST['Respuesta7'];
	$Respuesta8=$_POST['Respuesta8'];
	$Respuesta9=$_POST['Respuesta9'];
	$Respuesta10=$_POST['Respuesta10'];
	
   //Hacer la sentencia de sql
   $sql="INSERT INTO datos VALUES ('$IdEncuestado', '$Respuesta1', '$Respuesta2', '$Respuesta3', '$Respuesta4', '$Respuesta5', '$Respuesta6', '$Respuesta7', '$Respuesta8', '$Respuesta9', '$Respuesta10')";
   
   //Ejecutar la sentencia de sql
   $ejecutar=mysqli_query($con, $sql);
   
   //Verificar la ejecución
   if(!$ejecutar){
	   echo"Hubo algún error";
   }else{
	   echo"Datos guardados correctamente <br> <a href='Formulario.html'>Volver</a>";
   }
?>
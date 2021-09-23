<?php
include('conexion.php');
if(isset($_POST['Ingresar']));
$Usuario=$_POST['Usuario'];
$Email=$_Post['Contraseña'];
$fechaini=date("d/m/y");
//Permite enviar el formulario 
$query="INSERT INTO datos(Usuario,Email,fecha_inicio) VALUES ('$Usuario','$Email','$fechaini')";
$consulta=mysqli_query($conexion,$query);
//Aca se relaciona la tabla creada en mysql con las variables del formulario
if ($consulta){
    header("location:paginaprincipal.php");}
else{
    ?>
       <h3 class='bad'>Ups ha ocurrido un error!</h3>
       <?php
       //Permite hacer una condicion el cual si se cumple lo redirige a la pagina mostrada y si no mostrará un error.
}
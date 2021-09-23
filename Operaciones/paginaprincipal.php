<?php
session_start();
$usuario=$_SESSION['username'];
echo "<h1>Bienvenidos a la tienda de Compensar</h1>";
?>
<html lang="es">
<!--le indica al navegador que todo el contenido esta en español!-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Compensar</title>
    <link rel="stylesheet" type="text/css" href="estilo2.css">
    <!--Conexion con el estilo2 de css!-->
</head>
<fieldset>
        <h1>Servicios</h1>
        <p>Rodadas compensar:37.100*</p>
        <p>Festival de ballet:8.800*</p>
        <p>Plan pasadía familiar Lagosol sin transporte:22.700*</p>
    </fieldset>
    <!--Permite organizar los servicios en grupo-->
<body>
    <center>
<br>
<br>
<form action="paginaprincipal.php" method="post">
    <fieldset>
        <h1>Compras</h1>
        <p>Descripcion:<input type="text" placeholder="Descripcion" name="Descripcion"></p>
        <p>Precio1:<input type="text" placeholder="PrecioArt1" name="Precio1"></p>
        <p>Precio2:<input type="text" placeholder="PrecioArt2" name="Precio2"></p>
        <p>Precio3:<input type="text" placeholder="PrecioArt3" name="Precio3"></p>
        <p>Descuento:<input type="text" placeholder="Descuento" name="Descuento"></p>
<br>
<br>
        <input type="submit" value="Comprar" name="Comprar"> 
        <!--Formulario para realizar la compra agrupado-->
</fieldset>
</center>
    </form> 
    <?php
    if(isset($_POST["Comprar"])){
    $Precio1=$_POST["Precio1"];
    $Precio2=$_POST["Precio2"];
    $Precio3=$_POST["Precio3"];
    $Descuento=$_POST["Descuento"];
    $total1=$Precio1*
    $total = $Precio1+$Precio2+$Precio3;
    $Desc=($Descuento/100)*$total; 
    $TotalFinal= $total-$Desc;
       echo "<h2>El descuento es:....</h2> <br>";
       echo "Total sin descuento:".$total."<br>";
       echo  "Descuento:".$Desc."<br>";
       echo  "El total final a pagar:". $TotalFinal."<br>";
    }
    //Operaciones para realizar un descuento
    ?>
</body>
<style>
    body {
        background-image:linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);  
      }
    </style>
    <!--Fondo para esta pagina-->
</html>
<?php
session_start();
if (!isset($_SESSION["username"])) {header("Location: ingresar_sesion.php");exit();}
?>
<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Clientes rapidos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.win.css' rel='stylesheet'>
    <link rel="stylesheet" href="Css/loginnn.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/interfas.js" ></script>  
</head>
<body>
<div class="wrapper">
 <form method="POST" action="re_camiones.php">
 <h1> INGRESE DATOS DEL CLIENTE </h1>
<div class="input-box">
<p> RUC/DNI :</p>
<input id="Codigo" type="text" name = "Ruc_dni" placeholder="RUC/DNI"> 
<!--<select class="input-box" name="Documento" id="Documento" placeholder="Documento">
            <option value="pdf">PDF</option>
            <option value="word">Word</option>
        </select>-->
</div>
<div class="input-box">
<p> Razón social :</p>
<input id="Placa" type="text" name = "Razon_social" placeholder= "Razon Social" autofocus>    
</div>
<div class="input-box">
<p>Nombre : </p>
<input id="Marca" type="text" name = "Nombre" placeholder= "Nombre"> 
        <!--<select class="input-box" name="Tipo_Venta" id="Tipo_Venta">
            <option value="factura">Factura</option>
            <option value="boleta">Boleta</option>
        </select>-->
</div>
<div class="input-box">
    <p>Dirección :</p>
    <input id="Certificado" type="text" name = "Direccion" placeholder= "Dirección">
</div>
<div class="input-box">
<button type="submit" name="correcto" class="btn"><img id="image" src="img/aceptar.png" alt="Image 1" width="70px" height="70px"></button>
<button type="submit" name="null" class="btn"><img id="image" src="img/eliminar.png" alt="Image 2" width="70px" height="70px"></button>
</div>
</form>
</div>
</body>
</html>
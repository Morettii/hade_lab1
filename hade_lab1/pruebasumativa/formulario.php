<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <td><img src="logo_cft_estatal.jpeg" alt="" width="8%"></td>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        <td> <a href="">Inicio</a></td>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        <td> <a href="">Admision</a></td>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        <td> <a href="">Carrera</a></td> ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        <td> <a href="">Contactanos</a></td>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀

        <input  class="" type="search" placeholder="Buscar tu carrera" value="">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________

    <center><h1>Formulario Web Para El Ingreso De Notas</h1></center>
    <form action="controlador.php" method="POST">
        <center>
        <label for="">Nombre</label>
        <input type="text" name="nombre"><br>
        <br>
        <p>Unidad 1: total 33%: Características de un sitio Web<p>
        <label for="">Nota 1</label>
        <input type="text" name="nota1">12%<br>
        <label for="">Nota 2</label>
        <input type="text" name="nota2">21%<br>
        <br>
        <p>Unidad 2: 33%: Programación básica de un aplicación Web<p>
        <label for="">Nota 3</label>
        <input type="text" name="nota3">12%<br>
        <label for="">Nota 4</label>
        <input type="text" name="nota4">21%<br>
        <br>
        <p>Unidad 3: 34%: Programación Avanzada de una aplicación Web<p>
        <label for="">Nota 5</label>
        <input type="text" name="nota5">13%<br>
        <label for="">Nota 6</label>
        <input type="text" name="nota6">21%<br>
        <br>
        <input type="submit" value="Calcular" name="submit">
        <center/>
    </form>
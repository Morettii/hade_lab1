<html><link href="./css/bootstrap.min.css" rel="stylesheet"></html>
<html> <center>
<html><link rel="stylesheet"  href="style.css"><html>
<td><img src="logo_cft_estatal.jpeg" alt="" width="8%"></td>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        <td> <a href="">Inicio</a></td>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        <td> <a href="">Admision</a></td>⠀⠀⠀⠀⠀⠀⠀
        <td> <a href="">Carrera</a></td> ⠀⠀⠀⠀⠀⠀⠀⠀
        <td> <a href="">Contactanos</a></td>⠀⠀⠀⠀⠀⠀⠀⠀



        <input  class="" type="search" placeholder="Buscar tu carrera" value="">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
_______________________________________________________________________________________________________________________________________________________________________
<?php
    
    if( isset($_POST['submit']) && !empty($_POST['submit'])){

    $estudiante = $_POST['nombre'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
        
    $nota5 = $_POST['nota5'];
    $nota6 = $_POST['nota6'];
        

    if($nota1 < 1.0  || $nota1 > 7.0 || $nota1 === ""){
        echo "MAL ingresado";exit;
    }else if($nota2 < 1.0  || $nota2 > 7.0 || $nota2 === ""){
        echo "MAL Ingresado";exit;
    }

    if($nota3 < 1.0  || $nota3 > 7.0 || $nota3 === ""){
        echo "MAL Ingresado";exit;
    }else if($nota4 < 1.0  || $nota4 > 7.0 || $nota4 === ""){
            echo "MAL Ingresado";exit;
    }

    if($nota5 < 1.0  || $nota5 > 7.0 || $nota5 === ""){
            echo "MAL Ingresado";exit;
    }else if($nota6 < 1.0  || $nota6 > 7.0 || $nota6 === ""){
            echo "MAL Ingresado";exit;
    }

    echo "<br>NOTAS FINALES<br/>";

    echo "<br>El estudiante " .$estudiante. "<br/>";
    echo "<br>La asignatura Desarrollo de Sistemas Wed Dinamicos";

    $ponderacion = (($nota1*0.13) + ($nota2*0.21));
    $ponderacion2 = (($nota3*0.13) + ($nota4*0.21));
    $ponderacion3 = (($nota5*0.13) + ($nota6*0.22));
    $promedio = ($ponderacion+$ponderacion2+$ponderacion3);
        
    

    echo "<br>Unidad 1 total 33%: Características de un sitio Web";
    echo "<br><b>El promedio es: " .round($ponderacion, 1). "<br/>";
    if($ponderacion > 3.9){
        echo "APROBADO!";
    }else{
        echo "REPROBADO";
    }

    echo "<br>Unidad 2: 33%: Programación básica de un aplicación Web";
    echo "<br>El promedio es: " .round($ponderacion2, 1). "<br/>";
    if($ponderacion > 3.9){
        echo "APROBADO!";
    }else{
        echo "REPROBADO";
    }

    echo "<br>Unidad 3: 34%: Programación Avanzada de una aplicación Web";
    echo "<br>El promedio es: " .round($ponderacion3, 1). "<br/>";
    if($ponderacion > 3.9){
        echo "APROBADO!";
    }else{
        echo "REPROBADO";
    }

    echo "<br>El promedio es: " .round($promedio, 1). "<br/>";
    if($promedio > 4.0){
        echo "FELICIDADES USTED ACABA DE PASAR DE AÑO!";
    }else{
        echo "USTED REPITIO";
    }
}
?>
</center>
</html>
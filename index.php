<?php 

echo "<br>";
$numero1 = 50;
$numero2 = 10;

echo "<strong>Taller 1</span> Generalidades de PHP</strong>";
echo "<br>";
echo "<br>";
echo "<strong>Ejercicios numero 1. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";

echo "La suma de ".$numero1 ." + " .$numero2 ." es: ".($numero1 + $numero2);
echo "<br>";
echo "La resta de ".$numero1 ." - " .$numero2 ." es: ".($numero1 - $numero2);
echo "<br>";
echo "La multiplicación de ".$numero1 ." x " .$numero2 ." es: ".($numero1 * $numero2);
echo "<br>";
echo "La division de ".$numero1 ." / " .$numero2 ." es: ".($numero1 / $numero2);
echo "<br>";
echo "<br>";

echo "<strong>Ejercicios numero 2. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";


echo "<br>";
$peso = 85;
$altura = 1.78;
$imc = $peso /($altura*$altura);
$estado;

echo "<strong>La clasificación del IMC es la siguiente: </strong>";
echo "<br>";
echo "<br>";

if ($imc <= 18.4){
    $estado = "Insuficiencia de peso";
}else if (18.5 <= $imc && $imc <= 24.9){
    $estado = "Peso Normal";
}else if (25 <= $imc && $imc <= 29.9){
    $estado = "Sobrepeso";
}elseif (30 <= $imc && $imc <=34.9){
    $estado = "Obesidad 1";
}elseif (35 <= $imc && $imc <=39.9){
    $estado = "Obesidad 2";
}elseif ($imc >=40){
    $estado = "Obesidad 3";
}

echo "Señor usuario su estatura es de: ".$altura ."y su peso es de: ".$peso ."su indice de masa corporal es de: ".$imc. " Por lo tanto usted tiene: ".$estado;
echo "<br>";
echo "<br>";

echo "<strong>Ejercicios numero 3. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";

$cantidadZapatos = 3;
$valorZapatos = 150000;
$totalCompra = $cantidadZapatos*$valorZapatos;
$vdescuento =0;
$descuento = 0 ;
$valorPagar =$totalCompra-$vdescuento;


if ($cantidadZapatos==3){
    $vdescuento = $totalCompra * 0.10;
    $descuento = 10;
}else if($cantidadZapatos>3 && $cantidadZapatos<=5){
    $vdescuento = $totalCompra * 0.20;
    $descuento = 20;
}else if($cantidadZapatos >5){
    $vdescuento = $totalCompra * 0.40;
    $descuento = 40;
}
echo("Cantidad Vendida: ".$cantidadZapatos."<br> Valor zapatos: ".$valorZapatos."<br> Costo Neto: ".$totalCompra.
"<br> Descuento es: ".$descuento."%<br> Valor del Descuento:".$vdescuento."<br> Valor a Pagar es:".$valorPagar);
echo "<br>";
echo "<br>";


echo "<strong>Ejercicios numero 4. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";



$sdevengado=0;
$hTrabajadas=36;
$vHora=20000;
$vExtras=25000;
$hExtras=$hTrabajadas-40;
$sdevengadoe=$hTrabajadas*$vExtras;





if($hTrabajadas <=40){
    $sdevengado=$vHora*$hTrabajadas;
    echo("Numero de horas trabajadas: ".$hTrabajadas."<br> Sueldo recibido: ".$sdevengado);

    
}else {
    echo("Numero de horas trabajadas Extras: ".$hExtras."<br> Sueldo recibido: ".$sdevengadoe);
}


echo "<br>";
echo "<br>";


echo "<strong>Ejercicios numero 5. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";


$sucursalA=array(
    'usuario1'=>array('Nombre'=>"Santiago", 'Telefono'=>"3107777777", 'Direccion'=>"carrera 14d#45d-23", 'Salario'=>"$2000000"),
    'usuario2'=>array('Nombre'=>"Camila", 'Telefono'=>"3145555555", 'Direccion'=>"carrera 30d#34-88", 'Salario'=>"$1500000"),
    'usuario3'=>array('Nombre'=>"Antonio", 'Telefono'=>"3206666666", 'Direccion'=>"calle 34d#44d-83", 'Salario'=>"$5000000"),
    'usuario4'=>array('Nombre'=>"Margarita", 'Telefono'=>"3163333333", 'Direccion'=>"carrera 34d#45g-26", 'Salario'=>"$4000000"),
    'usuario5'=>array('Nombre'=>"Armando", 'Telefono'=>"3202222222", 'Direccion'=>"calle 44d#147d-123", 'Salario'=>"$2000000")
);


foreach($sucursalA as $clavemultidi=>$valormultidi){

    foreach($valormultidi as $clave=>$valores){

        echo($valores) . " - ";
        
    }

    echo("<br>");
   
}


$salario1=2000000;
$salario2=1500000;
$salario3=5000000;
$salario4=4000000;
$salario5=5000000;

$calcularSalarios = $salario1+$salario2+$salario3+$salario4+$salario5;


$sucursalB = (20000000);
$sucursalC = (15000000);

if ($calcularSalarios > $sucursalB){
    echo("<br>El mayor ingreso lo tiene la sucursal A  <br>");
}
else{
    echo("<br>El mayor ingreso lo tiene la sucursal B <br>");
}

echo "<br>";
echo "<br>";

echo "<strong>Ejercicios numero 6. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";

$numerosPares=array(
'El 1° numero par es: '=>2, 
'El 2° numero par es: '=>4,
'El 3° numero par es: '=>6,
'El 4° numero par es: '=>8,
'El 5° numero par es: '=>10,
'El 6° numero par es: '=>12,
'El 7° numero par es: '=>14,
'El 8° numero par es: '=>26,
'El 9° numero par es: '=>18,
'El 10° numero par es: '=>20);



foreach($numerosPares as $clave=>$valor){
    echo "<br>" . $clave . " " . $valor;
}

echo "<br>";
echo "<br>";

echo "<strong>Ejercicios numero 7. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";
$salpicon = array ('dulce1'=> "banano"."<br>" ,'dulce2'=> "manzana"."<br>" ,'dulce3'=> "durazno" ."<br>",'acido1'=> "piña" ."<br>",'acido2'=> "naranja" ."<br>",'acido3'=> "lulo"  );

print_r($salpicon);


echo "<br>";
echo "<br>";
echo "<strong>Ejercicios numero 8. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";

include 'funciones.php';

calcularedad(1991,2020);
calcularedad2(1995,2020);
calcularedad3(1987,2020);


echo "<br>";
echo "<br>";
echo "<strong>Ejercicios numero 9. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";

calcularEstatura(1.65 . " m");
echo "<br>";
calcularEstatura(1.78 . " m");
echo "<br>";
calcularEstatura(1.95 . " m");


echo "<br>";
echo "<br>";
echo "<strong>Ejercicios numero 10. </strong>";
echo "<br>";
echo "<br>";
echo "***********************************************************************";
echo "<br>";

$futbolistas=array(
    'Jugador1'=>array('Nombre'=>"Radamel Falcao", 'Año'=>1986, 'Posicion'=>"Delantero", 'Estatura'=>1.77),
    'Jugador2'=>array('Nombre'=>"James Rodriguez", 'Año'=>1991, 'Posicion'=>"Medio campista", 'Estatura'=>1.81),
    'Jugador3'=>array('Nombre'=>"Juan Cuadrados", 'Año'=>1988, 'Posicion'=>"Delantero", 'Estatura'=>1.78),
    'Jugador4'=>array('Nombre'=>"Yerry Mina", 'Año'=>1994, 'Posicion'=>"Defensor", 'Estatura'=>1.95),
    'Jugador5'=>array('Nombre'=>"David Ospina", 'Año'=>1988, 'Posicion'=>"Portero ", 'Estatura'=>1.83),
    'Jugador6'=>array('Nombre'=>"Davinsón Sanchez", 'Año'=>1996, 'Posicion'=>"Defensor ", 'Estatura'=>1.87 ),
    'Jugador7'=>array('Nombre'=>"Duvan Zapata", 'Año'=>1991, 'Posicion'=>"Delantero ", 'Estatura'=>1.86),
    'Jugador8'=>array('Nombre'=>"Wilmar Barrios", 'Año'=>1993, 'Posicion'=>"Medio campista", 'Estatura'=>1.78),
    'Jugador9'=>array('Nombre'=>"Mateus Uribe", 'Año'=>1991, 'Posicion'=>"Medio campista", 'Estatura'=>1.80)
);


foreach($futbolistas as $clavefutbol=>$valorfutbol){

    foreach($valorfutbol as $clave=>$valor){
        echo $clave . " : ";
        echo $valor;
        echo "<br>";

    }
    echo "<br>";
}




?>
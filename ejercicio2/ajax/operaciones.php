<?php
    $dias=$_POST['dias'];
    $horas= $dias * 24;
    $minutos=$horas*60;
    $segundos=$minutos*60;

    $dias=$dias*86400;

    $velocidad=299.792;
    $distancia=($velocidad*$segundos);

echo $distancia;
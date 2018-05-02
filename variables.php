<?php //así se comienza php

$number = 9; 

$title = "Esto es PHP";

$fecha = date(D.' '.j.S.' '.F.'/'.Y);

// en arreglos hay hartas diferencias con JavaScript:

$arreglo = array("cosas","caja","monos","residuos");

$arreglobjeto = array("apellidos"=>"romero otárola","nombre"=>"camila","edad"=>"24","signo"=>"geminis","animal"=>"panda rojo");

// pueden cometar líneas 18, 19, 20 y 21, y ver la diferencia. Para que la información se vea como quiero

$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/profesorfaco/dno037-2018-09/master/data/swapi-planets.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);

//voy a buscar un archivo, y lo voy a decodificar como JSON

$data = file_get_contents('https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.geojson');

$json = json_decode($data,true);

//último truco: voy a tomar un csv y lo voy a transformar en JSON

$arreglin = $csv;

$arreglinjson = json_encode($arreglin);

?>

<title><?php print($title);?></title>
  </head>
<?php

$linguagens = array();

array_push($linguagens, array(
'Nome'=> 'PHP',
'Criador'=> 'Rasmus Lerdof',
));

array_push($linguagens, array(
'Nome'=> 'Java',
'Criador'=> "Sun Microsystens",
));

array_push($linguagens, array(
'Nome'=> 'C++',
'Criador'=> 'JBarne',
));

array_push($linguagens, array(
'Nome'=> 'Swift',
'Criador'=> 'Apple',
));

$json = '[{"Nome":"PHP","Criador":"Rasmus Lerdof"},{"Nome":"Java","Criador":"Sun Microsystens"},{"Nome":"C++","Criador":"JBarne"},{"Nome":"Swift","Criador":"Apple"}]';

$data = json_decode($json, true);

var_dump($data);


?>
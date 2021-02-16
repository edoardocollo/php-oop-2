<?php

$utenti = [];
$profili = [];
$numeroUtenti = 10;
for ($i=0; $i < $numeroUtenti; $i++) {
  $profilo = new Profilo(
    $i,
    'gigi'.$i.'nick',
    'gigiciao'.$i,
    'guest',
    'guest',
    $i,
    'gigi'.$i,
    'rossi'.$i,
    'italia',
    'roma',
    'via rossini'.$i,
    '011189768'.$i.$i,
    'fdfdsfdsfdsd@dfdsff',
    'fdfdsfdsfdsd@dfdsff',
    'fdfdsfdsfdsd@dfdsff',
    'fdfdsfdsfdsd@dfdsff',
    'fdfdsfdsfdsd@dfdsff',
    'fdfdsfdsfdsd@dfdsff'
  );


  $profili[] = $profilo;
}




 ?>

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
    '19-02-2020',
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
    'fdfdsfdsfdsd@dfdsff',
    'https://developers.google.com/web/images/contributors/no-photo.jpg'
  );


  $profili[] = $profilo;
}




 ?>

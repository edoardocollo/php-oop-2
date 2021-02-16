<?php

$utenti = [];
$profili = [];
$numeroUtenti = 10;
for ($i=0; $i < $numeroUtenti; $i++) {
  $utente = new Utente($i,'gigi'.$i.'nick','gigiciao'.$i,'guest','guest');
  $profilo = new Profilo(
    $i,
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

  $utenti[] = $utente;
  $profili[] = $profilo;
}




 ?>

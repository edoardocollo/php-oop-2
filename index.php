<?php

// INCLUDO CLASSE UTENTE
include 'assets/php/utente.php';
// INCLUDO CLASSE PROFILO
include 'assets/php/profilo.php';





$gigi = new Utente(1,'gigi88','gigiciao','guest','guest');
$profiloGigi = new Profilo(1,1,'gigi','rossi','italia','roma','via rossini 3','01118976896','fdfdsfdsfdsd@dfdsff','fdfdsfdsfdsd@dfdsff','fdfdsfdsfdsd@dfdsff','fdfdsfdsfdsd@dfdsff','fdfdsfdsfdsd@dfdsff','fdfdsfdsfdsd@dfdsff');
var_dump($gigi,$profiloGigi);



 ?>

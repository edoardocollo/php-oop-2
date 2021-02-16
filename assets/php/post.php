<?php


/**
 *
 */
class Post {
  public $id;
  public $autore;
  public $titolo;
  public $contenuto;
  public $img;
  public $data_creazione;
  function __construct($id,$autore,$titolo,$contenuto,$img,$data_creazione){
    $this->id = $id;
    $this->autore = $autore;
    $this->titolo = $titolo;
    $this->contenuto = $contenuto;
    $this->img = $img;
    $this->data_creazione = $data_creazione;
  }
}



 ?>

<?php

class Utente {
  public $id;
  public $id_utente;
  public $password;
  public $ruolo;
  public $gruppo;
  public $dataRegistrazione;
  function __construct($id,$id_utente,$password,$ruolo,$gruppo,$dataRegistrazione){
    $this->id = $id;
    $this->id_utente = $id_utente;
    $this->password = $password;
    $this->ruolo = $ruolo;
    $this->gruppo = $gruppo;
    $this->dataRegistrazione = $dataRegistrazione;
  }
}



 ?>

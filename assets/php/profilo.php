<?php

/**
 *
 */
class Profilo extends Utente{
  public $id_utenteFK;
  public $nome;
  public $cognome;
  public $paese;
  public $citta;
  public $indirizzo;
  public $tel;
  public $mail;
  public $descrizione_breve;
  public $descrizione;
  public $formazione;
  public $skills;
  public $interessi;
  public $img;
  function __construct($id,$id_utente,$password,$ruolo,$gruppo,$dataRegistrazione,$id_utenteFK,$nome,$cognome,$paese,$citta,$indirizzo,$tel,$mail,$descrizione_breve,$descrizione,$formazione,$skills,$interessi,$img){
    parent::__construct($id,$id_utente,$password,$ruolo,$gruppo,$dataRegistrazione);
    $this->id = $id;
    $this->id_utenteFK = $id_utenteFK;
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->paese = $paese;
    $this->citta = $citta;
    $this->indirizzo = $indirizzo;
    $this->tel = $tel;
    $this->mail = $mail;
    $this->descrizione_breve = $descrizione_breve;
    $this->descrizione = $descrizione;
    $this->formazione = $formazione;
    $this->skills = $skills;
    $this->interessi = $interessi;
    $this->img = $img;
    // code...
  }
}

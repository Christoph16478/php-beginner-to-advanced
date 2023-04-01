<?php

class Pflanze
{
  protected $name;
  protected $beschreibung;
  protected $preis;

  public function nameausgeben()
  {
    return mb_strtoupper($this->name);
  }

  public function beschreibungausgeben()
  {
    return $this->beschreibung;
  }

  public function preisausgeben()
  {
    return number_format($this->preis, 2, ",", ".") . " Euro";
  }
}

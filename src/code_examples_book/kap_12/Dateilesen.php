<?php
class Dateilesen
{
  protected $datei;
  protected $dh;

  public function __construct($datei)
  {
    $this->datei = $datei;
  }

  public function oeffnen()
  {
    if (!file_exists($this->datei)) {
      throw new Exception("Datei gibts nicht");
    }
    if (!is_readable($this->datei)) {
      throw new Exception("nicht lesbar");
    }
    $this->dh = @fopen($this->datei, "r");
    if ($this->dh == false) {
      throw new Exception("ging nicht");
    }
  }

  public function lesen()
  {
    $zeile = fgets($this->dh, 1024);
    if ($zeile === false) {
      throw new Exception("Lesen gescheitert");
    }
    return htmlspecialchars($zeile);
  }

  public function schliessen()
  {
    fclose($this->dh);
  }
}
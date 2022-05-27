<?php

class Configuration{
  public $host;
  public $dbName;
  public $username;
  public $password;

  public function __construct($host, $dbName, $username, $password)
  {
    $this->host = $host;
    $this->dbName = $dbName;
    $this->username = $username;
    $this->password = $password;
  }
}

class Student{
  public $ime;
  public $prezime;
  public $jmbag;
  public $adresa;
  public $postanskiBroj;
  public $grad;
  public $godinaStudija;
  public $ostvareniECTSbodovi;
  public $prosjekOcjena;
  public $soba;

  function __construct($ime, $prezime, $jmbag, $adresa, $postanskiBroj, $grad, $godinaStudija, $ostvareniECTS, $prosjekOcjena, $soba)
  {
    $this->ime = $ime;
    $this->prezime = $prezime;
    $this->jmbag = $jmbag;
    $this->adresa = $adresa;
    $this->postanskiBroj = $postanskiBroj;
    $this->grad = $grad;
    $this->godinaStudija = $godinaStudija;
    $this->ostvareniECTSbodovi = $ostvareniECTS;
    $this->prosjekOcjena = $prosjekOcjena;
    $this->soba = $soba;
    
  }

  public function dohvatiStudente(){
    include 'connection.php';

    $query = "SELECT * FROM studenti INNER JOIN studentidodatnipodaci ON studenti.JMBAG = studentidodatnipodaci.JMBAG INNER JOIN studentipodacistudij ON studenti.JMBAG=studentipodacistudij.JMBAG INNER JOIN studentsoba ON studentsoba.JMBAG=studenti.JMBAG INNER JOIN sobe ON sobe.Id=studentsoba.IdSobe";
    $studentiSaSobama = array();
    $oResult = $oConnection->query($query);
    while($oRow = $oResult->fetch(PDO::FETCH_BOTH)){
        $studentiSaSobama[] = $oRow;
    }
    return json_encode($studentiSaSobama);
  }
  
}

class Soba{

  public $id;
  public $naziv;
  public $opis;
  public $kat;
  public $poljeStudenata;

  function __construct($id, $naziv, $opis, $kat, $poljeStudenata)
  {
      $this->id = $id;
      $this->naziv = $naziv;
      $this->opis = $opis;
      $this->kat = $kat;
      $this->poljeStudenata = $poljeStudenata;
  }

  public function dohvatiSobe(){
    include 'connection.php';

    $query = "SELECT * FROM sobe INNER JOIN studentsoba ON sobe.Id=studentsoba.IdSobe";
    $aSobe = array();
    $oResult = $oConnection->query($query);
    while($oRow = $oResult->fetch(PDO::FETCH_BOTH)){
        $aSobe[] = $oRow;
    }
    return json_encode($aSobe);

  }
}


?>
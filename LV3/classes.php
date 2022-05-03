<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    abstract class Zaposlenik{
        private $Ime="N/A";
        private $Prezime="N/A";
        private $OIB="N/A";

        public function __construct($ime = null, $prezime = null, $oib = null){
            
            if($ime)$this->Ime = $ime;
            if($prezime)$this->Prezime = $prezime;
            if($oib)$this->OIB = $oib;
        }

        public function getIme(){
            return $this->Ime;

        }
        public function getPrezime(){
            return $this->Prezime;
            
        }
        public function getOIB(){
            return $this->OIB;
            
        }
        public function Pozdrav(){
            echo "Hello ". $this->Ime. " ". $this->Prezime . "(".$this->OIB.")";
        }

        abstract public function Radi();

        private function ChechOIB($Oib){

            $oOibValidator = new OIB();

            if($oOibValidator->check($Oib)){
                echo  "OIB je ispravan!";
            }
            else{
                throw new Exception("OIB Nije ispravan");
            }

        }

        public function IspisProvjeraOIB($OIBB){
            $this->ChechOIB($OIBB);
        }
    }

    class OIB {

        /**
         * Provjeri ispravnost OIB-a.
         *
         * Napravljeno prema uputi: http://www.regos.hr/UserDocsImages/KONTROLA%20OIB-a.pdf
         *
         * @param string $oib Vrijednost OIB-a
         * @return boolean True ako je ispravan, inače false.
         *
         */
        public static function check( $oib )
        {

           if ( mb_strlen( $oib ) != 11 || ( ! is_numeric( $oib ) ) ) {
              return false;
           }
           $ostatak = 10;
           for ( $i = 0; $i < 10; $i++ ) {
              $trenutnaZnamenka = (int) $oib[$i];
              $zbroj = $trenutnaZnamenka + $ostatak;
              $meduOstatak = $zbroj % 10;
              if ( $meduOstatak == 0) {
                 $meduOstatak = 10;
              }
              $umnozak = $meduOstatak * 2;
              $ostatak = $umnozak % 11;
            }
           if ( $ostatak == 1 ) {
              $kontrolnaZnamenka = 0;
           }
           else {
              $kontrolnaZnamenka = 11 - $ostatak;
           }

           if ( ( (int) $oib[10] ) == $kontrolnaZnamenka ) {
              return true;
           }
           return false;
     
        }
     
     }

     class Nastavnik extends Zaposlenik{

        public function Radi(){
            echo $this->getIme()." ". $this->getPrezime()." idi izvoditi nastavu";
        }

     }

     class StrucnaSluzba extends Zaposlenik{

        public function Radi(){
            echo $this->getIme(). "". $this->getPrezime() ." idi obavljati administrativne poslove";
            
        }

     }

     interface INastavnik{
         public function DrziNastavu();
     }

     class Predavac extends Nastavnik implements INastavnik{

         public function DrziNastavu()
         {
             echo $this->getIme()." ".  $this->getPrezime() ."Idi izvoditi predavanja!";
         }
     }



     interface IAsistent{
         public function PripremiNastavu();
         public function CuvajIspit();
     }

     class Astistent extends Nastavnik implements IAsistent, INastavnik{
         public function PripremiNastavu()
         {
            echo $this->getIme()." ". $this->getPrezime()." Idi pripremi predavanja!";
         }
         public function CuvajIspit()
         {
            echo $this->getIme()." ". $this->getPrezime()." Idi čuvaj ispit!";
         }
         public function DrziNastavu()
         {
            echo $this->getIme()." ". $this->getPrezime(). " Idi izvodi vježbe";
         }

     }
    ?>
    
</body>
</html>
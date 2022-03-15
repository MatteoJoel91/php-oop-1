<?php

class Movie {

    public $titolo;
    public $durata;
    public $genere;

    public function __construct($titolo){
        $this->titolo = $titolo;
    }

    public function getDurata(){
        if($this->durata){
            return "Titolo del film: " . $this->titolo . '<br>' . " Durata del film: " . $this->durata . " minuti";
        }else{
            return "Titolo del film: " . $this->titolo . '<br>' . " Durata del film: Non specificato";
        }
    }

    public function getGenere(){
        if($this->genere){
            return " Genere: " . $this->genere;
        }else{
            return " Genere: Non specificato";
        }
    }

}

$firstMovie = new Movie('Star Wars: Il risveglio della Forza');
$firstMovie->durata = null;
$firstMovie->genere = 'Fantascienza, Fantasy, Avventura, Azione';
echo $firstMovie-> getDurata() . '<br>' . $firstMovie->getGenere();

echo '<br>';
echo '<br>';

$secondMovie = new Movie('Il signore degli anelli - Il ritorno del re');
$secondMovie->durata = '201';
$secondMovie->genere = 'Fantasy epico, Avventura, Narrativa fantasy';
echo $secondMovie-> getDurata() . '<br>' . $secondMovie->getGenere();
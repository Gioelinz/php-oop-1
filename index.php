<?php

class Movie
{
    public $id;
    public $title;
    public $genre;
    public $description;


    public function __construct($id, $title, $genre, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->description = $description;
    }

    public function getSubString()
    {
        return substr($this->description, 0, 50) . '...';
    }
}

$text1 = 'Dopo essere sopravvissuto ad un attacco inaspettato in territorio nemico, l\'industriale Tony Stark costruisce un\'armatura ad alta tecnologia e giura di proteggere il mondo nei panni di Iron Man.';
$text2 = 'L\'identità dell\'Uomo Ragno viene rivelata a tutti, e non riesce più a separare la sua vita normale dalla vita da supereroe, e quando chiede aiuto al Dottor Strange, lo costringe a scoprire cosa significa veramente essere l\'Uomo Ragno.';
$text3 = 'Un gruppo di adolescenti scopre l\'esistenza di un\'entità malvagia che si nutre delle paure degli esseri umani e che ha le sembianze di un pagliaccio di nome Pennywise. L\'essere, che dimora nelle profondità della rete fognaria, è solo uno dei volti della creatura millenaria nota come It, un mostro senza forma che si risveglia ciclicamente per mietere vittime tra i bambini della città. Per sconfiggerlo, i ragazzi devono restare uniti e mantenere vivo il sentimento di amicizia che li lega.';

$film1 = new Movie(1, 'Iron Man', 'action', $text1);
$film2 = new Movie(1, 'Spider-man No Way Home', 'action', $text2);
$film3 = new Movie(1, 'IT', 'horror', $text3);


//echo $film1->description;

echo $film3->getSubString();
echo '<br>' . $film2->getSubString();


var_dump($film1);
var_dump($film2);
var_dump($film3);

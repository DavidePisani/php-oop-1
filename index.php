<?php
class Movie {

    public $title;

    public $genre;

    public $duration;

    public $poster;

    public function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }   
   
    public function plot(){
        if($this->title === 'Avatar'){
            return "L'ex marine Jake Sully è stato reclutato per una missione sul pianeta Pandora con lo scopo di recuperare risorse naturali in esaurimento sulla Terra. Inaspettatamente si ritrova a voler proteggere il mondo magico al quale si sente stranamente legato.";
        }elseif( $this->title === 'World War Z'){
            return "Quando una pandemia di zombie minaccia di distruggere l'umanità, un ex investigatore americano è costretto a riprendere il lavoro per rintracciare la fonte dell'infezione e impedire il peggio";
        }
    }
}
    
$avatar = new Movie('Avatar', 'Fantascianza');
    $avatar->duration = '2.40h';
    $avatar->poster = 'https://pad.mymovies.it/filmclub/2008/03/090/locandina.jpg';

$worldwarz = new Movie('World War Z', 'Zombie');
    $worldwarz->duration = '1.56h'; 
    $worldwarz->poster ='http://aforismi.meglio.it/img/film/World_war_Z.jpg'; 
?>

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="card">
            <img src="<?php echo $avatar->poster ?>" alt="<?php echo $avatar->title ?>">
            <h2>Film: <?php echo $avatar->title; ?></h2>
            <div>Genere: <?php echo $avatar->genre; ?></div>
            <div>Trama: <?php echo $avatar->plot(); ?> </div>
            <div>Durata: <?php echo $avatar->duration;  ?></div>
        </div>
        
        <div class="card">
            <img src="<?php echo $worldwarz->poster ?>" alt="<?php echo $worldwarz->title ?>">
            <h2>Film: <?php echo $worldwarz->title; ?></h2>
            <div>Genere: <?php echo $worldwarz->genre; ?> </div>
            <div>Trama: <?php echo $worldwarz->plot(); ?> </div>
            <div>Durata: <?php echo $worldwarz->duration; ?></div>
        </div>
    </div>  
</body>
</html>



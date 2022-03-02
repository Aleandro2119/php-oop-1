<?php
class Movie
{
    public $title;
    public $author;
    public $year;
    public $vote;

    public function __construct($title, $author, $year, $vote)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->vote = $vote;
    }
}

$movie1 = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", 'Peter Jackson', 2001, 10);

$movie2 = new Movie('Il Signore degli Anelli - Le due torri', 'Peter Jackson', 2002, 9.5);

$movie3 = new Movie('Il Signore degli Anelli - Il ritorno del re', 'Peter Jackson', 2003, 10);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP-OOP</title>
</head>

<body>
    <header>
        <h1 class="text-center text-white p-3">FILM</h1>
    </header>

    <main>
        <div class="container">
            <div class="text-center m-5">
                <h2>Titolo: <?= $movie1->title ?></h2>
                <p>Diretto da: <?= $movie1->author ?></p>
                <p>Uscito nei cinema nel: <?= $movie1->year ?></p>
                <p>Voto: <?= $movie1->vote ?></p>

                <h2>Titolo: <?= $movie2->title ?></h2>
                <p>Diretto da: <?= $movie2->author ?></p>
                <p>Uscito nei cinema nel: <?= $movie2->year ?></p>
                <p>Voto: <?= $movie2->vote ?></p>

                <h2>Titolo: <?= $movie3->title ?></h2>
                <p>Diretto da: <?= $movie3->author ?></p>
                <p>Uscito nei cinema nel: <?= $movie3->year ?></p>
                <p>Voto: <?= $movie3->vote ?></p>
            </div>
        </div>
    </main>
</body>

</html>
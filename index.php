<?php 
include __DIR__.'/data/db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="d-flex justify-content-center align-items-center">
        <h1>Movies</h1>
    </header>

    <main>
        <div class="container d-flex justify-content-center gap-3 flex-wrap mt-5">
            <?php foreach($movies as $movie) { ?>
            <div class="card CPM-card-w text-center">
                <?php echo $movie->getImage(); ?>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $movie->title ?></h4>
                    <p>Voto: <?php echo $movie->vote / 2 ?></p>
                    <p>Genere: <?php foreach($movie->genre->genre as $genere){
                        echo " $genere ";
                    } ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>

    <footer class="d-flex justify-content-center align-items-center">
        Made with &hearts; by Christian
    </footer>




</body>
</html>
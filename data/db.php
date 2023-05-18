<?php
include __DIR__. '/../Models/Movie.php';
include __DIR__. '/../Models/Genre.php';

$movies = [
    new Movie('Il Padrino', 'The Godfather', 'en', '9.2', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg', new Genre (['Drammatico,', 'Thriller'])),
    new Movie('Via Col Vento', 'Gone With The Wind', 'en', '8.6','https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg', new Genre (['Sentimentale,', 'Storico'])),
    new Movie('Psycho', 'Psycho', 'en', '9.4', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg', new Genre (['Thriller'])),
    new Movie('Gravity', 'Gravity', 'en', '7.8', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg', new Genre (['Fantascienza,', 'Drammatico'])),
    new Movie('Toy Story - Il Mondo Dei Giocattoli', 'Toy Story', 'it', '9.0', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg', new Genre (['Animazione'])),
    new Movie('Pulp Fiction', 'Pulp Fiction', 'de', '9.2', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg', new Genre (['Cult,', 'Azione'])),
    new Movie('Forrest Gump', 'Forrest Gump', 'fr', '8.8', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg', new Genre (['Storico,', 'Commedia'])),
    new Movie('Guerre Stellari', 'Star Wars', 'en', '8.6', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fVqKwpvobwWy0P1UImZWIDuw4RI.jpg', new Genre (['Fantascienza'])),
    new Movie('E.T. - L\' extra-terrestre', 'E.T. The Extra-Terrestrial', 'en', '7.9', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qKMqJCldp5fPsuv6Vb0RbKY9K8U.jpg', new Genre (['Fantascienza'])),
    new Movie('Il Silenzio Degli Innocenti', 'The Silence Of The Lambs', 'en', '8.6', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8P4fZhbiqfeMk2btOeXLu0AKvBl.jpg', new Genre (['Horror,', 'Psicologico'])),
];

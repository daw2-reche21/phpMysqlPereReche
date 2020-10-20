<?php

$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9, "Porno"),
        (10, "Risas"),
        (11, "Deporte")';
mysqli_query($db,$query) or die(mysqli_error($db));


$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Jordi ENP", 1, 0),
        (8, "Mathew Mcgonahew", 0, 1),
        (9, "Manolo Ochoa", 0, 1)';
mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Pocahontas", 8, 2009, 1, 2),
        (5, "El fontanero", 9, 2020, 7, 8),
        (6, "Doctor Dollitel", 10, 2019, 9, 3)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Los datos han sido añadidos satisfactoriamente! :D';
?>
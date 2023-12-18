<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';

    $sql = 'SELECT joke.id, joke.joketext, author.name, author.email, category.categoryName FROM joke
    INNER JOIN author ON joke.authorid = author.id
    INNER JOIN category ON joke.categoryid = category.id';
    $jokes = $pdo->query($sql);
    $title = 'The joke list';
    $totalJokes = totalJokes($pdo);

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();

}
include 'templates/layout.html.php';


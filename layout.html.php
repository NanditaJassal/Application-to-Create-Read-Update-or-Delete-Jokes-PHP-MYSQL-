<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="jokes.css">
    <title><?=$title?></title>
</head>
<body>
    <header><h1> Internet Joke Database </h1></header>
    <nav>
        <ul>
            <li><a href = "index.php">Home </a></li>
            <li><a href = "jokes.php">The Joke List </a></li>
            <li><a href = "addjoke.php">Add a joke!</a></li>
        </ul>
    </nav>   
    <main>
        <?=$output?>
    </main>
    <footer>&copy; IJB 2022</footer> 
    
</body>
</html>
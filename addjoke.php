<?php
if(isset($_POST['joketext'])){
    try{
        include 'includes/DatabaseConnection.php';
     

        $sql = 'INSERT INTO joke SET 
        joketext =:joketext,
        jokedate= CURDATE(),
        authorid =:authorid,
        categoryid =:categoryid';
        
        $stmt = $pdo->prepare($sql); 
        $stmt->bindValue(':joketext', $_POST['joketext']); 
        $stmt->bindValue(':authorid', $_POST['authors']);
        $stmt->bindValue(':categoryid', $_POST['categories']); 
        $stmt->execute();
        header('location: jokes.php'); 

        
       
    }catch(PDOException $e){
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include 'includes/DatabaseConnection.php';
    $title = "Add a new joke";
    $sql_author = 'SELECT * FROM author';
    $authors = $pdo->query($sql_author);
    $sql_category = 'SELECT * FROM category';
    $categories = $pdo->query($sql_category);
    ob_start();
    include 'templates/addjoke.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';


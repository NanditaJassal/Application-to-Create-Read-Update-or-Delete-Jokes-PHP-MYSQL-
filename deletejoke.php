<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'DELETE FROM joke WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']); 
    $stmt->execute();
    header('location: jokes.php'); 
}catch (PDOException $e){
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();

}
include 'templates/layout.html.php';

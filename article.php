<?php
$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $get_id = htmlspecialchars($_GET['id']);
    $article = $pdo->prepare('SELECT * FROM article WHERE id = ?');
    $article->execute(array($get_id));
if($article->rowCount() == 1){
    $article = $article->fetch();
    $title = $article['title'];
    $content = $article['content'];
    }else{
    die("Cet article n'existe pas !");
}

}else{
    die('Error');
}

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1><?= $title ?></h1>
  <p><?= $content ?></p>

</body>
</html>
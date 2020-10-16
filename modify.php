<?php
$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
 
            $ins = $pdo->prepare('SELECT * FROM article WHERE id= :num');
            $ins->bindParam(':num', $_GET['article_modifier']);
            $ins->execute();

            $article = $ins->fetch();
           
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <form action="modifier.php" method="POST">
        <input type="hidden" name="id" value="<?= $article['id']?>">
        <input type="text" name="article_title" placeholder="title">
        <textarea name="article_content" id="" cols="30" rows="10" placeholder="content"></textarea>
        <input type="submit" name="article_modifier" value="Modifier">
    </form>

</body>

</html>
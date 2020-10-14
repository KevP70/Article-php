<?php
$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    if(isset($_POST['article_title'], $_POST['article_content'])){
        if(!empty($_POST['article_title']) AND !empty($_POST['article_content'])){  

            $article_title = htmlspecialchars($_POST['article_title']);
            $article_content = htmlspecialchars($_POST['article_content']);
            $ins = $pdo->prepare('INSERT INTO article (title, content, date_time_publication) VALUES (?, ?, NOW())');
            $ins->execute(array($article_title, $article_content));
            $message = 'Votre article a bien été posté';
            
        }else {
            $message = "Veuillez remplir tous les champs";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="article_title" placeholder="title">
        <textarea name="article_content" id="" cols="30" rows="10" placeholder="content"></textarea>
        <input type="submit">
        <?php if(isset($message)){echo $message;}?>
    </form>
</body>
</html>
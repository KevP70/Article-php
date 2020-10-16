<?php

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

if(isset($_POST['id'])){
        $id = $_REQUEST['id'];
        $id = intval($id);
        $title = $_POST['article_title'];
        $content = $_POST['article_content'];
        $article = $pdo->prepare("UPDATE article SET title = '$title', content = '$content' WHERE id = '$id'");
        var_dump($article);
        $article->execute();

}

    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier</title>
    </head>
    <body>
        
    </body>
    </html>
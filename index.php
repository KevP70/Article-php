<?php
$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
$article = $pdo->query('SELECT * FROM article ORDER BY date_time_publication DESC');

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <?php while($a = $article->fetch()){?>

        <li> <a href="article.php?id=<?= $a['id'] ?>"> <?= $a['title'] ?></a></li>

         <?php } ?>

    </ul>

</body>
</html>
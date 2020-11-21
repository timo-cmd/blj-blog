<?php include 'nav.php';
include 'initialize.php';

$stmt = $dbConnection->prepare('SELECT * FROM `posts`');
$stmt->execute([':id' => 1]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/blj-blog/styles.css">
</head>
<body>

    <?php
    foreach($stmt->fetchAll() as $posts) {
    echo '<p>' . $posts["created_by"]. '</p>';
    echo '<p>' . $posts["post_title"]. '</p>';
    echo '<p>' . $posts["post_text"] . '</p>';
    echo '<p>' . $posts["created_at"]. '</p>';
    }
    ?>

    <form action="/blj-blog/blogs.php" method="post">
        <div class="name"><br>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
        </div><br>
        
        <div class="post">
            <label for="name">Beitrag:</label><br>
            <textarea name="post" rows="15" cols="60"></textarea> 
        </div>
        <input class="submit" type="submit" value="Submit">       
    </form>
</body>
</html>

<!-- INSERT INTO posts (created_at, created_by, post_text, post_title) 
 VALUES(now(), 'Corinne', 'Das war ein toller Tag! So schönes Wetter!', 'Ausflug im BLJ') -->
<?php
    include 'nav.php';
    include 'initialize.php'
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

    $sqlQuery = $dbConnection->query("SELECT * FROM `blog_url`");
    $urls = $sqlQuery->fetchAll();
    echo '<h1>Blogs meiner BLJ-Kollegen</h1>';

    foreach($urls as $url) {
        $link = '<a href="' . $url["blogUrl"] . '" target="_blank">' . $url["blogAuthor"] . '\'s Blog' . '</a>' . '<br>';

    echo $link;
    }
    ?>
</body>
</html>
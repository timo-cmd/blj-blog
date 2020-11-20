<?php include 'nav.php';
include 'initialize.php';

$stmt = $pdo->prepare('SELECT * FROM `posts` WHERE id = :id');
$stmt->execute([':id' => 1]);

foreach($stmt->fetchAll() as $x) {
    var_dump($x);
    var_dump($_POST);
}
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
    <form action="/blj-blog/blogs.php" method="post">
        <div class="name">
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
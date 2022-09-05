<?php

$posts = [
    '29/09/2003' => [
        'title' => 'Buongiorno',
        'author' => 'Giancarlo',
        'text' => 'testo post'
    ],
    '23/12/2010' => [
        'title' => 'Buongiorno',
        'author' => 'Roberto',
        'text' => 'testo post'
    ],
    '23/11/2010' => [
        'title' => 'Buongiorno',
        'author' => 'Andrea',
        'text' => 'testo post'
    ],
];

$dates = array_keys($posts);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < count($dates); $i++) : 
            $date = $dates[$i];
            $post = $posts[$date];
        ?>
            <li>
                <h2><?= $date ?></h2>
                <h3><?= $post['title'] ?></h3>
                <p><?= $post['author'] ?></p>
                <p><?= $post['text'] ?></p>
            </li>
        <?php endfor; ?>
    </ul>
</body>
</html>
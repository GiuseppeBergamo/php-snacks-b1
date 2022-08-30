<?php

$games = ['Utah Jazz Denver Nuggets | 82 72', 'Golden State Warriors Washington Wixards | 77 87', 'Toronto Raptors Milwaukee Bucks | 80 69', 'Detroit Pistons Orlando Magic | 102 86'];
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
        <?php for ($i = 0; $i < count($games); $i++) : ?>
            <li><?= $games[$i] ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>
<?php

    $colors = ['yellow', 'green', 'royalblue', 'orangered', 'red'];
    $color = $_GET['color'] ?? '';

    if($color !== '') {
        if(in_array($color, $colors)) {
            setcookie('color', $color);
            header('Location: setting.php');
        }
    }

    if (isset($_COOKIE['color']) && in_array($_COOKIE['color'], $colors)) {
        $bgColor = $_COOKIE['color'];
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies color</title>

    <style>
        body {
            background-color: <?php echo $bgColor; ?>
        }
    </style>
</head>
<body>

    <a href="?color=yellow">Lien vers le jaune</a>
    <a href="?color=red">Lien vers le rouge</a>
    <a href="?color=royalblue">Lien vers le bleu</a>


</body>
</html>
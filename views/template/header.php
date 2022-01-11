<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php setcookie("cookieScreen", "1", time()+606024*7); ?>
    <?php if ($_COOKIE["cookieScreen"]==2) {?>
        <link rel="stylesheet" href="../assets/css/dark.css">
    <?php }?>
    <title>Super Rss Reader</title>
</head>

<body>
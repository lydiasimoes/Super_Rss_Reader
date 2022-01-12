<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../assets/css/style.css">
    <?php 
    if(!empty($screenMode)){
    setcookie("cookieScreen", $screenMode, time()+60*60*24*7);
    if ($_COOKIE["cookieScreen"] == 2) {?>
        <link rel="stylesheet" href="/../../assets/css/dark.css">
    <?php }}?>
    <title>Sports Actu</title>
</head>
<body>
    <?php include(dirname(__FILE__).'/navbar.php');?>

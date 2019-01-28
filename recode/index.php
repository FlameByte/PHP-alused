<!doctype html>
<html>
<head>
    <title>Koodi taaskasutamine</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Verdana, Geneva, sans-serif;
        }
        #pais {
            background-color: #6C9;
            line-height: 100px;
        }
        #jalus {
            background-color: #F93;
            line-height: 30px;
        }
    </style>
</head>
<body>
<header id="pais">
    <h1>Lorem Ipsum web</h1>
    <menu>
        <a href="index.php">Avaleht</a>
        <a href="index.php?leht=portfoolio">Portfoolio</a>
        <a href="index.php?leht=kaart">Kaart</a>
        <a href="index.php?leht=kontakt">Kontakt</a>
    </menu>
</header>
<div id="sisu">

<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte pole olemas!';
    }
} else {
?>

    <h2>Lorem ipsum</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia feugiat mi.</p>
</div>

<?php
}
?>

<footer id="jalus">
    <p>olenjalus</p>
</footer>
</body>
</html>
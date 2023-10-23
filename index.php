<?php
echo <<<HT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
//styling
<style>
    body {
        width: 100%;
        background-color: black;
    }

    .flex {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .rand {
        color: white;
        margin-top: 10px;
        border-style: solid;
    }

    .text {
        color: white;
        text-align: center;
    }
</style>
HT;
echo '<body>';
    include ("youtubeV.php");
    include ("vimeoV.php");

    //Erstellung eines Youtube- und Viemovideoobjekts
    //Der HTML Code der eingebetteten Videos wird in eigenen Variablen gespeichert
    $YT = new youtubeV('Geschichte', 'c7wXhkELL9UFucOb');
    $Yhtml = $YT->getHTML();
    $VI = new vimeoV('Enders', '875467859');
    $Vhtml = $VI->getHTML();

    #Youtube
    echo "<h2 class='text'> Youtube </h2>";
    //In einer For-schleife wird das selbe iFrame 5 mal ausgegeben
    echo "<div class='flex'>";
    for ($i = 0; $i < 5; $i++) {
        echo "<p class='rand'> $Yhtml </p>";
    }
    echo "</div>";

    #Vimeo
    echo "<h2 class='text'> Vimeo </h2>";
    //In einer For-schleife wird das selbe iFrame 5 mal ausgegeben
    echo "<div class='flex'>";
    for ($i = 0; $i < 5; $i++) {
        echo "<p class='rand'> $Vhtml </p>";
    }
    echo "</div>";
echo '</body>';
echo '</html>';
?>


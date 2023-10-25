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
        display: flex;
        flex-direction: column;
        color: white;
        margin-top: 10px;
        border-style: solid;
        text-align: center;
    }

    .text {
        color: white;
        text-align: center;
    }
</style>
HT;
echo '<body>';
echo '<h1 class="text"> Horror trailers </h1>';
    include ("src/youtubeV.php");
    include ("src/vimeoV.php");

    //Erstellung eines Youtube- und Viemovideoobjekte-Arrays
    $Yhtml = [new youtubeV('Halloween Park', 'https://www.youtube.com/embed/jLCxKM6f_20?si=ORna7PydNyzc7QJW'),new youtubeV('Der Exorzist', 'https://www.youtube.com/embed/mmfbLImFKu8?si=BwpcyqfRkjdU-5Jm'), new youtubeV('Saw X', 'https://www.youtube.com/embed/V5TnSxuIsa0?si=Vo8cLcaUFFquPxIc'), new youtubeV('Sinister', 'https://www.youtube.com/embed/_kbQAJR9YWQ?si=H8dQ10NxE_J_q4OS'), new youtubeV('fnaf', 'https://www.youtube.com/embed/5G0LbuoUqsA?si=c1HgWXbbZPCAKEv1')];
    $Vhtml = [new vimeoV('Lair', '645194318'), new vimeoV('The Graduate', '208950300'), new vimeoV('Trail', '708916255'), new vimeoV('Marked Ones', '843446040'), new vimeoV('Scarrafone', '685782281')];

    #Youtube
    echo "<h2 class='text'> Youtube </h2>";
    //In einer Foreach-schleife wird das Array mit den Youtube-Videos durchgegangen
    echo "<div class='flex'>";
    foreach ($Yhtml as $v) {
        //Der HTML Code und der Name der eingebetteten Videos wird in eigenen Variablen gespeichert und anschliesend ausgegeben
        $video = $v->getHTML();
        $name = $v->getName();
        echo "<p class='rand'>$video $name</p>";
    }
    echo "</div>";

    #Vimeo
    echo "<h2 class='text'> Vimeo </h2>";
    //In einer Foreach-schleife wird das Array mit den Vimeo-Videos durchgegangen
    echo "<div class='flex'>";
    foreach ($Vhtml as $v) {
        //Der HTML Code und der Name der eingebetteten Videos wird in eigenen Variablen gespeichert und anschliesend ausgegeben
        $video = $v->getHTML();
        $name = $v->getName();
        echo "<p class='rand'>$video $name</p>";
    }
    echo "</div>";
echo '</body>';
echo '</html>';
?>


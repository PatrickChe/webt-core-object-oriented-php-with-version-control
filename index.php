<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        width: 100%;
        background-color: black;
    }
    .flex{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .rand{
        color: white;
        margin-top: 10px;
        border-style: solid;
    }
    .text{
        color: white;
        text-align: center;
    }
</style>
<body>
<?php
include 'video.php';
$YT= new youtubeV('Geschichte', 'https://www.youtube.com/watch?v=9thqhgcDByA');
$Yhtml = $YT->getHTML();
$VI= new vimeoV('Enders', 'https://vimeo.com/875228916');
$Vhtml = $VI->getHTML();

#Youtube
echo "<h2 class='text'> Youtube </h2>";
echo "<div class='flex'>";
for($i = 0; $i < 5; $i++){
    echo "<p class='rand'> $Yhtml </p>";
}
echo "</div>";

#Vimeo
echo "<h2 class='text'> Vimeo </h2>";
echo "<div class='flex'>";
for($i = 0; $i < 5; $i++){
    echo "<p> $Vhtml </p>";
}
echo "</div>";
?>
</body>
</html>

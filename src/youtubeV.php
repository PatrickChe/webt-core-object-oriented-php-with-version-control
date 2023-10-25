<?php
require_once 'video.php';

//getHTML soll den iFrame Code für das Youtubevideo ausgeben
class youtubeV extends video{
    public function getHTML(): String {
        return "<iframe width='560' height='315' src='$this->source' 
            title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; 
            gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
    }
}
?>
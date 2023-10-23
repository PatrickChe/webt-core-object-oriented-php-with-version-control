<?php
require_once 'video.php';

//getHTML soll das eingebette Youtubevideo als HTML Code ausgeben
class youtubeV extends video{
    public function getHTML(): String {
        return "<iframe width='560' height='315' src='https://www.youtube.com/embed/asGx8V5-ir0?si=$this->source' 
            title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; 
            gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
    }
}
?>
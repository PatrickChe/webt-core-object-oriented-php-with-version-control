<?php
require_once 'video.php';

class vimeoV extends video{
    public function getHTML(): String {
        return "<iframe src='$this->source' width='560' height='315' frameborder='0' allow='autoplay; fullscreen; 
        picture-in-picture' allowfullscreen></iframe>";
    }
}
?>
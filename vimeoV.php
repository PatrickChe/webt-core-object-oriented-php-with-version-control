<?php
require_once 'video.php';

class vimeoV extends video{
    public function getHTML(): String {
        return "<iframe src='https://player.vimeo.com/video/$this->source' width='640' height='346' frameborder='0' allow='autoplay; fullscreen; picture-in-picture' allowfullscreen></iframe>";
    }
}
?>
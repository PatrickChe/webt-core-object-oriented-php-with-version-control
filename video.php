<?php
interface ivideo {
    public function getName() : String;
    public function getSource() : String;
    public function getHTML() : String;
}

abstract class video implements ivideo{
    public $name;
    public $source;
    public function __construct($name, $source) {
        $this->name = $name;
        $this->source = $source;
      }
      
      public function getName(): String {
        return $this->name;
    }

    public function getSource(): String {
        return $this->source;
    }
}

class youtubeV extends video{
    public function getHTML(): String {
        return "<iframe width='560' height='315' src='$this->source' 
            title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; 
            gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
    }
}

class vimeoV extends video{
    public function getHTML(): String {
        return "<iframe src='$this->source' width='560' height='315' frameborder='0' allow='autoplay; fullscreen; 
        picture-in-picture' allowfullscreen></iframe>";
    }
}
?>
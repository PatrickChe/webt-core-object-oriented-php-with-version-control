<?php
require_once 'ivideo.php';

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
?>
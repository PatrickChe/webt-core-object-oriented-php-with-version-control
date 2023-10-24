<?php
//Das require Statement wird benötigt, um auf das Interface zuzugreifen, da es sich in einem anderen File befindet
//das _once verhindert, dass das Interface mehrmals inkludiert wird
require_once 'ivideo.php';

abstract class video implements ivideo{
    public $name;
    public $source;
    /**
     * Konstruktor für Videoobjekte.
     *
     * @param string $name   Der Name des Videos.
     * @param string $source Die Quelle des Videos.
     */
    public function __construct($name, $source) {
        $this->name = $name;
        $this->source = $source;
      }
    
      //Gibt den Namen des Videos zurück.
      public function getName(): String {
        return $this->name;
    }

    //Gibt die Quelle des Videos zurück
    public function getSource(): String {
        return $this->source;
    }

    //Eine abstrakte Funktion zur Ausgabe vom HTML Code des iFrames
    //deklariert, aber nicht implementiert
    abstract public function getHTML(): String;
}
?>
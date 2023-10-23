<?php
interface ivideo {
    //Gibt den Namen, welcher beim Erstellen einer Videoinstanz mitgeben wird, aus
    public function getName() : String;
    //Gibt die Quelle, welche beim Erstellen des Objekts mitgegebn wird, aus
    public function getSource() : String;
    //Gibt den HTML Code für das embeded Video aus
    public function getHTML() : String;
}
?>
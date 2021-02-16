<?php

/** class Articolo
 * @author Marco
 * @copyright 2021 Marco
 */

 //classe
class Articolo{
    //attributi
    public $titolo;
    public $introduzione;
    public $corpo;
    public $immagine;
    public $categoria;
    public $link;
    public $boxAutore;


    //constructor
    public function __construct(string $titolo, string $introduzione, string $corpo, $immagine, string $categoria, string $link, string $boxAutore) {
        $this->titolo = $titolo;
        $this->introduzione = $introduzione;
        $this->corpo = $corpo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->link = $link;
        $this->boxAutore = $boxAutore;

    }


}

?>
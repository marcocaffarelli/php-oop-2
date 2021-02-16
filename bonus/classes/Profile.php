<?php

/** class profile extends user
 * @author Marco
 * @copyright 2021 Marco
 */
include_once __DIR__ . '/classes/User.php';

//sotto classe
class Profile extends User{
    //attributi
    public $immagineProfilo;
    public $descrizione;
    public $linkAccountTwitter;
    public $linkAccountFacebook;
    public $linkAccountInstagram;


    //constructor
    public function __construct(string $nome, string $cognome, string $nickname, string $email, string $password, $immagineProfilo, string $descrizione, string $linkAccountTwitter, string $linkAccountFacebook, string $linkAccountInstagram) {
        parent::__construct($nome, $cognome, $nickname, $email, $password);
        $this->immagineProfilo = $immagineProfilo;
        $this->descrizione = $descrizione;
        $this->linkAccountTwitter = $linkAccountTwitter;
        $this->linkAccountFacebook = $linkAccountFacebook;
        $this->linkAccountInstagram = $linkAccountInstagram;

    }
}
?>
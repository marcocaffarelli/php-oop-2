<?php

/** class User
 * @author Marco
 * @copyright 2021 Marco
 */

 //classe
class User{
    //attributi
    public $nome;
    public $cognome;
    public $nickname;
    public $email;
    public $password;

    //constructor
    public function __construct(string $nome, string $cognome, string $nickname, string $email, string $password) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword($password){
        return $this->password;
    }

}

?>
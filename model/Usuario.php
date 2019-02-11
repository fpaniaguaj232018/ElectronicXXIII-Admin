<?php

/**
 * Description of Usuario
 *
 * @author fernando.paniagua
 */
class Usuario {
    private $email;
    private $password;
    function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}

<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 06/11/2019
 * Time: 10:35
 */

namespace Auto;

class User
{
    private $id;
    private $username;
    private $mail;
    private $password;

    //Constructor
    public function __construct($id, $username, $mail, $password){
        $this->id = $id;
        $this->username = $username;
        $this->mail = $mail;
        $this->password = $password;
    }

    //Setters
    public function __setId($id){
        $this->username = $id;
    }
    public function __setUsername($username){
        $this->username = $username;
    }
    public function __setMail($mail){
        $this->mail = $mail;
    }
    public function __setPassword($password){
        $this->password = $password;
    }

    //Getters
    public function __getId(){
        return $this->id;
    }
    public function __getUsername(){
        return $this->username;
    }
    public function __getMail(){
        return $this->mail;
    }
    public function __getPassword(){
        return $this->password;
    }

}
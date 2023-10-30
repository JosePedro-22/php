<?php

Class Usuario{
    private $id;
    private $name;
    private $email;
    private $password;

    public function getId(){
        return $this->id;
    }
    public function setId($id_user){
        $this->id = trim($id_user);
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name_user){
        $this->name = ucwords($name_user);
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email_user){
        $this->email = strtolower(trim($email_user));
    }
    
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password_user){
        $this->password = $password_user;
    }
}

interface UsuarioDAO{
    public function add(Usuario $user);
    public function findAll();
    public function findById($id);
    public function findByEmail($email);
    public function update(Usuario $user);
    public function delete($id);
}
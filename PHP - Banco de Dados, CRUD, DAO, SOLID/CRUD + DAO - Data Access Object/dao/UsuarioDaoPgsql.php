<?php

require_once 'models/Usuario.php';

class UsuarioDaoPsql implements UsuarioDAO{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }   

    public function add(Usuario $user){

        $sql = $this->pdo->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');

        $sql->bindValue(':name', $user->getName());
        $sql->bindValue(':email', $user->getEmail());
        $sql->bindValue(':password', $user->getPassword());
        $sql->execute();

        $sql = $this->pdo->lastInsertId();

        return $user;
    }

    public function findAll(){
        $array = [];
        $sql = $this->pdo->query('SELECT * FROM users');
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();
            
            foreach($data as $item){
                $user = new Usuario();

                $user->setId($item['id']);
                $user->setName($item['name']);
                $user->setEmail($item['email']);

                $array[] = $user;
            }

        }
        return $array;
    }
    public function findByEmail($email){
        $sql = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $sql->bindValue(':email',$email);
        $sql->execute();

        if(!($sql->rowCount() > 0)){
            return false;
        }

        $data = $sql->fetch();

        $user = new Usuario();
        $user->setId($data['id']);
        $user->setName($data['name']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);

        return $user;
    }
    public function findById($id){
        $sql = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $sql->bindValue(':id',$id);
        $sql->execute();

        if(!($sql->rowCount() > 0)){
            return false;
        }

        $data = $sql->fetch();

        $user = new Usuario();
        $user->setId($data['id']);
        $user->setName($data['name']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);

        return $user;
    }
    public function update(Usuario $user){
        $sql = $this->pdo->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id');

        $sql->bindParam(':name', $user->getName());
        $sql->bindParam(':email', $user->getEmail());
        $sql->bindParam(':password', $user->getPassword());
        $sql->bindParam(':id', $user->getId());
        $sql->execute();

        return true;
    }
    public function delete($id){

        $sql = $this->pdo->prepare('DELETE FROM users WHERE id = :id');
        $sql->bindParam(':id', $id);
        $sql->execute();

        return true;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Edenn
 * Date: 23/02/2018
 * Time: 09:49
 */
session_start();

class User

{
    public function userRegister($email, $password, $nom, $prenom)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');

        $register = $pdo->prepare("INSERT INTO User (email, password, nom, prenom, privilege) 
                                        VALUES (:email, :password, :nom, :prenom, 1) ");
        $register->execute(array('email' => $email, 'password' => $password, 'nom' => $nom, 'prenom' => $prenom));
        return true;
    }

    public function userLogin($email, $password)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');
        $login = $register = $pdo->prepare("SELECT * FROM User WHERE email = :email AND password = :password");
        $login->execute([
            'email'=>$email,
            'password'=>$password
        ]);

        $userRow=$login->fetch(PDO::FETCH_ASSOC);
        if($userRow) {
            $_SESSION['privilege'] = $userRow['privilege'];
            $_SESSION['id'] = $userRow['id'];
            return $userRow;
        }else{
            return false;
        }
    }

    public function logout(){
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['privilege']);
        return true;
    }

    public function userExist($email)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');
        $statement = $pdo->prepare('SELECT * FROM User WHERE email = :email');
        $statement->execute(array('email' => $email));
        $userExist = $statement->fetch(PDO::FETCH_ASSOC);

        if($userExist)
            return true;
        else
            return false;
    }

    public function getInfos($id){
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');
        $statement = $pdo->prepare('SELECT * FROM User WHERE id = :id');
        $statement->execute(array('id' => $id));
        $userInfos = $statement->fetch(PDO::FETCH_ASSOC);

        if($userInfos)
            return $userInfos;
        else
            return false;
    }

    public function editUser($email, $nom, $prenom, $newPassword){
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');

        $checkPassword = $pdo->prepare('SELECT password FROM user WHERE id = :id');
        $checkPassword->execute([
            'id'=>$_SESSION['id']
        ]);
        $check = $checkPassword->fetch(PDO::FETCH_ASSOC);

        if($check['password'] == $newPassword){

            $edit = $pdo->prepare('UPDATE User SET email = :email, nom = :nom, prenom = :prenom WHERE id = :id');

            $edit->execute([
                'id' => $_SESSION['id'],
                'email' => $email,
                'nom' => $nom,
                'prenom' => $prenom
            ]);
        }else{
            $edit = $pdo->prepare('UPDATE User SET email = :email, nom = :nom, prenom = :prenom, password = :password WHERE id = :id');

            $edit->execute([
                'id' => $_SESSION['id'],
                'email' => $email,
                'nom' => $nom,
                'prenom' => $prenom,
                'password' => sha1($newPassword),
            ]);
        }
    }

    public function getAll(){
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');
        $statement = $pdo->prepare('SELECT * FROM User');
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($users)
            return $users;
        else
            return false;
    }

    public function delete($id){
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');
        $statement = $pdo->prepare('DELETE FROM User WHERE id = :id');
        $statement->execute(array('id' => $id));
    }

}
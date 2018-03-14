<?php

class Publication
{
    public function getAll(){
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');
        $statement = $pdo->prepare('SELECT * FROM Publication');
        $statement->execute();
        $publications= $statement->fetchAll(PDO::FETCH_ASSOC);

        if($publications)
            return $publications;
        else
            return false;
    }

    public function publicationInsert($titre, $corps, $image, $auteur){
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');

        $register = $pdo->prepare("INSERT INTO Publication (titre, image, corps, auteur) 
                                        VALUES (:titre, :image, :corps, :auteur) ");
        $register->execute(array('titre' => $titre, 'image' => $image, 'corps' => $corps, 'auteur' => $auteur));
        return true;
    }

    public function findById($id){
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');
        $statement = $pdo->prepare('SELECT * FROM Publication WHERE id = :id');
        $statement->execute(array('id' => $id));
        $publication= $statement->fetch(PDO::FETCH_ASSOC);

        if($publication)
            return $publication;
        else
            return false;
    }

}
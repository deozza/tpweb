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

}
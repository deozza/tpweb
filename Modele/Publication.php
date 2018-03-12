<?php

class Publication
{
    private $id;
    private $titre;
    private $image;
    private $corps;
    private $auteur;

    /**
     * Publication constructor.
     * @param $id
     * @param $titre
     * @param $image
     * @param $corps
     * @param $auteur
     */
    public function __construct($id, $titre, $image, $corps, $auteur)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->image = $image;
        $this->corps = $corps;
        $this->auteur = $auteur;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * @param mixed $corps
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function getAll(){
        $pdo = new PDO('mysql:host=localhost;dbname=tpweb', 'root', '');
        $statement = $pdo->prepare('SELECT * FROM Pubilcation');
        $statement->execute();
        $publications= $statement->fetchAll(PDO::FETCH_ASSOC);

        if($publications)
            return $publications;
        else
            return false;
    }

}
<?php
class Article
{
    private $name = 'nom';
    private $description = 'description';
    private $image = 'url';
    private $prix = 0;
    private $namedesigner = 'namedesigner';
    private $mail = 'mail';

    public function __construct($name = '', $description = '', $image='',$prix=0,$namedesigner='',$mail='')
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->prix = $prix;
        $this->namedesigner = $namedesigner;
        $this->mail = $mail;
    }

    /**
     * @return int
     */
    public function getPrix(): int
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix(int $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed|string $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed|string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed|string $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed|string
     */
    public function getNameDesigner()
    {
        return $this->namedesigner;
    }

    /**
     * @param mixed|string $namedesigner
     */
    public function setNameDesigner($namedesigner): void
    {
        $this->namedesigner = $namedesigner;
    }

    /**
     * @return mixed|string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed|string $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }
    /** add article to array
     * @param array $aCategory
     */
    public function addToList(&$aArticle)
    {
        array_push($aArticle, $this);
    }

  }

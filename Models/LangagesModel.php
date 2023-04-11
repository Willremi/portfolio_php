<?php

namespace App\Models;

class LangagesModel extends Model
{
    protected $id;
    protected $name;
    protected $image;
    protected $lien;

    public function __construct()
    {
        $this->table = 'langages';
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of lien
     */ 
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set the value of lien
     *
     * @return  self
     */ 
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }
}
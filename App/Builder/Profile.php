<?php

declare(strict_types=1);

namespace App\Builder;

include_once(__DIR__ . "\\..\\..\\autoload.php");

class Profile
{
    private $_firstname;
    private $_surname;
    private $_age;
    private $_weight;
    private $_pseudo;
    private $_description;
    public function __construct(
        string $prenom,
        string $nom
    ) {
        $this->_firstname = $prenom;
        $this->_surname = $nom;
    }

    public function display()
    {
        $displayString = "<div class=\"profile\">";
        $displayString .= "<p>" . $this->_surname . "</p>";
        $displayString .= "<p>" . $this->_firstname . "</p>";
        if ($this->_age)
            $displayString .= "<p>" . $this->_age . "</p>";
        if ($this->_weight)
            $displayString .= "<p>" . $this->_weight . "</p>";
        if ($this->_pseudo)
            $displayString .= "<p>" . $this->_pseudo . "</p>";
        if ($this->_description)
            $displayString .= "<p>" . $this->_description . "</p>";
        $displayString .= "</div>";
        return $displayString;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }
    public function getFirstname()
    {
        return $this->_firstname;
    }

    public function setSurname($surname)
    {
        $this->_surname = $surname;
    }
    public function getSurname()
    {
        return $this->_surname;
    }


    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->_weight = $weight;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }
}

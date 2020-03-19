<?php 

class Client {
    private $id;
    private $pseudo;
    private $password;
    private $name;
    private $adress;
    private $postal_code;
    private $city;
    private $email;

public function __construct($id, $pseudo, $password, $name, $adress, $postal_code, $city, $email) {
    $this->id = $id;
    $this->pseudo =$pseudo;
    $this->password = $password;
    $this->name = $name;
    $this->adress = $adress;
    $this->postal_code = $postal_code;
    $this->city = $city;
    $this->email = $email;

    }

    public function getId()
    {
        return $this->id;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAdress()
    {
        return $this->adress;
    }
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }
    public function getPostal_code()
    {
        return $this->postal_code;
    }
    public function setPostal_code($postal_code)
    {
        $this->postal_code = $postal_code;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}

<?php 



$userPiotr = new User('pioootr');
$userMaksiu = new User('maaaaaksiu');

$dom = new Dom();

$dom->addInamte($userMaksiu);

var_dump($dom->getInmates());

$dom->addInamte($userPiotr);


var_dump($dom->getInmates());

class User {
    public function __construct($name) {
        $this->name = $name;
    }
}

class Dom {
    public $inmates = [];

    public function addInamte(User $user)
    {
        return $this->inmates[] = $user;
    }

    public function getInmates(): array 
    {
        return $this->inmates;
    }
}
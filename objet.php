<?php

class Animal {
    private $name;

    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }

    public function getName(string $name) {
        return $this->name;
    }

}


class Lion extends Animal {


}

$lion = new Lion();
$lion->setName('Simba');

echo $lion->getName();
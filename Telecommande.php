<?php

class Telecommande {

    private $tv;

    public function __construct(Tv $tv)
    {
        $this->tv = $tv;
    }

    public function increaseVolume()
    {
        $this->tv->upVolume();
    }

    public function decreaseVolume()
    {
        $this->tv->downVolume();
    }


}


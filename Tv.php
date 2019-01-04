<?php

class Tv {

    private $volume = 0;

    public function upVolume()
    {
        $this->volume++;
    }

    public function downVolume()
    {
        $this->volume--;
    }

    public function getVolume()
    {
        return $this->volume;
    }

}
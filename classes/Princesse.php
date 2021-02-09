<?php

class Princesse extends Personnage
{
    private int $save = 0;

    public function __construct()
    {
        parent::__construct();
        $this->x = 450;
        $this->y = 450;
    }
}

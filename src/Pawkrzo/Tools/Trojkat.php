<?php

namespace Pawkrzo\Tools;

class Trojkat
{

   private $a;
    private $h;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getH()
    {
        return $this->h;
    }

    public function triangle()
    {
    return $this->a * $this->h * 0.5 ;    }
    
    public function setB($argument1)
    {
        // TODO: write logic here
    }
}

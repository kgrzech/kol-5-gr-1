<?php

namespace Majdan\Tools;

class Poletrojkata
{
    private $a;
    private $b;
   
    
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }


    public function area_of_triangle()
    {
        
        return ($this->a / 2) * $this->b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
}

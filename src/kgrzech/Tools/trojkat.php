<?php

namespace kgrzech\Tools;

class Trojkat
{

    private $a;
    private $h;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setH($b)
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

     function it_should_calculate_pole()
    {
    $this->setA(5)->setH(7)->pole()->shouldReturn(30);
    }
    public function pole()
    {
    return $this->a + $this->h;
    }    
  
}
   
    
    


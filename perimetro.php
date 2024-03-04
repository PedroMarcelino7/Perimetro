<?php

class Perimetro
{
    public $perimetro;

    function __construct()
    {
        $this->perimetro = 0;
    }


    public function Retangulo($h, $b)
    {
        $this->perimetro = 2 * ($h + $b);
    }

    public function Quadrado($a)
    {
        $this->perimetro = 4 * $a;
    }

    public function Paralelogramo($a, $b)
    {
        $this->perimetro = 2 * ($a + $b);
    }

    public function Trapezio($a, $b, $c, $B)
    {
        $this->perimetro = $a + $b + $c + $B;
    }


    function __destruct()
    {
        echo
            "<div class='d-flex justify-content-center align-items-center w-100 mt-5'>
                <h1 class='fw-normal fs-2'>Perímetro: <span class='fw-bold'>$this->perimetro</span> </h1>
            </div>";
    }
}


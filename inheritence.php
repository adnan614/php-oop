<?php

class Father
{
    public $a;
    public $b;
    function getValue($x, $y)
    {
        $this->a = $x;
        $this->b = $y;
    }
}

class Son extends Father
{
    public $c = 30;

    function add()
    {
        return $this->a + $this->b + $this->c;
    }
}

$yoo = new Son;

$yoo->getValue(10, 20);

echo $yoo->add();

?>
<?php


abstract class Test
{
    public function test()
    {
        return 'test';
    }
}

class Test1 extends Test
{
    private $a = "test1";
    public function test()
    {
        return 'test1';
    }

    public function getA()
    {
        return $this->a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }
}


$test1 = new Test1();
$test1->setA("test2");
$test2 = clone $test1;
$test2->setA("test3");
echo $test1->test();
echo "\n";
echo $test1->getA();
echo "\n";
echo $test2->test();
echo "\n";
echo $test2->getA();

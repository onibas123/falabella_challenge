<?php
use PHPUnit\Framework\TestCase;
//require_once('Multiples.php');
use Multiples_Numbers;

class Multiples_Numbers_Test extends TestCase
{
    public function testMod_SUCCESS()
    {
        //this test is success
        $mn = new Multiples_Numbers();
        $this->assertEquals(
            0,
            $mn->mod(9, 3)
        );
    }

    public function testMod_ERROR()
    {
        //this test is error
        $mn = new Multiples_Numbers();
        $this->assertEquals(
            0,
            $mn->mod(4, 3)
        );
    }

    public function testPush_SUCCESS()
    {
        //this test is success & not empty
        $mn = new Multiples_Numbers();
        $array = $mn->pushNumbers(1, 3);
        $this->assertSame(3, $array[count($array)-1]);
        $this->assertNotEmpty($array);

        return $array;
    }

    public function testPush_ERROR()
    {
        //this test is error
        $mn = new Multiples_Numbers();
        $array = $mn->pushNumbers(1, 2);
        $this->assertSame(3, $array[count($array)-1]);

        return $array;
    }

    public function testMCM_SUCCESS()
    {
        //this test is success
        $mn = new Multiples_Numbers();
        $this->assertEquals(
            15,
            $mn->calculate_mcm(3, 5)
        );
    }

    public function testMCM_ERROR()
    {
        //this test is error
        $mn = new Multiples_Numbers();
        $this->assertEquals(
            90,
            $mn->calculate_mcm(3, 30)
        );
    }

    public function testSetInit_SUCCESS()
    {
        //this test is success
        $mn = new Multiples_Numbers();
        $mn->setInit(9);
        $this->assertEquals(
            $mn->getInit(),
            9
        );
    }

    public function testSetIni_ERROR()
    {
        //this test is error
        $mn = new Multiples_Numbers();
        $mn->setInit(7);
        $this->assertEquals(
            1,
            7
        );
    }
}
?>
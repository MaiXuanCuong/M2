<?php
require "Cylinder.php";
use PHPUnit\Framework\TestCase;
class CylinderTest extends TestCase
{
    public $radius;
    public $height;
    public $expected;

    public function testGetVolume0And0()
    {
        $this->radius = 0;
        $this->height = 0;
        $this->expected = 0;

        $cylinder = new Cylinder();
      $result = $cylinder->getVolume($this->radius, $this->height);
        $this->assertEquals($this->expected, $result,"hi");
    }
    public function testGetVolume1And2()
    {
        $radius = 1;
        $height = 2;
        $expected = 18.84955592153876;

        $cylinder = new Cylinder();
  $result = $cylinder->getVolume($radius, $height);
        $this->assertEquals($expected, $result,"hi1");

    }
}
$CylinderTest = new CylinderTest();
echo $CylinderTest->testGetVolume0And0();
echo "<br>";
echo $CylinderTest->testGetVolume1And2();

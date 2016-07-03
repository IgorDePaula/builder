<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 22:32
 */

namespace AppTest;

use App\Peca\Roda,
    App\Peca\Motor,
    App\Peca\Porta;
use App\CarBuilder;

class CarBuilderTest extends \PHPUnit_Framework_TestCase
{
    private $obj = null;

    public function setUp()
    {
        parent::setUp();

        $this->obj = new CarBuilder();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    public function testCountPecasZero()
    {
        $this->assertCount(0, $this->obj->getPorta());
        $this->assertCount(0, $this->obj->getMotor());
        $this->assertCount(0, $this->obj->getRoda());
    }

    public function testCountPecasOne()
    {
        $this->obj->addPeca(new Porta());
        $this->obj->construct();
        $this->assertCount(1, $this->obj->getPorta());
        $this->obj->addPeca(new Motor());
        $this->obj->construct();
        $this->assertCount(1, $this->obj->getMotor());
        $this->obj->addPeca(new Roda());
        $this->obj->construct();
        $this->assertCount(1, $this->obj->getRoda());
    }

    public function testConstruct()
    {
        $this->obj = new CarBuilder();
        $this->obj->addPeca(new Motor());
        $this->obj->addPeca(new Roda());
        $this->obj->addPeca(new Roda());
        $this->obj->addPeca(new Roda());
        $this->obj->addPeca(new Roda());
        $this->obj->addPeca(new Porta());
        $this->obj->addPeca(new Porta());
        $this->obj->construct();
        $expected = "Aqui temos 1 motor.\nAqui temos 1 roda.\nAqui temos 1 roda.\nAqui temos 1 roda.\nAqui temos 1 roda.\nAqui temos 1 porta.\nAqui temos 1 porta.\n";
        $this->assertEquals($expected, $this->obj->getConstruction());
    }
}

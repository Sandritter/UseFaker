<?php
namespace Persistence\Backend\Faker\FakerBackend;

/**
 * Created by PhpStorm.
 * User: michaelsandritter
 * Date: 3/09/2015
 * Time: 2:55 PM
 */

use Faker\Generator;

class FakerBackendTest extends \PHPUnit_Framework_TestCase{

    private $faker;


    public function setUp()
    {
        $this->faker = new Generator();
    }

    /**
     * @test
     */
    public function shouldCreateFakerTest()
    {
        $this->assertInstanceOf('Faker\\Generator', $this->faker);
    }

}
<?php
namespace Persistence\Backend\Faker\FakerBackend;

/**
 * Created by PhpStorm.
 * User: michaelsandritter
 * Date: 3/09/2015
 * Time: 2:55 PM
 */

use Faker\Generator;

class FakerBackend {

    private $faker;

    public function createFaker()
    {
        /**
         * @var Generator
         */
        $this->faker = new Generator();
    }

}
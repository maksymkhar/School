<?php

namespace Com\Iesebre\Dam2\max\Persons;

/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person
{

    use Worker;

    /**
     * Especializacion
     * @var
     */
    public $specialization;

    /**
     * Teacher constructor.
     */
    public function __construct()
    {
    }


    /**
     * Imprimim el nom del professor.
     */
    public function render()
    {
        $this->type = "professor";
        parent::render();
    }


    /**
     * @return mixed
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * @param mixed $specialization
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }
}
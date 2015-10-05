<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person
{

    /**
     * Especializacion
     * @var
     */
    public $specialization;


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
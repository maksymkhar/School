<?php

namespace Com\Iesebre\Dam2\max\Persons;

/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 18:26
 */
trait Worker
{
    /**
     * Salari del treballador.
     * @var
     */
    public $salary;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}
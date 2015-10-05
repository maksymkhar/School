<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 17:50
 */
class Student extends Person
{

    /**
     * Grup de classe
     * @var
     */
    public $classroomGroup;

    /**
     * @return mixed
     */
    public function getClassroomGroup()
    {
        return $this->classroomGroup;
    }

    /**
     * @param mixed $classroomGroup
     */
    public function setClassroomGroup($classroomGroup)
    {
        $this->classroomGroup = $classroomGroup;
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 17:50
 */
class Student extends Person
{

    use Worker;

    /**
     * Indica si el estudiant fa dual o no
     * @var bool
     */
    public $dual = false;

    /**
     * Constructor
     * @param null $dual
     */
    public function __construct($dual=null)
    {
        if ($dual != null) { $this->dual = $dual; }
    }

    /**
     * Imprimim el nom del estudiant.
     */
    public function render()
    {
        $this->type = "estudiant";
        parent::render();
    }

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

    /**
     * @return boolean
     */
    public function isDual()
    {
        return $this->dual;
    }

    /**
     * @param boolean $dual
     */
    public function setDual($dual)
    {
        $this->dual = $dual;
    }

}
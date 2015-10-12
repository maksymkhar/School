<?php

namespace Com\Iesebre\Dam2\max\Curriculum;

/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 19:58
 */
class Course extends Study
{

    /**
     * Numero del curs (1e/2n)
     * @var
     */
    public $courseNumber;

    /**
     * Course constructor.
     * @param $courseName
     * @param $study
     */
    public function __construct($courseName, $study)
    {
        $this->courseNumber = $courseName;

        $this->studyName = $study->studyName;
        $this->studyFamily = $study->studyFamily;
    }

    /**
     * Imprimim resultats
     */
    public function render()
    {
        echo "El " . $this->courseNumber . " curs de " . $this->studyName . " és de la familia de " . $this->studyFamily . ".\n";
    }


    /**
     * @return mixed
     */
    public function getCourseNumber()
    {
        return $this->courseNumber;
    }

    /**
     * @param mixed $courseNumber
     */
    public function setCourseNumber($courseNumber)
    {
        $this->courseNumber = $courseNumber;
    }


}
<?php

namespace Com\Iesebre\Dam2\max\Curriculum;

use Com\Iesebre\Dam2\max\Persons\Teacher;

class StudyModule extends Course
{

    /**
     * Nom del módul.
     * @var
     */
    public $studyModuleName;

    /**
     * Professor el qual imparteix aquest módul.
     * @var
     */
    public $moduleTeacher;

    /**
     * StudyModule constructor.
     * @param $studyModuleName
     * @param $teacher
     * @param $course
     */
    public function __construct($studyModuleName, $teacher, $course)
    {
        $this->studyModuleName = $studyModuleName;
        $this->moduleTeacher = $teacher;

        $this->studyName = $course->studyName;
        $this->studyFamily = $course->studyFamily;

        $this->courseNumber = $course->courseNumber;
    }

    /**
     * Imprimim resultats.
     */
    public function render()
    {
        echo "El professor " . $this->moduleTeacher->getGivenName() . " dona classes de " . $this->studyModuleName . " que és un módul del " . $this->courseNumber
            . " curs de " . $this->studyName . " de la familia de " . $this->studyFamily . ".\n";
    }

    /**
     * @return mixed
     */
    public function getStudyModuleName()
    {
        return $this->studyModuleName;
    }

    /**
     * @param mixed $studyModuleName
     */
    public function setStudyModuleName($studyModuleName)
    {
        $this->studyModuleName = $studyModuleName;
    }

    /**
     * @return mixed
     */
    public function getModuleTeacher()
    {
        return $this->moduleTeacher;
    }

    /**
     * @param mixed $moduleTeacher
     */
    public function setModuleTeacher($moduleTeacher)
    {
        $this->moduleTeacher = $moduleTeacher;
    }

}
<?php

namespace Com\Iesebre\Dam2\max\Curriculum;

/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 20:01
 */
class StudySubModule extends StudyModule
{
    /**
     * Nom de la UF.
     * @var
     */
    public $studySubModuleName;

    /**
     * Duració de la UF.
     * @var
     */
    public $duration;

    /**
     * StudySubModule constructor.
     * @param $studySubModuleName
     * @param $hours
     * @param $studyModule
     */
    public function __construct($studySubModuleName, $hours, $studyModule)
    {
        $this->studySubModuleName = $studySubModuleName;
        $this->duration = $hours;

        $this->studyName = $studyModule->studyName;
        $this->studyFamily = $studyModule->studyFamily;

        $this->courseNumber = $studyModule->courseNumber;

        $this->studyModuleName =  $studyModule->studyModuleName;
        $this->moduleTeacher =  $studyModule->moduleTeacher;
    }

    /**
     * Imprimim resultats.
     */
    public function render()
    {
        echo "La " . $this->studySubModuleName . " del modul " . $this->studyModuleName . " del " . $this->courseNumber . " curs de " .
            $this->studyName . " de la familia de " . $this->studyFamily . " impartida per " . $this->moduleTeacher->getGivenName() .
            " té una durada de " . $this->duration . " hores" . ".\n";
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getStudySubModuleName()
    {
        return $this->studySubModuleName;
    }

    /**
     * @param mixed $studySubModuleName
     */
    public function setStudySubModuleName($studySubModuleName)
    {
        $this->studySubModuleName = $studySubModuleName;
    }
}
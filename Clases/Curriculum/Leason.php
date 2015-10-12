<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 12/10/15
 * Time: 19:17
 */

namespace Com\Iesebre\Dam2\max\Curriculum;


class Leason extends StudySubModule
{

    /**
     * Nom de la lliço.
     * @var
     */
    public $leasonName;

    /**
     * Grup d'estudiants que acudirà a la lliço.
     * @var
     */
    public $classroomGroup;

    /**
     * @param $leasonName
     * @param $studySubModule
     * @param $classroomGroup
     */
    public function __construct($leasonName, $studySubModule, $classroomGroup)
    {
        $this->leasonName = $leasonName;

        $this->classroomGroup = $classroomGroup;


        $this->studyName = $studySubModule->studyName;
        $this->studyFamily = $studySubModule->studyFamily;

        $this->courseNumber = $studySubModule->courseNumber;

        $this->studyModuleName =  $studySubModule->studyModuleName;
        $this->moduleTeacher =  $studySubModule->moduleTeacher;

        $this->studySubModuleName = $studySubModule->studySubModuleName;
        $this->duration = $studySubModule->duration;
    }

    /**
     * Imprimim resultats.
     */
    public function render()
    {
        echo "El professor " . $this->moduleTeacher->getGivenName() . " esta ensenyant " . $this->leasonName . " de la " . $this->studySubModuleName .
            " que té una durada de " .  $this->duration . " i es del modul " . $this->studyModuleName . " del " . $this->courseNumber . " curs  del curs de " .
            $this->studyName . " de la familia " . $this->studyFamily . ".\n";

        echo "Els alumes que asistiràn a aquesta liço són ";

        for ($i=0; $i<sizeof($this->classroomGroup->getStudents()); $i++)
        {
            if ($i == sizeof($this->classroomGroup->getStudents()) - 1)
            {
                echo $this->classroomGroup->getStudents()[$i]->getGivenName();
                continue;
            }

            echo $this->classroomGroup->getStudents()[$i]->getGivenName() . " i ";
        }

        echo "\n";
    }

    /**
     * @return mixed
     */
    public function getLeasonName()
    {
        return $this->leasonName;
    }

    /**
     * @param mixed $leasonName
     */
    public function setLeasonName($leasonName)
    {
        $this->leasonName = $leasonName;
    }

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
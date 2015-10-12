<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 12/10/15
 * Time: 19:10
 */

namespace Com\Iesebre\Dam2\max\Curriculum;


/**
 * Class Study
 * @package Com\Iesebre\Dam2\max\Curriculum
 */
class Study
{
    /**
     * Nom del curs.
     * @var
     */
    public $studyName;

    /**
     * Familia del curs.
     * @var
     */
    public $studyFamily;

    /**
     * Study constructor.
     * @param $studyName
     * @param $studyFamily
     */
    public function __construct($studyName, $studyFamily)
    {
        $this->studyName = $studyName;
        $this->studyFamily = $studyFamily;
    }

    /**
     * Imprimim resultats.
     */
    public function render()
    {
        echo $this->studyName . " és de la familia " . $this->studyFamily . ".\n";
    }

    /**
     * @return mixed
     */
    public function getStudyName()
    {
        return $this->studyName;
    }

    /**
     * @param mixed $studyName
     */
    public function setStudyName($studyName)
    {
        $this->studyName = $studyName;
    }

    /**
     * @return mixed
     */
    public function getStudyFamily()
    {
        return $this->studyFamily;
    }

    /**
     * @param mixed $studyFamily
     */
    public function setStudyFamily($studyFamily)
    {
        $this->studyFamily = $studyFamily;
    }
}
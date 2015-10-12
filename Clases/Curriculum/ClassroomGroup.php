<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 20:09
 */

namespace Com\Iesebre\Dam2\max\Curriculum;


use Com\Iesebre\Dam2\max\Persons\Student;

class ClassroomGroup
{

    /**
     * Matriu d'estudiants.
     * @var array
     */
    public $students = array();

    /**
     * ClassroomGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    /**
     * @param Student $student
     */
    public function addStudent(Student $student)
    {
        array_push($this->students, $student);
    }

    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

}
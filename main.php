<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 20:25
 */

require_once __DIR__ . "/vendor/autoload.php";

use Com\Iesebre\Dam2\max\Persons;
use Com\Iesebre\Dam2\max\Curriculum;

/*
 * Persona
 */
$person = new Persons\Person("persona");
$person->setGivenName("Palomo");
$person->render();

/*
 * Estudiant que fa dual.
 */
$student1 = new Persons\Student(true);
$student1->setGivenName("Jose");
$student1->setSalary(600);
$student1->render();

/*
 * Estudiant que NO fa dual.
 */
$student2 = new Persons\Student();
$student2->setGivenName("Marc");
$student2->render();

/*
 * Professor
 */
$teacher = new Persons\Teacher();
$teacher->setGivenName("Sergi Tur");
$teacher->setSalary(2000);
$teacher->render();

/*
 * Estudi
 */
$study = new Curriculum\Study("DAM", "Informatica");
$study->render();

/*
 * Curs
 */
$course = new Curriculum\Course("2n", $study);
$course->render();

/*
 * Modul professional
 */
$studyModule = new Curriculum\StudyModule("Programacio d'interficies", $teacher, $course);
$studyModule->render();

/*
 * UF
 */
$studySubModule = new Curriculum\StudySubModule("UF1", 50, $studyModule);
$studySubModule->render();

/*
 * Classe
 */
$students = [];
$classroomGroup = new Curriculum\ClassroomGroup($students);
$classroomGroup->addStudent($student1);
$classroomGroup->addStudent($student2);

/*
 * Lliço
 */
$leason = new Curriculum\Leason("PHP", $studySubModule, $classroomGroup);
$leason->render();

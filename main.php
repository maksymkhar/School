<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 20:25
 */
use Com\Iesebre\Dam2\max\Person\Person;
require "/home/max/Code/PHP/School/Clases/Persons/Person.php";

$person = new Person("persona");

$person->setGivenName("Palomo");

$person->render();
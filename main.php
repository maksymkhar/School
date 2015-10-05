<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 20:25
 */

require_once __DIR__ . "/vendor/autoload.php";

use Com\Iesebre\Dam2\max\Persons\Person;



//require "/home/max/Code/PHP/School/Clases/Persons/Person.php";

$person = new Person("persona");

$person->setGivenName("Palomo");

$person->render();
<?php

namespace Com\Iesebre\Dam2\max\Persons;

/**
 * Created by PhpStorm.
 * User: max
 * Date: 5/10/15
 * Time: 18:13
 */
class Person
{
    /**
     * Tipus de persona.
     * @var
     */
    public $type = "persona";

    /**
     * Identificador de la persona. (DNI,NIE)
     * @var
     */
    public $personalId;

    /**
     * Nom
     * @var
     */
    public $givenName;

    /**
     * Cognom 1
     * @var
     */
    public $sn1;

    /**
     * Cognom 1
     * @var
     */
    public $sn2;

    /**
     * Correu electronic
     * @var
     */
    public $email;

    /**
     * Adreça
     * @var
     */
    public $postalAddress;

    /**
     * Ciutat
     * @var
     */
    public $locality;

    /**
     * Codi postal
     * @var
     */
    public $postalCode;

    /**
     * Estat civil
     * @var
     */
    public $state;

    /**
     * Pais
     * @var
     */
    public $country;

    /**
     * Indica si la persona treballa o no.
     * @var
     */
    public $isWorker;

    /**
     * Salari de la persona.
     * @var
     */
    public $salary;


    /**
     * Person constructor.
     * @param string $type: Tipus de persona (persona, estudiant, professor)
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * Imprimim el nom de la persona.
     */
    public function render()
    {
        switch ($this->type)
        {
            case "persona":

                echo "La persona s'anomena " . $this->getGivenName() . ".\n";
                break;

            case "estudiant":

                if ($this->isWorker)
                {
                    if ($this->salary != null)
                    {
                        echo "El estudiant s'anomena " . $this->getGivenName() . ", fa dual i té un salari de " . $this->salary . ".\n";
                    }
                    else
                    {
                        echo "El estudiant s'anomena " . $this->getGivenName() . ", fa dual i no sobra res." . "\n";
                    }
                }
                else
                {
                    echo "El estudiant s'anomena " . $this->getGivenName() . " i no fa dual." . "\n";
                }
                break;

            case "professor":

                if ($this->salary != null)
                {
                    echo "El professor s'anomena " . $this->getGivenName() . " i té un salari de " . $this->salary . ".\n";
                }
                else
                {
                    echo "El professor s'anomena " . $this->getGivenName() . " i no sobra res." . "\n";
                }
        }

    }

    /**
     * @return mixed
     */
    public function getPersonalId()
    {
        return $this->personalId;
    }

    /**
     * @param mixed $personalId
     */
    public function setPersonalId($personalId)
    {
        $this->personalId = $personalId;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param mixed $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * @param mixed $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * @return
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * @param mixed $sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * @param mixed $postalAddress
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postalAddress = $postalAddress;
    }

    /**
     * @return mixed
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param mixed $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getIsWorker()
    {
        return $this->isWorker;
    }

    /**
     * @param mixed $isWorker
     */
    public function setIsWorker($isWorker)
    {
        $this->isWorker = $isWorker;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}
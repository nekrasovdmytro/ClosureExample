<?php

/*
 * @author Dmytro Nekrasov <nekrasov.dmytro@gmail.com>
 * */
class Person extends AbstractObject
{
    protected $name;

    /*
     * @var integer $birthday, should be Unix Timestamp value
     * */
    protected $birthday;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function __toString()
    {
        return "name : " . $this->getName() . " | id : " . $this->getId() . "\n";
    }
}
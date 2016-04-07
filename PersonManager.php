<?php

/*
 * @author Dmytro Nekrasov <nekrasov.dmytro@gmail.com>
 * */
class PersonManager
{
    public function setUniqueId(Person $person)
    {
        $id = $this->generateId();

        $cl = Closure::bind($this->setId($id), $person, 'Person');

        $cl->__invoke(); // or just $cl();

        return $person;
    }

    protected function generateId()
    {
        return uniqid();
    }

    protected function setId($id)
    {
        return $setId = function() use ($id){
            $this->id = $id;
        };
    }
}
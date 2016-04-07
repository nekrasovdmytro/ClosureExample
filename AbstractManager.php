<?php

abstract class AbstractManager
{
    public function setUniqueId(AbstractObject $object)
    {
        $id = $this->generateId();

        $cl = Closure::bind($this->setId($id), $object, 'AbstractObject');

        $cl->__invoke(); // or just $cl();

        return $object;
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
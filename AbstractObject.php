<?php

abstract class AbstractObject
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
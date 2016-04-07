<?php

include "AbstractObject.php";
include "Person.php";

include "AbstractManager.php";
include "PersonManager.php";


$p = new Person();
$p->setName("Tim");

$pManager = new PersonManager();

$patient = $pManager->setUniqueId($p);

echo $patient;
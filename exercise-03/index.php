<?php
require('Person.php');
require('PeopleList.php');

$person = new Person("Ivan", 30);
$serialized = serialize($person);
echo $serialized . PHP_EOL;
$modified = str_replace('4:"Ivan', '5:"Fedor', $serialized);
$unserialized = unserialize($modified);
$unserialized->age = 20;
echo $unserialized . PHP_EOL;

$people = new PeopleList($person, new Person('Sasha', 25), new Person('Anna', 32));
foreach($people as $p) {
    echo $p . PHP_EOL;
}

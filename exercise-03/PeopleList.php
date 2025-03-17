<?php
class PeopleList implements IteratorAggregate
{
    private $people;

    public function __construct(...$people)
    {
        $this->people = [...$people];
    }

    public function addPerson(Person $person) : void {
        $this->people[] = $person;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->people);
    }
}

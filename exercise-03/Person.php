<?php
class Person
{
    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($prop): mixed
    {
        if (isset($this->$prop)) {
            return $this->$prop;
        }
        return null;
    }

    public function __set($prop, $value): void
    {
        if (isset($this->$prop)) {
            $this->$prop = $value;
        }
    }

    public function __toString()
    {
        return "$this->name, $this->age";
    }
}

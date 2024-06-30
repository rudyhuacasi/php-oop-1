<?php
// Definizione della classe Actor
class Actor
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getActorInfo()
    {
        return $this->name . ', ' . $this->age . ' years old';
    }
}

?>
<?php

class Employee {
    public $name;
    public $age;
    public $salary;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSalary(string $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function penggajian(): int
    {
        return $this->salary * 30;
    }
}

class Rider extends Employee {
    //code
    public function setName(string $name)
    {
        $this->name = 'Bapak ' . $name;
    }
}

class Finence extends Employee {
    public function penggajian(): int
    {
        return ($this->salary * 30) + 1000000;
    }
}

$emp = new Rider;
$emp->setSalary(300000);
$emp->setName('Selamet');
echo $emp->getName() . "\n";
echo $emp->penggajian();

echo "\n";

$fnc = new Finence;
$fnc->setName('Ivy');
$fnc->setSalary(500000);
echo $fnc->getName() . "\n";
echo $fnc->penggajian();
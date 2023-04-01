<?php

class Animal {
    public $name;
    public int $legs = 2;
    public bool $cold_blooded = false;

    //method
    public function introduce(?string $sound = null): void
    {
        // if (!$this->name) {
        //     $name = "Kucing If Panjang";
        // }
        // $name = !$this->name ? "Kucing Elvis" : $this->name;
        $name = $this->name ?? "Kucing Coalesing";
        echo "Hello, my name is {$name} and I have {$this->legs} legs \n";

        echo $this->printSound($sound);
    }

    public function printSound(?string $sound): void
    {
        if ($sound) {
            echo $sound;
        }

        echo "I have no sound";
    }
}



$cat = new Animal();
// $cat->name = 'ypru';
$cat->legs = 4;
$cat->cold_blooded = true;

$cat->introduce();

// echo "\n";

// $dog = new Animal();
// $dog->name = "K";
// $dog->legs = 4;
// $dog->cold_blooded = true;

// $dog->introduce('Wooof!');
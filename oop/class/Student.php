<?php

class Student {
    public $name; 
    public $age;
    public $score;
    private $standart = 75;

    public function __construct($name, $age, $score)
    {
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;
    }

    public function rapot()
    {
        $text = $this->score >= $this->standart ? 
                "Selamat {$this->name}, kamu lulus, dengan predikat {$this->alpaScore()}" : 
                "Maaf {$this->name}, kamu tidak lulus";
        // if ($this->score >= $this->standart) {
        //     echo "Selamat {$this->name}, kamu lulus, dengan predikat {$this->alpaScore()}";
        // } else {
        //     echo "Maaf {$this->name}, kamu tidak lulus";
        // }

        echo $text;
    }

    public function setSchedule()
    {
        //code
    }

    private function alpaScore(): String
    {
        $alpa = '';

        if($this->score >= 90) {
            $alpa = 'A';
        } elseif($this->score >= 80) {
            $alpa = 'B';
        } elseif($this->score >= 70) {
            $alpa = 'C';
        } elseif($this->score >= 60) {
            $alpa = 'D';
        } else {
            $alpa = 'E';
        }

        return $alpa;
    }
}

$students = [
    [
        'name' => 'Arya',
        'age' => 17,
        'score' => 80,
    ],
    [
        'name' => 'Edwin',
        'age' => 17,
        'score' => 50
    ],
    [
        'name' => 'Adit',
        'age' => 17,
        'score' => 90
    ],
];

foreach ($students as $value) {
    $student = new Student($value['name'], $value['age'], $value['score']);
    // $student->name = $value['name'];
    // $student->age = $value['age'];
    // $student->score = $value['score'];
    $student->rapot();
    echo "\n";
}

// $student = new Student();
// $student->name = 'Arya';
// $student->age = 17;
// $student->score = 80;

// $student->rapot();

// echo "\n";

// $student = new Student();
// $student->name = 'Edwin';
// $student->age = 17;
// $student->score = 50;

// $student->rapot();

// echo "\n";

// $student = new Student();
// $student->name = 'Adit';
// $student->age = 17;
// $student->score = 90;

// $student->rapot();
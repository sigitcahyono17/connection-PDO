<?php
class Student {
    public $firstname;
    public $lastname;
    public $address;
    public $age;

    public function fullName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
        // return $this->firstname . ' ' . $this->lastname;
    }
}

$student = new Student;
$student->firstname = 'Arya';
$student->lastname = 'Saputra';
$student->address = 'Jl Kebun jeruk';
$student->age = 17;

$student2 = new Student;
$student2->firstname = 'Edwin';
$student2->lastname = 'Saputra';
$student2->address = 'Jalan jalan sendirian';
$student2->age = 23;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Class</title>
</head>
<body>
    <h1>Student</h1>
    <table>
        <tr>
            <th>Name</th>
            <td><?= $student->fullName() ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?= $student->address ?? 'muncul ini' ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td></td>
        </tr>
    </table>
</body>
</html>
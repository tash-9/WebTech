<?php
header("Content-Type: application/json");

$student = [
    "name" => "Tasfia Islam Raisha",
    "id" => "23-55710-3",
    "department" => "Bachelors of Science in Computer Science and Engineering",
    "cgpa" => 3.5
];

echo json_encode($student);
?>
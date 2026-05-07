<?php

// Indexed array of student marks
$marks = array(75, 45, 88, 60, 35);

// Display all marks using foreach loop
echo "Student Marks:<br>";

foreach ($marks as $mark) {
    echo $mark . "<br>";
}

// Total marks
$total = 0;

foreach ($marks as $mark) {
    $total = $total + $mark;
}

// Built-in array function count()
$count = count($marks);

// Type casting
$average = (float) $total / $count;

// Maximum and minimum marks
$maximum = max($marks);
$minimum = min($marks);

// Display total, average, maximum, minimum
echo "<br>Total Marks: " . $total;
echo "<br>Average Marks: " . $average;
echo "<br>Maximum Marks: " . $maximum;
echo "<br>Minimum Marks: " . $minimum;

// Count pass and fail using if-else
$pass = 0;
$fail = 0;

foreach ($marks as $mark) {
    if ($mark >= 50) {
        $pass++;
    } else {
        $fail++;
    }
}

echo "<br><br>Passed Students: " . $pass;
echo "<br>Failed Students: " . $fail;

// Associative array of student details
$student = [
    "name" => "Raisha",
    "id" => "23-55710-2",
    "cgpa" => 3.51
];

echo "<br><br>Student Details:<br>";

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

// User-defined function to calculate average
function findAverage($total, $count) {
    return (float) $total / $count;
}

// Calling the function
$avg = findAverage($total, $count);

echo "<br>Average from Function: " . $avg;

// String operations
$name = $student["name"];

echo "<br><br>Name in Uppercase: " . strtoupper($name);
echo "<br>Length of Name: " . strlen($name);

// Built-in array function sort()
sort($marks);

echo "<br><br>Sorted Marks:<br>";

foreach ($marks as $mark) {
    echo $mark . "<br>";
}

// Superglobal variable $_GET
if (isset($_GET['name'])) {
    $inputName = $_GET['name'];
    echo "<br>Name from URL: " . $inputName;
} else {
    echo "<br>No name provided in URL.";
}

?>
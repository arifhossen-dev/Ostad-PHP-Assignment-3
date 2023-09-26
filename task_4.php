<?php
$studentGrades = [
  'Kotha' => [
    'Math'    => 55,
    'English' => 65,
    'Science' => 70
  ],
  'Akhi' => [
    'Math'    => 85,
    'English' => 75,
    'Science' => 71
  ],
  'Joni' => [
    'Math'    => 60,
    'English' => 85,
    'Science' => 65
  ],
];

function getAverageGrade(array $pram)
{
  foreach ($pram as $key => $students) {
    $numbers = array_values($students);
    $averageGrade = calculateAverage($numbers);
    echo "{$key}'s average grade is {$averageGrade}.\n";
  }
}

function calculateAverage(array $marks) {
  return array_sum($marks)/ count($marks);
}

getAverageGrade($studentGrades);
<?php

function isValidRange($mark) {
    return  $mark < 0 || $mark > 100;

}

function isFail($mark) {
    return  $mark < 33;
}


function gradeCalculation($mark) {    
    if(isValidRange($mark)) {
        return "User Enters Invalid Marks";
    }

    if(isFail($mark)) {
        return  "Fail";
    }

    switch($mark) {
        case ($mark >= 80):
            return  "A+";
        case ($mark >= 70) :
            return "A";
        case  ($mark >= 60) :
            return "A-";
        case  ($mark >= 50) :
            return "B";
        case ($mark >= 40) :
            return "C";
        default:
            return "D";
    }
}

// Function to calculate total marks, average, and grade
function calculateResult($marks) {
    
    //Validate mark range(0 - 100)
    foreach ($marks as $subject => $mark) {
        if(isValidRange($mark)) {
            return "Mark range is invalid for $subject.";
        }
    }

    foreach ($marks as $subject => $mark) {
        if(isFail($mark)) {
            return "Student has failed as they scored below 33 in one or more subjects.";
        }
    }

    // Calculate total and average marks
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    $grade = gradeCalculation($averageMarks);

    // output the result
    return "Total Marks: $totalMarks \nAverage Marks: $averageMarks\nGrade: $grade";

}



// Case 2: Student Fails in One Subject
$studentMarks = [
    'Math' => 90,
    'English' => 95,
    'Science' => 85,
    'History' => 80,
    'Geography' => 92
];

// echo gradeCalculation(50);
echo calculateResult($studentMarks);
<?php

// Function to check if the mark is within the valid range (0-100)
function isMarkRange($mark) {
    return  $mark >= 0 && $mark <= 100;
}

// Function to check if the mark is a failing mark (less than 33)
function isFailing($mark) {
    return  $mark < 33;
}

// Function to validate all marks in a subject array
function validateMarks($marks) {
    foreach ($marks as $subject => $mark) {
        if (!isMarkRange($mark)) {
            return  "Mark range is invalid for $subject.";
        }
    }
    return true;
}

// Function to check for any  failing marks in a subject array
function checkForFailingMarks($marks) {
    foreach ($marks as $subject => $mark) {
        if (isFailing($mark)) {
            return  "Failing mark found in $subject with mark $mark.";
        }
    }
    return true;
}


// Function to calculate the grade based on the mark
function calculateGrade($mark) {    
    if(!isMarkRange($mark)) {
        return "User Enters Invalid Marks";
    }

    if(isFailing($mark)) {
        return  "Fail";
    }

    switch (true) {
        case ($mark >= 80):
            return "A+";
        case ($mark >= 70):
            return "A";
        case ($mark >= 60):
            return "A-";
        case ($mark >= 50):
            return "B";
        case ($mark >= 40):
            return "C";
        default:
            return "D";
    }
}


//Function to calculate total marks
function calculateTotalMarks($marks) {
    return array_sum($marks);
}


// function to calculate average marks
function  calculateAverageMarks($marks) {
    $totalMarks = calculateTotalMarks($marks);
    return $totalMarks / count($marks);
}


// Function to calculate total marks, average, and grade for a set of subjects
function calculateStudentResult($marks) {
    $validityCheck = validateMarks($marks);
    if ($validityCheck !== true) {
        return $validityCheck;
    }

    $failingCheck = checkForFailingMarks($marks);
    if($failingCheck !== true) {
        return $failingCheck;
    }
    
    $totalMarks = calculateTotalMarks($marks);
    $averageMarks = calculateAverageMarks($marks);
    $grade = calculateGrade($averageMarks);

    return "Total Marks: $totalMarks<br>Average Marks: $averageMarks<br>Grade: $grade";
}


// Test Cases

// Case 1: Normal Pass with Grade B
$studentMarks1 = [
    'Math' => 45,
    'English' => 55,
    'Science' => 60,
    'History' => 70,
    'Geography' => 50
];
echo "<h3>Test Case 1:</h3>" . calculateStudentResult($studentMarks1) . "<br><br>";

// Case 2: Student Fails in One Subject
$studentMarks2 = [
    'Math' => 25,  // Below 33
    'English' => 55,
    'Science' => 60,
    'History' => 70,
    'Geography' => 50
];
echo "<h3>Test Case 2:</h3>" . calculateStudentResult($studentMarks2) . "<br><br>";

// Case 3: Invalid Marks (Out of Range)
$studentMarks3 = [
    'Math' => 105,  // Invalid mark (>100)
    'English' => 55,
    'Science' => 60,
    'History' => 70,
    'Geography' => 50
];
echo "<h3>Test Case 3:</h3>" . calculateStudentResult($studentMarks3) . "<br><br>";

// Case 4: High Marks, Grade A+
$studentMarks4 = [
    'Math' => 90,
    'English' => 95,
    'Science' => 85,
    'History' => 80,
    'Geography' => 92
];
echo "<h3>Test Case 4:</h3>" . calculateStudentResult($studentMarks4) . "<br><br>";

// Case 5: Low Marks, Grade D
$studentMarks5 = [
    'Math' => 33,
    'English' => 35,
    'Science' => 38,
    'History' => 34,
    'Geography' => 36
];
echo "<h3>Test Case 5:</h3>" . calculateStudentResult($studentMarks5) . "<br><br>";

// Case 6: All Subjects with Perfect Marks
$studentMarks6 = [
    'Math' => 100,
    'English' => 100,
    'Science' => 100,
    'History' => 100,
    'Geography' => 100
];
echo "<h3>Test Case 6:</h3>" . calculateStudentResult($studentMarks6) . "<br><br>";
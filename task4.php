<?php
/*
Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science. Write a PHP function 
which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

// Task 4: Multidimensional Array  

$studentGrades = array(
    'student1' => array(
        'math' => 84,
        'english' => 85,
        'science' => 86,
    ),
    'student2' => array(
        'math' => 80,
        'english' => 82,
        'science' => 84,
    ),
    'student3' => array(
        'math' => 82,
        'english' => 83,
        'science' => 84,
    )
);
print_average_grades( $studentGrades );

function print_average_grades( $grades ) {
    foreach($grades as $grade) {
        $average = ($grade['math'] + $grade['english'] + $grade['science']) / 3;
        echo 'Average: ' . $average . '<br>';
    }
}

?>


<?php
// Initialize a multidimensional array for the weekly schedule
$schedule = [
    [
        'name' => 'John',
        'shift' => 'Morning',
        'hours' => [8, 8, 8, 8, 8, 0, 0] // Hours worked each day (Mon-Sun)
    ],
    [
        'name' => 'Alice',
        'shift' => 'Evening',
        'hours' => [6, 6, 6, 6, 6, 4, 4]
    ],
    [
        'name' => 'Mark',
        'shift' => 'Night',
        'hours' => [9, 9, 9, 9, 9, 0, 0]
    ]
];

// Calculate and display total hours worked by each employee
foreach ($schedule as $employee) {
    $totalHours = array_sum($employee['hours']);
    echo "Employee: {$employee['name']} <br/>";
    echo "Shift: {$employee['shift']}<br/>";
    echo "Total Hours Worked: $totalHours<br/>";
    echo "-----------------------------<br/>";
}
?>
<?php
// Define arrays to store employee names, shifts, and work hours
$employees = ["Alice", "Bob", "Charlie", "David"];
$shifts = ["Morning", "Afternoon", "Evening", "Night"];
$workHours = [
    "Morning" => 8,
    "Afternoon" => 8,
    "Evening" => 8,
    "Night" => 8
];

// Initialize an array to store assigned shifts
$assignedShifts = [];

// Function to assign shifts to employees
function assignShifts($employees, $shifts, &$assignedShifts) {
    foreach ($employees as $employee) {
        foreach ($shifts as $shift) {
            if (!isset($assignedShifts[$shift])) {
                $assignedShifts[$shift] = $employee;
                break;
            }
        }
    }
}

// Function to check for shift conflicts
function checkConflicts($assignedShifts) {
    $conflicts = [];
    foreach ($assignedShifts as $shift => $employee) {
        if (count(array_keys($assignedShifts, $employee)) > 1) {
            $conflicts[] = $employee;
        }
    }
    return $conflicts;
}

// Assign shifts to employees
assignShifts($employees, $shifts, $assignedShifts);

// Check for conflicts
$conflicts = checkConflicts($assignedShifts);

if (empty($conflicts)) {
    echo "Shifts assigned successfully:\n";
    foreach ($assignedShifts as $shift => $employee) {
        echo "$employee is assigned to $shift shift.\n";
    }
    
} else {
    echo "Conflicts detected for the following employees:\n";
    foreach ($conflicts as $conflict) {
        echo "$conflict has overlapping shifts.\n";
    }
}
?>

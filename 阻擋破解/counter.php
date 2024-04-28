<?php
$counterFile = 'visit_counter.txt';

// Read the current visit count from the text file
$visitCount = (int)file_get_contents($counterFile);

// Increment the visit count
$visitCount++;

// Save the updated count back to the text file
file_put_contents($counterFile, $visitCount);

// Return the visit count as a JSON response
echo json_encode(['visitCount' => $visitCount]);
?>
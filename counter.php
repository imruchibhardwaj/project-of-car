<?php
// Read the current count from the file (or initialize to 0 if not found)
$count = file_get_contents("counter.txt") ?: 0;

// Increment the count
$count++;

// Save the updated count back to the file
file_put_contents("counter.txt", $count);

// Display the count in the HTML
echo $count;
?>
<?php

// Declaring variables for numbers and message for later
$numbers = "";
$message = "";

// Getting the minimum and maxiumum input 
$minNumber = intval($_POST["min-number"]);
$maxNumber = intval($_POST["max-number"]);

// Initializing counter
$counter = $minNumber;

// If statement to ensure that maximum is greater than minumum.
if ($minNumber > $maxNumber) {
  $message = "Ensure that minimum value is less than or equal to maximum value.";
}
  
// Else, make list of numbers
else {
  // While loop that provides the range
  while (($counter >= $minNumber) && ($counter <= $maxNumber)) {
    
    // List of numbers with a break
    $numbers = $numbers . $counter . "<br>";

    // Give an increment for counter
    $counter++;

    // Set the message variable to display results
    $message = "Here are all the numbers between the minimum and maximum numbers that you entered:<br><br>" . $numbers;
  }
}

// Displaying the results (the range of numbers) back to the user
echo $message;

?>
<?php

// Declaring variables for numbers and message for later
$numbers = "";
$message = "";

// Getting the minimum and maximum input 
$minNumber = $_POST["min-number"];
$maxNumber = $_POST["max-number"];

// Check if minimum and maximum are entered and are numeric
if (($minNumber == "") || ($maxNumber == "") || (!is_numeric($minNumber)) || (!is_numeric($maxNumber))) {
  $message = "Ensure that both minimum and maximum numbers are entered.";
} 

// If statement to ensure that maximum is greater than minimum.
elseif ($minNumber > $maxNumber) {
  $message = "Ensure that minimum value is less than or equal to maximum value.";
}

// Else, make list of numbers
else {
  // Initializing counter as an integer
  $counter = (int) $minNumber;

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
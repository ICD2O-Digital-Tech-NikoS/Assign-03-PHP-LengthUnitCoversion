
<?php
  // get kilometers from user
  $kilometers = $_POST["kilometers"];

  // Perform calculation using the formula for kilometers to meters
  $meters = $kilometers * 1000;

// if statement to display an error if the user inputs a 0, else display the results normally
if ($kilometers == 0) {
  echo 'Error: Please enter a number greater than 0.'; 
}
else if ($kilometers > 0) {
  echo $kilometers . "km is equal to " . round($meters,2) . "m.";
}
?>
  

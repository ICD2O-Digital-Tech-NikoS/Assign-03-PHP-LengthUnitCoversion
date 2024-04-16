<?php
  $meter = $_POST["meters"];
  // Perform calculation using the formula for meters to feet
  $feet = $meter * 3.28084;

if ($meter == 0) {
  echo 'Error: Please enter a number greater than 0.'; 
}  
else if ($meter > 0) {
  echo $meter . "m is equal to " . round($feet,2) . "ft.";
}
?>


<?php
  $kilometers = $_POST["kilometers"];

  // Perform calculation using the formula for kilometers to meters
  $meters = $kilometers * 1000;
?>
<h3>Results:</h3>
<?php echo $kilometers ?>km is equal to <?php echo $meters ?>m.
  

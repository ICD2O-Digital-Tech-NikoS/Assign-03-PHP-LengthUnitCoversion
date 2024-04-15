<?php
  $meter = $_POST["meters"];
  // Perform calculation using the formula for meters to feet
  $feet = $meter * 3.28084;
?>
<h3>Results:</h3>
<?php echo $meter ?>m is equal to <?php echo $feet ?>ft.
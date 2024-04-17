<!DOCTYPE html>
<html>
  <!-- contains the meta data, author, title, favicon, links to style sheets and other important information -->
  <head>
    <!-- meta data -->
    <meta charset="utf-8" />
    <meta name="description" content="LengthUnitCoversion" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Niko" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
    <!-- my style sheet -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Title for tab -->
    <title>Converting Lengths with Different Units</title>
  </head>
  <body>
    <h1 id="header">Converting Lengths with Different Units</h1>";
    <!-- image of formula being used for kilometers to meters conversion -->
    <img src="./images/k-to-m.jpg" alt="formula"> <br>
    <?php
      echo "<h3>Please enter the following:</h3>";
    ?>
    <!-- form to get number of kilometers to be converted to meters from user -->
    <form action="./k-to-m.php" method="post" target="meter">
      <label for="kilometers">Kilometers:</label>
      <input type="number" id="kilometers" step=".01" min="0" placeholder="Kilometers" name="kilometers"><br><br>
      <input type="submit" value="Calculate">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="meter" name="meter">			

      </iframe>
    <br>
    <!-- image of formula being used for meters to feet conversion -->
    <img src="./images/m-to-ft.jpg" alt="formula" height="25%" width="25%">
    <br><br>
    <!-- form to get number of meters to be converted to feet from user -->
    <form action="./m-to-ft.php" method="post" target="feet">
      <label for="meters">Meters: </label>
      <input type="text" id="meters" step=".01" min="0" placeholder="Meters" name="meters"><br><br>
      <input type="submit" value="Calculate">
    </form>
    
      <!-- iframe for the results to show on the web page. -->
      <iframe id="feet" name="feet">			

      </iframe>


    <br><br><br>
    <!-- Basic Chip -->
    <span class="mdl-chip">
        <span class="mdl-chip__text">By: Niko Shivkumar</span>
    </span>
    <br>
    <br>
  </body>
</html>
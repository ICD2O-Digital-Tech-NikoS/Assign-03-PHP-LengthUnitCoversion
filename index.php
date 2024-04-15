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
    <link rel="apple-touch-icon" sizes="180x180" href="./faviconfolder/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./faviconfolder/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./faviconfolder/favicon-16x16.png" />
    <link rel="manifest" href="./faviconfolder/site.webmanifest" />
    <!-- my style sheet -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Title for tab -->
    <title>Converting Lengths with Different Units</title>
  </head>
  <body>
     <!-- php echo to print the html to the page, displays title and subheading -->
    <?php 
      echo "<h1>Converting Lengths with Different Units</h1>";
    ?>
    <img src="./images/formula.png" alt="formula"> <br>
    <?php
      echo "<h3>Please enter the following:</h3>";
    ?>
    <!-- form to get degrees fahrenheit from the user -->
    <form action="./results.php" method="post" target="meter">
      <label for="kilometers">Kilometers:</label>
      <input type="number" id="kilometers" step="any" min="0" placeholder="Kilometers" name="kilometers"><br><br>
      <input type="submit" value="Calculate">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="meter" name="meter">			

      </iframe>
    
    <!-- form to get degrees fahrenheit from the user -->
    <form action="./results2.php" method="post" target="feet">
      <label for="meters">Meters: </label>
      <input type="text" id="meters" step="any" min="0" placeholder="Meters" name="meters"><br><br>
      <input type="submit" value="Calculate">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="feet" name="feet">			

      </iframe>


    <br>
  </body>
</html>
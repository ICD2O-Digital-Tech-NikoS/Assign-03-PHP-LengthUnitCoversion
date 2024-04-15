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
    <!-- mdl script file -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- references javascript file -->
    <script defer src="./js/script.js"></script>
    <h1>Converting Lengths with Different Units</h1>
    <img src="./images/formula.png" alt="formula">
    <h3>Please enter the following:</h3>
    <p>
      <!-- form to get degrees fahrenheit from user -->
      <form action="javascript:convertk()">
        <label for="kilometers" id="kilometer">Kilometers to Meters: </label>
        <input type="number" step="any" min="0" id="kilometers" placeholder="Kilometers" /><br><br>
        <input type="submit" value="Calculate Meters">
      </form>
    
    <div id="num-of-meters"></div>
    
      <form action="javascript:convertm()"><br><br>
        <label for="meters" id="meter">Meters to Feet: </label>
        <input type="number" step="any" min="0" id="meters" placeholder="Meters" /><br><br>
        <input type="submit" value="Calculate Feet">
      </form>
    </p>
    <!-- Create a space where the user information will be displayed -->
    <div id="num-of-feet"></div>

    <br>
  </body>
</html>
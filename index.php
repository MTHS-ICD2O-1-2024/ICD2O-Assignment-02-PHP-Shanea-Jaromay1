<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Finding the surface area of a cylinder, in Php" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-yellow.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Finding the surface area of a cylinder, Php</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Finding the surface area of a cylinder, in Php</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/cylinder13086045153593860639.jpg" alt="cylinder image" />
      </div>
      <br />
      <div class="page-content">Find the surface area</div>
      <div class="page-content">Please enter the following:</div>
      <div class="page-content-php"></div>
      <form action="answer.php" method="GET">
        <!-- Numeric Textfield -->
        <p>Radius number (cm)</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input
            class="mdl-textfield__input"
            type="text"
            id="radius-number"
            name="radius-number" />
          <label class="mdl-textfield__label" for="radius-number">Radius number here (cm)...</label>
        </div>
        <!-- Numeric Textfield -->
        <p>Height number (cm)</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="height-number" name="height-number" />
          <label class="mdl-textfield__label" for="height-number">Height number here (cm)...</label>
        </div>
        <br />
        <!-- Raised button with ripple -->
        <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Calculate
        </button>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="area"></div>
      </div>
    </main>
  </div>
</body>

</html>
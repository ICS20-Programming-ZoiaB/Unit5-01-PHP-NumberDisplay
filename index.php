<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Number Display Webpage, PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
    <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Number Display Webpage, PHP</title>
  </head>
  <body>
    <?php echo "<h1>Number Display Webpage, PHP</h1>"; ?>
    
    <!-- Header and text -->
      <?php
        echo "<h3>Welcome!</h3>";
        echo "<p>This webpage will give you the range of numbers between the numbers you input.</p>";
      ?>
      <?php echo "<h3>Your Input:</h3>"; ?>
      
      <!-- Form for user input -->
      <form action="./results.php" method="post" target="results">
        <label for="min number">Enter a minimum number:</label>
        <input type="number" step="1" name="min-number" placeholder="Minimum"><br><br>
        <label for="max number">Enter a maximum number:</label>
        <input type="number" step="1" name="max-number" placeholder="Maximum"><br><br>
        <input type="submit" value="Submit Numbers" id="submit-button">
      </form>

      <!-- Iframe to display results -->
      <iframe id="results" name="results"></iframe>

      <!-- Image -->
      <img src="./images/tomato-numbers.png" alt="Numbers" width="600" length="600">
  </body>
</html>

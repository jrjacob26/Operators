<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Multiples</title>
</head>
<body>

<?php
  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $userInput = $_POST["number"];

    // Check if the input is a valid number
    if (is_numeric($userInput)) {
      // Use logical operators to check if the number is divisible by both 3 and 5
      if ($userInput % 3 == 0 && $userInput % 5 == 0) {
        $resultMessage = "The number $userInput is a multiple of both 3 and 5.";
      } else {
        $resultMessage = "The number $userInput is not a multiple of both 3 and 5.";
      }
    } else {
      $resultMessage = "Please enter a valid number.";
    }
  }
?>

  <h2>Check if a Number is a Multiple of Both 3 and 5</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a number: <input type="text" name="number">
    <input type="submit" value="Check">
  </form>

  <?php
    // Display the result message if it is set
    if (isset($resultMessage)) {
      echo "<p>$resultMessage</p>";
    }
  ?>

</body>
</html>

<?php
  var_dump($_POST);

  $amount = $_POST['amount'];
  echo $amount;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Calculator</title>
</head>
<body>
  <form action="" method="POST">
  <label for="amount">Enter amount:</label>
  <input type="number" name="amount">
  <input type="submit" name="submit" value="Convert">
  </form>
  <p>Converted amount = <?php echo $amount ?> </p>
</body>
</html>
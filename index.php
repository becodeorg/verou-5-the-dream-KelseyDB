<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Calculator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  ini_set('display_errors', 0);

  $amount = $_POST['amount'];
  $curr1 = $_POST['curr1'];
  $curr2 = $_POST['curr2'];
  
  if ($curr1 == "CHF" AND $curr2 == "CHF"){
    $result = $amount * 1.0;
  }
  if ($curr1 == "CHF" AND $curr2 == "USD"){
    $result = $amount * 1.17;
  }
  if ($curr1 == "CHF" AND $curr2 == "EUR"){
    $result = $amount * 1.07;
  }
  if ($curr1 == "USD" AND $curr2 == "CHF"){
    $result = $amount * 0.85;
  }
  if ($curr1 == "USD" AND $curr2 == "USD"){
    $result = $amount * 1.0;
  }
  if ($curr1 == "USD" AND $curr2 == "EUR"){
    $result = $amount * 0.92;
  }
  if ($curr1 == "EUR" AND $curr2 == "CHF"){
    $result = $amount * 0.93;
  }
  if ($curr1 == "EUR" AND $curr2 == "USD"){
    $result = $amount * 1.09;
  }
  if ($curr1 == "EUR" AND $curr2 == "EUR"){
    $result = $amount * 1;
  }
?>
  <form action="" method="POST">
    <div id="inputCurr">
      <label for="amount">Enter amount:</label> 
      <br>
      <br>
      <input type="number" name="amount"> 
      <br>
      <br>
      <label for="curr1">From:</label>
      <select name="curr1" id="curr1">
        <option value="CHF" selected >CHF</option>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
      </select>
      <br>
      <br>
    </div>
      <label for="curr2">To:</label>
      <select name="curr2" id="curr2">
      <option value="CHF">CHF</option>
      <option value="USD">USD</option>
      <option value="EUR" selected>EUR</option>
    </select>
    <br>
    <br>
    <input type="submit" name="submit" value="Convert">
    <br>
    <br>
    <?php echo $amount, " ", $curr1 ?>
    <p>Converted amount:  <?php echo $result, " ", $curr2?></p>
  </form>
</body>
</html>
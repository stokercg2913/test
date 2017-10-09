<?php
$firstname = filter_input(INPUT_POST, 'first_name');
$lastname = filter_input(INPUT_POST, 'last_name');
$dollars = filter_input(INPUT_POST, 'dollars', FILTER_VALIDATE_FLOAT);
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Website</title>

</head>

<body>
<p><?php echo 'First Name: ' . htmlspecialchars($firstname); ?></p>
<p><?php echo 'Last Name: ' . htmlspecialchars($lastname); ?></p>
<p><?php echo 'Dollars in Bank: $' . htmlspecialchars(number_format($dollars, 2)); ?></p>
<p><?php echo 'Date: ' . htmlspecialchars(date('m/d/y')); ?></p>
</body>
</html>


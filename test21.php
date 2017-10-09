<?php
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$dollars = $_POST['dollars'];
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
<p><?php echo 'Dollars in Bank: ' . htmlspecialchars(number_format($dollars, 2)); ?></p>
<p><?php echo 'Date: ' . htmlspecialchars(date('m/d/y')); ?></p>
</body>
</html>


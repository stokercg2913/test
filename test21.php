<?php
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
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
</body>
</html>


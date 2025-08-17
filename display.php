<!DOCTYPE html>
<html>
<head>
  <title>Submitted Data</title>
</head>
<body>
  <h2>Submitted Information</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<strong>Name:</strong> $name <br>";
    echo "<strong>Email:</strong> $email <br>";
    echo "<strong>Message:</strong><br> $message";
  } else {
    echo "No data submitted.";
  }
  ?>
</body>
</html>

 <!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
  <div>
    <!-- Basic xss if user added data in body -->
    <?php echo $_GET['xss'] ?>
    <!-- xss corrected by escaping -->
    <?php echo htmlspecialchars($_GET['xss']) ?>

  </div>
</body>
</html>

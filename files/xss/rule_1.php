 <!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
  <div>
    <!-- xss corrected by escaping -->
    <?php echo htmlspecialchars($_GET['xss']) ?>

  </div>
</body>
</html>

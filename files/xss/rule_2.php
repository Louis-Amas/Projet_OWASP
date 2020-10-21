 <!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
  <div>
   <!-- Alert corrected with escaping chars -->
    <p class="<?php echo htmlspecialchars($_GET['xss']) ?>"></p>
  </div>
</body>
</html>


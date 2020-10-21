<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
</body>
</html>
<script>
  alert(<?php echo htmlentities($_GET['xss']) ?>)
</script>

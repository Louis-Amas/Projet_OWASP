<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
</body>
</html>
<script>
// http://localhost:8080/xss/rule_3.php?xss=1);%20alert(2
  alert(<?php echo $_GET['xss'] ?>)
</script>

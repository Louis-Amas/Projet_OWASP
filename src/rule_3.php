<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
</body>
</html>
<script>
  // Simulate user input injected in function call
  // let xss = "1); alert(2 "
  alert(<?php echo $_GET['xss'] ?>)
  alert(<?php echo htmlentities($_GET['xss']) ?>)

</script>

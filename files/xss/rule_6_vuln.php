<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
  
  <div id="test">
  </div>
</body>
</html>

<script>
  // http://localhost:8080/xss/rule_6_vuln.php?xss=%27%3Cimg%20src=ldl%20onerror=alert(1)%3E%27
 document.getElementById("test").innerHTML = <?php echo $_GET['xss'] ?>

</script>

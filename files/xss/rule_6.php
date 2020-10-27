<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
  <script type="text/javascript" src="./purify.js"></script>
</head>
<body>
  <div id="test">
  </div>
</body>
</html>

<script>
  // http://localhost:8080/xss/rule_6_vuln.php?xss=%27%3Cimg%20src=ldl%20onerror=alert(1)%3E%27
 document.getElementById("test").innerHTML = DOMPurify.sanitize(<?php echo $_GET['xss'] ?>)

</script>

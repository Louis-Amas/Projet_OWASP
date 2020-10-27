 <!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
  <div>
  <!-- http://localhost:8080/xss/rule_2_vuln.php?xss=%22%3E%3Cscript%3Ealert(1)%3C/script%3E -->
   <!-- Alert example -->
   <p class="<?php echo $_GET['xss'] ?>" ></p>
  </div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
<!-- http://localhost:8080/xss/rule_5_vuln.php?xss=bo%22%20onerror=%22alert(1) -->
  <img src="<?php 
    $jscode = json_encode($_GET['xss']).');';
    echo htmlentities($jscode) ?>"
  >
</body>
</html>
</style>


 <!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
  <div>
    <!-- Basic xss if user added data in body -->
    <!-- http://localhost:8080/xss/rule_1_vuln.php?xss=%3Cscript%3Ealert(1)%3C/script%3E -->
    <?php echo $_GET['xss'] ?>
  </div>
</body>
</html>

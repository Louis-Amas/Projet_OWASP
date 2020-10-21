 <!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
  <div>
    <!-- Basic xss if user added data in body -->
    <?php echo $_GET['xss'] ?>
  </div>
</body>
</html>

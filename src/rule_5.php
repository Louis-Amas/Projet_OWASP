<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<body>
  <img src="<?php echo $_GET['xss'] ?>" >
  <img src="<?php 
    $jscode = json_encode($_GET['xss']).');';
    echo htmlentities($jscode) ?>"
  >
</body>
</html>
</style>


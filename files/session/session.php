<?php 
    $sess_name = session_name();
    if (session_start()) {
        setcookie($sess_name, session_id(), null, '/', null, null, true);
    }
?>

l’équipe Cybersecurité 
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
</style>

<script>
    window.document.getElementById('test').innerHTML = <?php echo $_GET['xss'] ?>
</script>

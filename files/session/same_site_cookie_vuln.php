<?php 
    $sess_name = session_name();
    session_start();
    header("Access-Control-Allow-Origin: *");
?>

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

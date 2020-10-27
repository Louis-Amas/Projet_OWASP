<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
  <script type="text/javascript" src="./purify.js"></script>
</head>
<body>
<!-- http://localhost:8080/xss/dom_vuln.php?test=`%3Cimg%20src=bo%20onerror=%22alert(1)%22%3Ealert(1)%3C/img%3E` -->
<div id="test">
</div>

</body>
</html>
</style>

<script>
    window.document.getElementById('test').innerHTML = <?php echo $_GET['test'] ?>
</script>

<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
  <script type="text/javascript" src="./purify.js"></script>
</head>
<body id="test">
</body>
</html>
</style>

<script>
    window.document.getElementById('test').textContent = <?php echo $_GET['test'] ?>

</script>

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
    window.document.getElementById('test').innerHTML = DOMPurify.sanitize(<?php echo $_GET['test'] ?>)
</script>

<!DOCTYPE html>
<html>
<head>
  <title>Owasp</title>
</head>
<div>
  <span style="background-url: javascript:alert(1)"></span>
  </div>
</body>
</html>

<style>
  body {
      background-url: "javascript:alert(1)";
  }
  div {
      background-url: javascript\3a alert\28 1\29;
  }
</style>

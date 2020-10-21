<!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
<?php
    $db = new SQLite3("../test.db");
    $res = $db->query("SELECT * FROM users where password = '". $_GET['password'] . "'")

?>

<?php    var_dump($res->fetchArray()) ?>
</body>
</html>

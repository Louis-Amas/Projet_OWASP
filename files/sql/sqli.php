<!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
<!-- http://localhost:8080/sql/sqli_vuln.php?password=%27%20or%20name%20=%27louis -->
<?php
    $db = new SQLite3("../test.db");

    $stm = $db->prepare("SELECT * FROM users where password = ?");
    $stm->bindValue(1, $_GET['password'], SQLITE3_TEXT);
    $res = $stm->execute();

?>

<?php    var_dump($res->fetchArray()) ?>
</body>
</html>

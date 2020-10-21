<!DOCTYPE html>
<html>
<head>
<title>Owasp</title>
</head>
<body>
<?php
    $db = new SQLite3("../test.db");

    $stm = $db->prepare("SELECT * FROM users where password = ?");
    $stm->bindValue(1, $_GET['password'], SQLITE3_TEXT);
    $res = $stm->execute();

?>

<?php    var_dump($res->fetchArray()) ?>
</body>
</html>

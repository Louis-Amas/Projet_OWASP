<!DOCTYPE html>
<html>

<body>
    <?php
    $db = new SQLite3("../test.db");
    
    if (isset($_POST['user']) and isset($_POST['pass'])) {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        echo 'Password sent to DB : ' . $password;
        $stm = $db->prepare('INSERT INTO users VALUES (:user, :password)');
        $stm->bindValue(":user", $username, SQLITE3_TEXT);
        $stm->bindValue(":password", $password, SQLITE3_TEXT);
        $res = $stm->execute();
    }
    ?>
    <form action="login_vuln.php" method="POST">
        <p>Username</p><input type="text" name="user" id="user" />
        <p>password</p><input type="password" name="pass" id="pass"/>
        <br />
        <input type="submit" value="submit" />
    </form>
</body>

</html>
<!DOCTYPE html>
<html>

<body>
    <?php
    $db = new SQLite3("../test.db");

    $options = [
        'cost' => 12,
    ];

    if (isset($_POST['user']) and isset($_POST['pass'])) {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $password_hashed = password_hash($password, PASSWORD_BCRYPT, $options);
        echo 'Password sent to DB: ' . $password_hashed;
        $stm = $db->prepare('INSERT INTO users VALUES (:user, :password)');
        $stm->bindValue(":user", $username, SQLITE3_TEXT);
        $stm->bindValue(":password", $password_hashed, SQLITE3_TEXT);
        $res = $stm->execute();
    }


    ?>
    <form action="login.php" method="POST">
        <p>Username</p><input type="text" name="user" id="user" />
        <p>password</p><input type="password" name="pass" id="pass" />
        <br />
        <input type="submit" value="submit" />
    </form>
</body>

</html>
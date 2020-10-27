<html>
<!-- http://localhost:8080/xss/rule_0.php?xss=%22coucou%22 -->
<div>
    <?php echo $_GET['xss'] ?>
</div>

</html>

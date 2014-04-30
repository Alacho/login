<html>
<head>

<?php
include "/include/header.php";

echo "<title>Logg inn-testing</title>";
echo "\n";

?>

</head>

<form name="signin" action="checklogin.php" method="post">

<input type="text" placeholder="Brukernavn" name="brukernavn"><br>
<input type="password" placeholder="Passord" name="passord"><br>
<input type="submit" name="submit" value="Logg inn">
</form>
</html>
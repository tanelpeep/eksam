<?php
require_once ('function.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Eksam</title>
</head>
<body>
<div id="content">
    <form action="index.php" method="post">
        <label>Sisesta parool sisu nägemiseks:</label>
        <input type="password" name="password" placeholder="Sisesta parool">
        <input type="submit" value="Sisesta">
    </form>

<?php kontrolliParooli();?>

</div>
</body>
</html>

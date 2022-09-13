<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>Welcome</title>
</head>

<body>
 <?php echo "<h1>Bienvenue  ".  $_SESSION['username']."</h1>";?>
</body>
</html>

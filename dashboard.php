<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hoi, <?php echo $_SESSION['username']; ?>!</p>
        <p>je bent nu in de gebruikers Dashboard.</p>
        <p><a href="logout.php">Log uit</a></p>
    </div>
</body>
</html>

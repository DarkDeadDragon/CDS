<?php
    include ('Menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grimoire</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
</head>
<body class="index__body">
<div class="header">
    <div class="header__logo">
        Catch Demonic Souls!
    </div>

<?php Menu::genMenu(1) ?>
</div>


</body>
</html>

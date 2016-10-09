<?php
    include_once ('Menu.php');
    include_once ('Content.php');
?>
<?php
    class BodyStyle{
        public static $body_style = array(
            0=>"index__body",
            1=>"start__body",
            2=>"body",
            3=>"body"
        );
    }
    $page = $_GET["page"];
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
<?php
    if ($page == "" ) {$page = 0;}
    echo "<body class=\"".BodyStyle::$body_style[$page]."\">";
?>
    <div class="header">
    <?php
        if ($page!=0) echo "<a href=\"index.php?page=0\">";
    ?>
    <div class="header__logo">Catch Demonic Souls!</div>
    <?php
        if ($page!=0) echo "</a>";
        Menu::genMenu($page);
    ?>
    </div>
<?php
    if ($page !=0 ) Content::getPage($page);
    echo "</body>"
?>

</html>

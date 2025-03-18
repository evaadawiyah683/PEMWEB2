<?php
$menus = [
    "home" => "index.php",
    "about" => "about.php",
    "contact" => "contact.php",
    "profile" => "profile.php",
    "kutipan" => "kutipan.php",

]
?>

<!-- Sidebar-->
<div class="border-end" id="sidebar-wrapper" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; background-color: white;">
    <div class="sidebar-heading border-bottom" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Start Bootstrap</div>
    <div class="list-group list-group-flush" >
    <?php
    foreach ($menus as $menu => $value) {
    ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= $value ?>"><?= $menu ?></a>
            <?php
    }
    ?>
    </div>
</div>
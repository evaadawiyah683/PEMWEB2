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
<div class="border-end" id="sidebar-wrapper" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
    <div class="sidebar-heading border-bottom" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; background: linear-gradient(#e9e9e9 20%, #bdbebd 40%,#a9a9a9 60%, #949494 65%, #707070 80%);">Start Bootstrap</div>
    <?php
    foreach ($menus as $menu => $value) {
    ?>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= $value ?>"><?= $menu ?></a>
        </div>
    <?php
    }
    ?>
</div>
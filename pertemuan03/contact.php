<?php
include './top.php';
include './menu.php';
?>

<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <?php
    include './navbar.php';
    ?>

    <!-- Page content-->
    <div class="container-fluid" style="background: linear-gradient(#e9e9e9 20%, #bdbebd 40%,#a9a9a9 60%, #949494 65%, #707070 80%);">
        <h1 class="mt-4 text-center" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Halaman Contact</h1>
        <div class="row justify-content-center text-center">
            <a href="https://api.whatsapp.com/send?phone=+6285772631836&text=hallo" class="text-decoration-none">
                <h3 class="text-black mb-3" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">whatsapp</h3>
                <i class="fa-brands fa-square-whatsapp fa-bounce fa-8x" style="color: black;"></i>

            </a>
            <div>
                <div>
                    <a href="https://www.instagram.com/dwyh.va?igsh=MTJ5c3djcjBxNjMzcg==" class="text-decoration-none">
                        <h3 class="text-black mb-3" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Instagram</h3>
                        <i class="fa-brands fa-square-instagram fa-bounce fa-8x" style="color:black;"></i>

                    </a>
                    <div>

                    </div>
                </div>
            </div>
        </div>
        <?php
        include './bottom.php';
        ?>
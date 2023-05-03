<!DOCTYPE html>
<html color-mode="light" lang="en">

<!--TODO Verschiedene Sprachen implementieren-->
<!--TODO Fotos per Explorer einfügen-->
<!--TODO Neue Seiten hinzufügen-->
<!--TODO Bilder Copyright checken-->
<!--TODO Neue Section mit Code Background einfügen-->
<!--TODO Bilder Gallerie impl. -->


<?php include(__DIR__ . '/res/php/head.php'); ?>

<body class="z-0">

    <?php include(__DIR__ . '/res/php/header.php'); ?>
    <div class="unselectable" style="position: fixed" id="effect-container">

        <div class="container" style=" position: fixed; top: 5%; left: 10%;">
            <div id="scene">
                <?php
                for ($i = 1; $i < 7; $i++) {
                    $left = "50%";
                    $top = "50%";
                    echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                }
                ?>
            </div>
        </div>

        <div class="container" style="position: fixed;  top: 50%; left: 10%;">
            <div id="scene2">
                <?php
                for ($i = 1; $i < 7; $i++) {
                    $left = "50%";
                    $top = "50%";
                    echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                }
                ?>
            </div>
        </div>

        <div class="container" style="position: fixed;  top: 5%; left: 38.5%;">
            <div id="scene3">
                <?php
                for ($i = 1; $i < 7; $i++) {
                    $left = "50%";
                    $top = "50%";
                    echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                }
                ?>
            </div>
        </div>

        <div class="container" style="position: fixed;  top: 50%; left: 38.5%;">
            <div id="scene4">
                <?php
                for ($i = 1; $i < 7; $i++) {
                    $left = "50%";
                    $top = "50%";
                    echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                }
                ?>
            </div>
        </div>

        <div class="container" style="position: fixed;  top: 5%; left: 67%;">
            <div id="scene5">
                <?php
                for ($i = 1; $i < 7; $i++) {
                    $left = "50%";
                    $top = "50%";
                    echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                }
                ?>
            </div>
        </div>

        <div class="container" style="position: fixed;  top: 50%; left: 67%;">
            <div id="scene6">
                <?php
                for ($i = 1; $i < 7; $i++) {
                    $left = "50%";
                    $top = "50%";
                    echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                }
                ?>
            </div>
        </div>

        <div class="flex items-center justify-center h-screen relative max-w-screen-md mx-auto">
            <section class="flex flex-col items-center justify-center shrink">
                <h1 class="text-5xl font-bold text-center m-5">
                    Die perfekte Leinwand um etwas Einzigartiges zu erschaffen!
                </h1>
                <button class="btn m-5" onclick="randomFunction()">Probiers aus! ^^</button>
            </section>
        </div>
    </div>

    <!-- <main class="container mx-auto p-10">

        </main> -->


    <script>
        var parallax = new Parallax(document.getElementById('scene'));
        var parallax = new Parallax(document.getElementById('scene2'));
        var parallax = new Parallax(document.getElementById('scene3'));
        var parallax = new Parallax(document.getElementById('scene4'));
        var parallax = new Parallax(document.getElementById('scene5'));
        var parallax = new Parallax(document.getElementById('scene6'));
    </script>

</body>

<?php include(__DIR__ . '/res/php/footer.php'); ?>

</html>
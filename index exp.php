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

    <div class="unselectable container" style="position: fixed;  top: 25%; left: 10%;">
        <div id="scene" class="scene">
            <?php
            for ($i = 1; $i < 7; $i++) {
                // $left = rand(0, 100) . "%";
                // $top = rand(0, 100) . "%";
                $left = "50%";
                $top = "50%";
                echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                // echo '<div class="objects" data-depth="1.' . $i . '0" style="left: ' . $left . '; top: ' . $top . ';"> <img id="objects" src="images/layer' . $i . '.png"></div>';
            }
            ?>
        </div>
    </div>

    <div class="unselectable container" style="position: fixed;  top: 60%; left: 70%;">
        <div id="scene" class="scene">
            <?php
            for ($i = 1; $i < 7; $i++) {
                // $left = rand(0, 100) . "%";
                // $top = rand(0, 100) . "%";
                $left = "50%";
                $top = "50%";
                echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                // echo '<div class="objects" data-depth="1.' . $i . '0" style="left: ' . $left . '; top: ' . $top . ';"> <img id="objects" src="images/layer' . $i . '.png"></div>';
            }
            ?>
        </div>
    </div>

    <div class="unselectable container" style="position: fixed;  top: 80%; left: 40%;">
        <div id="scene" class="scene">
            <?php
            for ($i = 1; $i < 7; $i++) {
                // $left = rand(0, 100) . "%";
                // $top = rand(0, 100) . "%";
                $left = "50%";
                $top = "50%";
                echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                // echo '<div class="objects" data-depth="1.' . $i . '0" style="left: ' . $left . '; top: ' . $top . ';"> <img id="objects" src="images/layer' . $i . '.png"></div>';
            }
            ?>
        </div>
    </div>

    <div class="unselectable container" style="position: fixed;  top: 50%; left: 50%;">
        <div id="scene" class="scene">
            <?php
            for ($i = 1; $i < 7; $i++) {
                // $left = rand(0, 100) . "%";
                // $top = rand(0, 100) . "%";
                $left = "50%";
                $top = "50%";
                echo '<div class="parallax-layer" data-depth="1.' . $i . '0"> <img style="left: ' . $left . '; top: ' . $top . '" src="images/layer' . $i . '.png"></div>';
                // echo '<div class="objects" data-depth="1.' . $i . '0" style="left: ' . $left . '; top: ' . $top . ';"> <img id="objects" src="images/layer' . $i . '.png"></div>';
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


    <!-- <main class="container mx-auto p-10">

        </main> -->


    <script>

        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);

    </script>

</body>

<?php include(__DIR__ . '/res/php/footer.php'); ?>

</html>
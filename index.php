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

    <div class="unselectable" style="position: fixed">

        <?php
        $symbols = [
            "□",
            "█",
            "▲",
            "◊",
            "░",
            "▒",
            "▓",
            "▼",
            "◉",
            "◑",
            "◖",
        ];
        for ($i = 0; $i < 20; $i++) {
            $left = rand(0, 100) . "%";
            $top = rand(0, 100) . "%";
            $delay = rand(-15, 0) . "s";
            $symbol = $symbols[array_rand($symbols)];
            echo '<div class="symbol" style="left: ' . $left . '; top: ' . $top . '; animation-delay: ' . $delay . '"; border-radius: 50%><p>' . $symbol . '</p></div>';
        }
        ?>
    </div>

    <div class="flex items-center justify-center h-screen relative max-w-screen-md mx-auto">
        <section class="flex flex-col items-center justify-center shrink">
            <h1 class="text-5xl font-bold text-center m-5">
                Die perfekte Leinwand um etwas Einzigartiges zu erschaffen!
            </h1>
            <button class="btn m-5" onclick="randomFunction()">Probiers aus! ^^</button>
        </section>
    </div>


    <main class="container mx-auto p-10">

    </main>

</body>

<?php include(__DIR__ . '/res/php/footer.php'); ?>

</html>
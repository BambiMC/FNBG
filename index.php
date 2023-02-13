<!DOCTYPE html>
<html color-mode="light" lang="en">

<!--TODO Verschiedene Sprachen implementieren-->
<!--TODO Fotos per Explorer einfügen-->
<!--TODO Neue Seiten hinzufügen-->
<!--TODO Bilder Copyright checken-->
<!--TODO Neue Section mit Code Background einfügen-->
<!--TODO Bilder Gallerie impl. -->


<?php include 'res/comps/head.php'; ?>

<body class="z-0">

    <?php include 'res/comps/header.php'; ?>

    <div class="container2 -z-10 unselectable .rainbow-text" style="position: fixed">


        <?php
        $symbols = [
            "□", "█", "▲", "◊", "░", "▒", "▓", "▼", "◉", "◑", "◖",
        ];
        for ($i = 0; $i < 20; $i++) {
            $left = rand(0, 100) . "%";
            $top = rand(0, 100) . "%";
            $delay = rand(-15, 0) . "s";
            $symbol = $symbols[array_rand($symbols)];
            echo '<div class="symbol" style="left: ' . $left . '; top: ' . $top . '; animation-delay: ' . $delay . '">' . $symbol . '</div>';
        }
        ?>
    </div>


    <div class="flex items-center justify-center h-full h-screen relative">
        <div class="text-5xl text-center">

        </div>
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-5xl font-bold text-center m-5">
                Die perfekte Leinwand um etwas Einzigartiges zu erschaffen!
            </h1>
            <button class="btn" id="PartyModeButton">Probiers aus! ^^</button>

            <script>
                const button = document.getElementById('PartyModeButton');
                button.addEventListener('click', randomFunction);

                function randomFunction() {

                }
            </script>
        </div>
    </div>


    <main class="container mx-auto p-10">



        <section>
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-5xl font-bold text-center"></h1>
                <p class="text-2xl text-center">Here you can find some information about me and my projects.</p>
            </div>


        </section>

        <?php include 'res/comps/contact_form.php'; ?>


    </main>


</body>

<?php include 'res/comps/footer.php'; ?>


</html>
<!DOCTYPE html>
<html color-mode="light" lang="en">

<!--TODO Verschiedene Sprachen implementieren-->
<!--TODO Fotos per Explorer einfügen-->
<!--TODO Neue Seiten hinzufügen-->
<!--TODO Bilder Copyright checken-->
<!--TODO Neue Section mit Code Background einfügen-->


<?php include 'res/comps/headTailwind.php'; ?>

<body class="z-0">

    <?php include 'res/comps/headerTailwind.php'; ?>

    <div class="container2 -z-10 unselectable .rainbow-text" style="position: fixed">


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
            echo '<div class="symbol" style="left: ' . $left . '; top: ' . $top . '; animation-delay: ' . $delay . '">' . $symbol . '</div>';
        }
        ?>
    </div>
    

    <div class="flex items-center justify-center h-full h-screen relative">
      <div class="text-5xl text-center">
        Welcome!<br>
        Fabian Berger

      </div>
    </div>


    <main class="container mx-auto">



        <section>
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-5xl font-bold text-center">Welcome to my Website!</h1>
                <p class="text-2xl text-center">Here you can find some information about me and my projects.</p>
            </div>


        </section>

        <?php include 'res/comps/contact_form.php'; ?>

    
    </main>


</body>

<?php include 'res/comps/footerTailwind.php'; ?>

<?php include 'res/comps/scripts.php'; ?>

</html>
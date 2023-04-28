<!DOCTYPE html>
<html color-mode="light" lang="en">

<!--TODO Verschiedene Sprachen implementieren-->
<!--TODO Fotos per Explorer einfügen-->
<!--TODO Neue Seiten hinzufügen-->
<!--TODO Bilder Copyright checken-->
<!--TODO Neue Section mit Code Background einfügen-->
<!--TODO Bilder Gallerie impl. -->


<?php include(__DIR__ . '/res/php/head.php');?>

<body class="z-0">

    <?php include(__DIR__ . '/res/php/header.php');?>

    <div class="container2 -z-10 unselectable" style="position: fixed">






        <div class="flex items-center justify-center h-full h-screen relative">
            <div class="text-5xl text-center">

            </div>
            <div class="flex flex-col items-center justify-center z-10" id="test">
                <h1 class="text-5xl font-bold text-center m-5">
                    Die perfekte Leinwand um etwas Einzigartiges zu erschaffen!
                </h1>
                <button class="btn" onclick="randomFunction()">Probiers aus! ^^</button>
            </div>
        </div>
        <div id="tiles"></div>

        <h1 id="title" class="centered">
            The name of the game is
            <span class="fancy">Chess</span>.
        </h1>



        <main class="container mx-auto p-10">



            <section>
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-5xl font-bold text-center"></h1>
                    <p class="text-2xl text-center">Here you can find some information about me and my projects.</p>
                </div>


            </section>

            <?php include 'res/php/contact_form.php'; ?>


        </main>


</body>



<?php include(__DIR__ . '/res/php/footer.php');?>


</html>
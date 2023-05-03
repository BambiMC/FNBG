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

    <div class="unselectable" style="position: fixed" id="effect-container"></div>

    <div class="flex items-center justify-center h-screen relative max-w-screen-md mx-auto">
        <section class="flex flex-col items-center justify-center shrink">
            <h1 class="text-5xl font-bold text-center m-5">
                Die perfekte Leinwand um etwas Einzigartiges zu erschaffen!
            </h1>
            <button class="btn m-5" id="changeEffectButton">Probiers aus! ^^</button>
        </section>
    </div>


    <main class="container mx-auto p-10">

    </main>

    <script>
        let current_effect;

        function getRandomEffect() {
            let effect;
            do {
                effect = Math.floor(Math.random() * 3);
            } while (effect === current_effect);
            return effect;
        }

        function updateEffectContainer(effect) {
            var xhr = new XMLHttpRequest();
            const url = 'effect' + effect + '.php';

            var method = "GET";
            xhr.open(method, url, true);
            xhr.responseType = "text";
            xhr.onload = function () {
                if (xhr.readyState === xhr.DONE) {
                    if (xhr.status === 200) {
                        var outputDiv = document.getElementById("effect-container");
                        outputDiv.innerHTML = xhr.response;
                        // Evaluate the script
                        eval(outputDiv.getElementsByTagName('script')[0].innerHTML);
                    } else {
                        console.log("Error: " + xhr.status);
                    }
                }
            };
            xhr.send();
        }

        document.getElementById("changeEffectButton").addEventListener("click", function () {
            current_effect = getRandomEffect();
            updateEffectContainer(current_effect);
        });

        current_effect = getRandomEffect();
        updateEffectContainer(current_effect);
    </script>

</body>

<?php include(__DIR__ . '/res/php/footer.php'); ?>

</html>
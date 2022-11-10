<!DOCTYPE html>
<html color-mode="light" lang="en">

<!--TODO Verschiedene Sprachen implementieren-->
<!--TODO Fotos per Explorer einfügen-->
<!--TODO Neue Seiten hinzufügen-->
<!--TODO Bilder Copyright checken-->
<!--TODO Neue Section mit Code Background einfügen-->


<?php include 'res/comps/head.php'; ?>

<body>

    <?php include 'res/comps/header.php'; ?>

    <main class="container py-5" id="fnbg-content">

        <div class="container">

        </div>

        <div class="row p-5">
            <img src="./res/imgs/FabianBergerWasserfall.jpeg" alt="Ein Bild von mir vor den Krimmler Wasserfällen" class="col-7 d-flex modal-body">
            <div class="col-5 d-none d-md-block">
                <div class="position-relative top-50 start-0 translate-middle bg-accent2 text-orange p-3" style="box-shadow: 0px 5px 15px 3px hsla(0, 0%, 0%, 0.2);">
                    <h2>Damit Ihre Kunden keine Beta-Tester werden!</h2>
                    <ul>
                        <li>End2End-Testing</li>
                        <li>UI/UX-Optimization</li>
                        <li>Manual UI-Testing</li>
                        <li>Load- & Performance-Testing</li>
                        <li>Manual Stress-Testing</li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-orange-darker" target="_blank" href="./res/Lebenslauf-Fabian-Berger.pdf">Lebenslauf</a>
                    </div>
                </div>
            </div>
            <div class="row-4 d-block d-md-none ">
                <div class="bg-accent2 text-orange p-2 mt-2">

                    <h2>Damit Ihre Kunden keine Beta-Tester werden!</h2>
                    <ul>
                        <li>End2End-Testing</li>
                        <li>UI/UX-Optimization</li>
                        <li>Manual UI-Testing</li>
                        <li>Load- & Performance-Testing</li>
                        <li>Manual Stress-Testing</li>
                    </ul>
                    <div class="d-inline-flex pb-2 ps-2">
                        <button class="btn btn-orange-darker m-1" target="_blank" href="./res/Lebenslauf-Fabian-Berger.pdf">Lebenslauf</a>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'res/comps/contact_form.php'; ?>

    </main>

    <?php include 'res/comps/footer.php'; ?>
    

</body>

</html>
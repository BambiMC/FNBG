<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabian Berger - Portfolio</title>
    <link rel="stylesheet" href="./res/bootstrap.min.css">
    <link rel="stylesheet" href="./res/fnbg.css">
    <link rel="icon" type="image/x-icon" href="./res/favicon.ico">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<!--FIXME do box shadow-->

<body>

    <nav class="navbar navbar-expand justify-content-around" style="box-shadow: 0px 2px 5px #101010;">
        <div class="" style="width: 10em;">
            <a class="btn btn-orange m-1 disabled" href="./projects">Projekte</a>
        </div>
        <a href="./">
            <img class="my-1" id="logo" src="./res/fnbg-logo6.svg" alt="FNBG Logo">
        </a>
        <div class="me-2 justify-content-end flex-wrap d-inline-flex">
            <a class="btn btn-orange m-1" target="_blank" href="mailto:me@fnbg.de">me@fnbg.de</a>
            <a class="btn btn-orange m-1" target="_blank" href="https://linkedin.com/in/fabian-berger-nbg/">LinkedIn</a>
        </div>
    </nav>

    <main class="container py-5" id="fnbg-content">



        <div class="row">
            <img src="./res/FabianBergerWasserfall.jpeg" alt="Ein Bild von mir vor den Krimmler Wasserfällen" class="col-7 d-flex modal-body">
            <div class="col-5 d-none d-md-block">
                <div class="position-relative top-50 start-0 translate-middle color-2 text-orange p-3" style="box-shadow: 0px 5px 15px 3px hsla(0, 0%, 0%, 0.2);">
                    <h2>Damit Ihre Kunden keine Beta-Tester werden!</h2>
                    <ul>
                        <li>End2End-Testing</li>
                        <li>UI/UX-Optimization</li>
                        <li>Manual UI-Testing</li>
                        <li>Load- & Performance-Testing</li>
                        <li>Manual Stress-Testing</li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-orange-darker" target="_blank" href="./res/Lebenslauf-Fabian-Berger.pdf">Lebenslauf</a>
                    </div>
                </div>
            </div>
            <div class="row-4 d-block d-md-none ">
                <div class="color-2 text-orange p-2 mt-2" style="box-shadow: 0px 5px 15px 3px hsla(0, 0%, 0%, 0.2);">

                    <h2>Damit Ihre Kunden keine Beta-Tester werden!</h2>
                    <ul>
                        <li>End2End-Testing</li>
                        <li>UI/UX-Optimization</li>
                        <li>Manual UI-Testing</li>
                        <li>Load- & Performance-Testing</li>
                        <li>Manual Stress-Testing</li>
                    </ul>
                    <div class="d-inline-flex pb-2 ps-2">
                        <a class="btn btn-orange-darker m-1" target="_blank" href="./res/Lebenslauf-Fabian-Berger.pdf">Lebenslauf</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-3 m-3" id="Platzhalter">
            <input class="" name="wasnescheisse" type="button">
            <input type="submit" name="submit">

            <?php
            if (isset($_GET['submit'])) {
                echo "<script type='text/javascript'>alert('Some answer');</script>";

                $content = "From: NAME \n Email: EMAIL \n Message: MESSAGE";
                $recipient = "me@fnbg.de";
                $mailheader = "From: EMAIL \r\n";
                mail($recipient, $subject, $content, $mailheader) or die("Error!");
                echo "Email sent!";
                
                //Hier weitermachen, ich muss versuchen das mit ajax zu machen, das ist sonst alles nicht so sinnvoll
                //kann ich das mit git in einem continous integration workflow machen
            }
            ?>
        </div>

        <div>
            <?php
            if (isset($_POST['name']))
                $name = $_POST['name'];
            if (isset($_POST['email']))
                $email = $_POST['email'];
            if (isset($_POST['message']))
                $message = $_POST['message'];
            if (isset($_POST['subject']))
                $subject = $_POST['subject'];
            ?>

        </div>

    </main>

    <footer>
        <div class="d-flex justify-content-around py-3 text-purple">
            <div class="">
                Fabian Berger<br>Ratiborer Straße 2<br>91058 Erlangen
            </div>
            <div class="text-center my-auto">
                © 2022 Copyright:
                <a class="text-purple" href="https://fnbg.de/">fnbg.de</a>
            </div>
        </div>
    </footer>


</body>

</html>
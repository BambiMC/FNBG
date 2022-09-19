<!DOCTYPE html>
<html color-mode="light" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabian Berger - Portfolio</title>

    <script>
        // This code assumes a Light Mode default
        if (
            /* This condition checks whether the user has set a site preference for dark mode OR a OS-level preference for Dark Mode AND no site preference */
            localStorage.getItem("color-mode") === "dark" ||
            (window.matchMedia("(prefers-color-scheme: dark)").matches &&
                !localStorage.getItem("color-mode"))
        ) {
            // if true, set the site to Dark Mode
            document.documentElement.setAttribute("color-mode", "dark")
        }
    </script>


    <script>
        function sendContact() {
            var valid;
            valid = validateContact();
            if (valid) {
                jQuery.ajax({
                    url: "contact_mail.php",
                    data: "userName=" + $("#userName").val() + "&userEmail=" +
                        $("#userEmail").val() + "&subject=" +
                        $("#subject").val() + "&content=" +
                        $(content).val(),
                    type: "POST",
                    success: function(data) {
                        $("#mail-status").html(data);
                    },
                    error: function() {}
                });
            }
        }

        function validateContact() {
            var valid = true;
            /*$(".demoInputBox").css("background-color", "");
            $(".info").html("");
            if (!$("#userName").val()) {
                $("#userName-info").html("(required)");
                $("#userName").css("background-color", "#FFFFDF");
                valid = false;
            }
            if (!$("#userEmail").val()) {
                $("#userEmail-info").html("(required)");
                $("#userEmail").css("background-color", "#FFFFDF");
                valid = false;
            }
            if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#userEmail-info").html("(invalid)");
                $("#userEmail").css("background-color", "#FFFFDF");
                valid = false;
            }
            if (!$("#subject").val()) {
                $("#subject-info").html("(required)");
                $("#subject").css("background-color", "#FFFFDF");
                valid = false;
            }
            if (!$("#content").val()) {
                $("#content-info").html("(required)");
                $("#content").css("background-color", "#FFFFDF");
                valid = false;
            }*/
            return valid;
        }
    </script>

    <link rel="stylesheet" href="res/libs/bootstrap.min.css">
    <link rel="stylesheet" href="res/libs/fnbg.css">
    <link rel="icon" type="image/x-icon" href="res/favicon.ico">
    <script src="res/libs/jquery-3.6.0.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand justify-content-around">
        <div class="me-2 justify-content-start flex-wrap d-inline-flex">
            <a class="btn btn-orange m-1 disabled" href="./projects">Projekte</a>
            <a class="btn switch-theme-btn">
                <img class="light" src="./res/svg/moon.svg" alt="Dark Mode Toggle">
                <img class="dark" src="./res/svg/sun.svg" alt="Light Mode Toggle">
            </a>
        </div>
        <a href="./">
            <img class="my-1" id="logo" src="./res/svg/fnbg-logo6.svg" alt="FNBG Logo">
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
                        <a class="btn btn-orange-darker" target="_blank" href="./res/Lebenslauf-Fabian-Berger.pdf">Lebenslauf</a>
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
                        <a class="btn btn-orange-darker m-1" target="_blank" href="./res/Lebenslauf-Fabian-Berger.pdf">Lebenslauf</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-50" id="formContact">
            <div class="form-group m-3">
                <label class="text-orange">Name</label>
                <input name="userName" type="text" class="form-control" spellcheck="false" id="userName">
            </div>
            <div class="form-group m-3">
                <label class="text-orange">E-Mail</label>
                <input name="userEmail" type="text" class="form-control" spellcheck="false" id="userEmail">
            </div>
            <div class="form-group m-3">
                <label class="text-orange">Betreff</label>
                <input name="subject" type="text" class="form-control" spellcheck="false" id="subject">
            </div>
            <div class="form-group m-3">
                <label class="text-orange">Nachricht</label>
                <textarea name="content" class="form-control" spellcheck="false" id="content" cols="60" rows="6"></textarea>
            </div>

            <div class="d-inline-flex align-items-baseline">
                <button class="btn btn-orange m-3" name="submit" onClick="sendContact();">Absenden</button>
                <p class="m-2" id="mail-status"></p>
            </div>

        </div>

    </main>

    <footer class="footer">
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



    <script src="res/libs/theme-toggle.js"></script>



</body>

</html>
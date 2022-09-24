<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabian Berger</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="res/libs/fnbg.css">
    <link rel="icon" type="image/x-icon" href="res/favicon.ico">

    <script>
        // This code assumes a Light Mode default
        if (
            /* This condition checks whether the user has set a site preference for dark mode OR a OS-level preference for Dark Mode AND no site preference */
            localStorage.getItem("color-mode") === "dark" ||
            (window.matchMedia("(prefers-color-scheme: dark)").matches &&
                !localStorage.getItem("color-mode"))
        ) {
            // if true, set the site to Dark Mode
            document.documentElement.setAttribute("color-mode", "dark");
        }

        function sendContact() {
            var valid;
            valid = validateContact();
            if (valid) {
                jQuery.ajax({
                    url: "res/libs/contact_mail.php",
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

            //TODO enable client sided check if textboxes have valid content for sending contact form


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

</head>
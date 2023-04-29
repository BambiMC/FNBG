<head>

    <script>
        if (
            /* This condition checks whether the user has set a site preference for dark mode OR a OS-level preference for Dark Mode AND no site preference */
            localStorage.getItem("color-mode") === "dark" ||
            (window.matchMedia("(prefers-color-scheme: dark)").matches &&
                !localStorage.getItem("color-mode"))
        ) {
            // if true, set the site to Dark Mode
            document.documentElement.setAttribute("color-mode", "dark");
        }
    </script>

    <script src="<?php __DIR__ ?>res/js/theme-toggle.js" defer></script>
    <script src="<?php __DIR__ ?>res/js/functions.js" defer></script>
    <script src="<?php __DIR__ ?>res/js/anime.min.js"></script>
    <link rel="stylesheet" href="<?php __DIR__ ?>res/css/fnbg.css">
    <link rel="stylesheet" href="<?php __DIR__ ?>res/css/fnbgDefaults.css">
    <link rel="icon" type="image/x-icon" href="<?php __DIR__ ?>res/favicon.ico">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabian Berger</title>
    
    
    <!-- Include tailwindcss-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/p5@1.5.0/lib/p5.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>
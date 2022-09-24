<?php
$toEmail = "me@fnbg.de";
$mailHeaders = "From: " . $_POST["userName"] . "<" . $_POST["userEmail"] . ">\r\n";
if (mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
    print "<p class=''>Ihre Kontaktanfrage wurde erfolgreich verschickt.</p>";
} else {
    print "<p class=''>Ihre Kontaktanfrage konnte leider nicht verschickt werden.</p>";
}

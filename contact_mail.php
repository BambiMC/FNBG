<?php
echo '<script>alert("Vorher")</script>';
$toEmail = "me@fnbg.de";
$mailHeaders = "From: " . $_POST["userName"] . "<" . $_POST["userEmail"] . ">\r\n";
if (mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
    print "<p class='success'>Contact Mail Sent.</p>";
    echo '<script>alert("Yes")</script>';
} else {
    print "<p class='Error'>Problem in Sending Mail.</p>";
    echo '<script>alert("No")</script>';
}

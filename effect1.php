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
    echo '<div class="symbol" style="left: ' . $left . '; top: ' . $top . '; animation-delay: ' . $delay . '"; border-radius: 50%><p>' . $symbol . '</p></div>';
}
?>
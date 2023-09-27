<?php
$message = "Hi, what would you recommend from the menu?";
$output = exec("restaurant_bot.exe '$message'");
echo $output;
?>

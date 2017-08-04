<?php

$recepient = "ipmarketingpro@gmail.com";
$sitename = "MarketingPRO";

$name = trim($_POST["name"]);
$text = trim($_POST["text"]);
$phone = trim($_POST["phone"]);

$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n Form: $recepient");

?>

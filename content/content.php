<?php
$title = "Галерея изображений PHP + JS";
$dirArray = array_splice(scandir("images/gallery_large"),2);
$content1 = "<div id=\"main\"><div class=\"post_title\"><h2>Моя галерея</h2></div><div class=\"gallery\">";
$content2 = "";
foreach ($dirArray as $photoName) {
$content2 = $content2 . "<a rel=\"gallery\" class=\"photo\" href=\"images/gallery_large/" . $photoName . "\" target=\"_blank\"><img src=\"images/gallery_small/" . $photoName . "\" width=\"150\" height=\"100\" /></a>";
}
$content3 = "</div></div>";
$content = $content1 . $content2 . $content3;
?>
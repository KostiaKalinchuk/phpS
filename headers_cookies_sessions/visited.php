<?php

$pages = explode("|", $_SESSION["pages"]);
if(is_array($pages))
    array_pop($pages);
echo "<ol>";
foreach($pages as $page){
    echo "<li><a href='".$page."'>".$page."</a></li>";
}
echo "</ol>";




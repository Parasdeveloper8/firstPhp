<?php
$path = "file";
$items = scandir($path);
//print_r($items);
//To remove . and .. from array
$items = array_diff($items,array(".",".."));
//print_r($items);
foreach($items as $itm):
    echo "<a href=./file/$itm>$itm</a>";
    echo "<br/>";
endforeach;
?>
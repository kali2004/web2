<?php
$hourMin = date('H');
$hour = intval($hourMin);
$napis = "";
if ($hour < 11){
    $napis = "Hezké ráno";
}
else if ($hour > 10 && $hour < 14){
    $napis = "Příjemné poledne";
}
else if ($hour > 13 && $hour < 18){
    $napis = "Hezké odpoledne";
}
else{
    $napis = "Dobrou noc";
}
echo "Dnes je " . date("Y/m/d") . "<br>" . "$napis";

?>
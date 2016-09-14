<?php
$tomorrow = mktime(0,0,0,date("m"),date("d"), date("Y"));
echo "Today is ". date("Y/m/d", $tomorrow);
?>
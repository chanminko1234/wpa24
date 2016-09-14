<?php
$file = fopen("lesson.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
echo fgetc($file);
}
fclose($file);

?>
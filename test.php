<?php
for($i=0; $i<101; $i++){
    $style = <<<STYLE
    .skill-percentage.skill-$i{
        width: $i%
    }
STYLE;
file_put_contents("style.txt",$style."\n",FILE_APPEND);

}
<?php
function multiply($x, $y)
{
if($y == 0)
    return 0;
if($y > 0 )
    return ($x + multiply($x,
                          $y - 1));
 
if($y < 0 )
    return -multiply($x, -$y);
}
 
echo multiply(7, -2);
 
?>
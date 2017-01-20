<?php
$s = 'abcdefghijklm';
for($i=strlen($s)-1, $j=0; $j<$i; $i--, $j++) {
    list($s[$j], $s[$i]) = array($s[$i], $s[$j]);
}
echo $s;

$string = 'Basant Kumar';
$length = strlen($string);

for($i=$length-1;$i >=0;$i--){
    echo $string[$i];
}

?>
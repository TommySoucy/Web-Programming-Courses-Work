<?php
$a=array(42,24,2,4,42,24,2,4,24,42,42,24);
$b=array();
for($c=0;$c<count($a);$c++){

    $e=false;

    for($d=0;$d<count($b);$d++){

        if($a[$c]==$b[$d]){

            $e=true;

        }

    }

    if(!$e){

        $b[]=$a[$c];

    }

}

echo "Resulting array: ";

for($f=0;$f<count($b);$f++){

    echo $b[$f].", ";

}
?>
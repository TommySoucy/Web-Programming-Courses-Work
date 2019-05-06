<?php

	$arr0=array(1,2,3,-1,-2,-3);
	$arr1=array(1,2,3,-1,-2,-3);

	classExerc8(array(),$arr0,$arr1);

	function classExerc8($numArr,&$arr0,&$arr1){

		for($a=0;$a<count($arr0);$a++){

			if($arr0[$a]>0){

				echo $arr0[$a].", ";

			}

		}

		echo "<br/>";

		for($a=0;$a<count($arr1);$a++){

			if($arr1[$a]<0){

				echo $arr1[$a].", ";

			}

		}

	}

?>
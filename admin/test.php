<?php
	function isSNT($n){
		if($n<2) return false;

		for($i=2;$i<$n;$i++){
			if($n%$i==0){
				return false;
			}
			return true;
		}
	}
	function inSNT($n){
		for($i=2;$i<$n;$i++){
			if(isSNT($i))
				echo $i."<br/>";
		}
	}
	fscanf("%d", $n);
	inSNT($n);
?>
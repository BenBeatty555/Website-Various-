<?php

	$charlist = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	
	function convertbase($num,$base,$charlist){
		$n = 1;
		$out = "";
		$mod = 0;
		while($num>0){
			$mod = (($num)%($base**$n));
			$num -= $mod;
			$temp = (string)($charlist[(int)(round($base*($mod/($base**$n))))]);
			$out = "$temp" . "$out";
			$n += 1;
		}
		return $out;
	}
	
	function anticonvertbase($num,$base,$charlist){
		$n = 1;
		$out = 0;
		$num = (int)$num;
		$base = array_search($base,$charlist);
		while($num>0){
			$mod = (string)$num;
			$mod = ( ((int)($mod[strlen($num)-1]))    * ($base**($n-1)));
			$out += array_search((string)$mod, $charlist);
        	$num = substr($num, 0, -1);;
        	$n += 1;
		}
		return $out;
	}
				

	try{
		$numIn1 = $_POST["number1"];
		$baseIn1 = $_POST["base1"];
		$baseIn2 = $_POST["base2"];
		$display = true;
	}
	catch(Exception $e){
		$display = false;
	}
	
	if($display){
		if($baseIn2=='10'){
			echo convertbase($numIn1,$baseIn1,$charlist);
		} else {
			echo convertbase(  anticonvertbase($numIn1,$baseIn2,$charlist)   ,$baseIn1,$charlist);
		}
	}


	
?>
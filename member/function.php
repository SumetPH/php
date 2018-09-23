<meta charset="utf-8"> 
<?
	Function displaydate($x) {
		$thai_m=array("มากราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤภาคม","มิถุนายน","กรกฏาคม" ,"สิงหาคม","กันยายน","ตุลาคม","พฤจิกายน","ธันาคม");
		$date_array=explode(“-“,$x); $y=$date_array[0]; $m=$date_array[1]-1; $d=$date_array[2];
		$m=$thai_m[$m]; $y=$y+543;
		$displaydate="$d $m $y";
		return $displaydate; 
	} // end function displaydate

	function checkemail($checkemail) {
		if(ereg( "^[^@ ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int)$",$checkemail) ) { 
			return true;
		} else {
			return false;
		}
	} // end fuction checkemail
?>
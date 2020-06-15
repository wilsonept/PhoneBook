<?php
	
	function phone_ext($sPhone){
	    $sPhone = preg_replace("/[^0-9]/",'',$sPhone);
	    if(strlen($sPhone) != 10) return(False);
	    $sArea = substr($sPhone, 0,3);
	    $sPrefix = substr($sPhone,3,3);
	    $sNumber1 = substr($sPhone,6,2);
	    $sNumber2 = substr($sPhone,8,10);
	    $sPhone = '('.$sArea.')'.$sPrefix.'-'.$sNumber1.'-'.$sNumber2;
	    return($sPhone);
	}
	
	function phone_local($sPhone){
	    $sPhone = preg_replace("/[^0-9]/",'',$sPhone);
	    if(strlen($sPhone) != 4) return(False);
	    $sNumber1 = substr($sPhone, 0,2);
	    $sNumber2 = substr($sPhone,2,4);
	    $sPhone = $sNumber1.'-'.$sNumber2;
	    return($sPhone);
	}

?>
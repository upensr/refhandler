<?php
if ($_POST['ref_spoof'] != NULL) {
    $offer = urldecode($_POST['ref_spoof']);
    $p1 = strpos ($offer, '?') + 1;
    $url_par = substr ($offer , $p1);
    $paryval = explode ('&', $url_par);
    $p = array();
    foreach ($paryval as $value) {
        $p[] = explode ('=',$value);
    }
    echo'<html>
	<head>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<meta http-equiv="refresh" content="0;URL='.$offer.'"/>
	</head>
	<body style="display:none;">
	<p>You are being redirected to the merchant!</p>
	</body>
	</html>';
}

?>

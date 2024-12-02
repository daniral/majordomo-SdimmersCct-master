<?php

$cctLevel = $this->getProperty('cctLevel');
$cctMinWork = $this->getProperty('cctMinWork');
$cctMaxWork = $this->getProperty('cctMaxWork');
$cctLevelWork = $this->getProperty('cctLevelWork'); 

if ($cctMinWork != $cctMaxWork) {
    $new_cctLevel = round((($cctLevelWork-$cctMinWork)/($cctMaxWork-$cctMinWork))*100);
    if ($new_cctLevel<0) {
        $new_cctLevel=0;
    }
    if ($new_cctLevel != $cctLevel) {
        $this->setProperty('cctLevel', $new_cctLevel);
		//DebMes("CCT Level:  ".$new_cctLevel."   ".$cctLevel);
    }
}
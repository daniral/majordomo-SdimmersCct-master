<?php

$brightLevel = $this->getProperty('brightLevel');
$brightMinWork = $this->getProperty('brightMinWork');
$brightMaxWork = $this->getProperty('brightMaxWork');
$brightLevelWork = $this->getProperty('brightLevelWork');

if ($brightMinWork != $brightMaxWork) {
    $new_brightLevel = round((($brightLevelWork-$brightMinWork)/($brightMaxWork-$brightMinWork))*100);
    if ($new_brightLevel<0) {
        $new_brightLevel=0;
    }
    if ($new_brightLevel != $brightLevel) {
        $this->setProperty('brightLevel', $new_brightLevel);
		//DebMes("Brightness Level".$new_brightLevel."   ".$brightLevel);
    }
}
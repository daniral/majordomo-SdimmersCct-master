<?php

$brightnessLevel = $this->getProperty('brightnessLevel');
$brightnessMinWork = $this->getProperty('brightnessMinWork');
$brightnessMaxWork = $this->getProperty('brightnessMaxWork');
$brightnessLevelWork = $this->getProperty('brightnessLevelWork');

if ($brightnessMinWork != $brightnessMaxWork) {
    $new_brightLevel = round((($brightnessLevelWork-$brightnessMinWork)/($brightnessMaxWork-$brightnessMinWork))*100);
    if ($new_brightLevel<0) {
        $new_brightLevel=0;
    }
    if ($new_brightLevel != $brightnessLevel) {
        $this->setProperty('brightnessLevel', $new_brightLevel);
		//DebMes("Brightness Level".$new_brightLevel."   ".$brightnessLevel);
    }
}
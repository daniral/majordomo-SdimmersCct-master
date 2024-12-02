<?php

$brightnessLevel = $this->getProperty('brightnessLevel');
$brightnessMinWork = $this->getProperty('brightnessMinWork');
$brightnessMaxWork = $this->getProperty('brightnessMaxWork');
$brightnessLevelWork = $this->getProperty('brightnessLevelWork');

if ($brightnessLevel > 0) {
	$this->setProperty('brightnessLevelSaved', $brightnessLevel);
}

if ($brightnessMinWork != $brightnessMaxWork) {
    $brightnessLevelWork = round($brightnessMinWork + round(($brightnessMaxWork - $brightnessMinWork) * $brightnessLevel / 100));
    $diffbrightLevel = abs($this->getProperty('brightnessLevelWork') - $brightnessLevelWork);
    if ($diffbrightLevel >= 5) {
        $this->setProperty('brightnessLevelWork', $brightnessLevelWork);
    }
}
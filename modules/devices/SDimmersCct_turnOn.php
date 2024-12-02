<?php

$brightnessLevelSaved=$this->getProperty('brightnessLevelSaved');
$cctLevelSaved=$this->getProperty('cctLevelSaved');
$brightnessSetMaxTurnOn = $this->getProperty('brightnessSetMaxTurnOn');
$cctSetMaxTurnOn = $this->getProperty('cctSetMaxTurnOn');

if ($brightnessLevelSaved && !$brightnessSetMaxTurnOn) {
   $this->setProperty('brightnessLevel', $brightnessLevelSaved);
} else {
   $this->setProperty('brightnessLevel', 100);
}

if ($cctLevelSaved && !$cctSetMaxTurnOn) {
   $this->setProperty('cctLevel', $cctLevelSaved);
} else {
   $this->setProperty('cctLevel', 0);
}

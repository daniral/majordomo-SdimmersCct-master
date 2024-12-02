<?php

$brightLevelSaved=$this->getProperty('brightLevelSaved');
$cctLevelSaved=$this->getProperty('cctLevelSaved');
$brightSetMaxTurnOn = $this->getProperty('brightSetMaxTurnOn');
$cctSetMaxTurnOn = $this->getProperty('cctSetMaxTurnOn');

if ($brightLevelSaved && !$brightSetMaxTurnOn) {
   $this->setProperty('brightLevel', $brightLevelSaved);
} else {
   $this->setProperty('brightLevel', 100);
}

if ($cctLevelSaved && !$cctSetMaxTurnOn) {
   $this->setProperty('cctLevel', $cctLevelSaved);
} else {
   $this->setProperty('cctLevel', 0);
}

<?php

$cctLevel = $this->getProperty('cctLevel');
$cctMinWork = $this->getProperty('cctMinWork');
$cctMaxWork = $this->getProperty('cctMaxWork');
$cctLevelWork = $this->getProperty('cctLevelWork'); 

if ($cctMinWork != $cctMaxWork) {
	$cctLevelWork = round($cctMinWork + round(($cctMaxWork - $cctMinWork) * $cctLevel / 100));
	$diffcctLevel = abs($this->getProperty('cctLevelWork') - $cctLevelWork);
	if ($diffcctLevel >= 5) {
		$this->setProperty('cctLevelWork', $cctLevelWork);
	}
}
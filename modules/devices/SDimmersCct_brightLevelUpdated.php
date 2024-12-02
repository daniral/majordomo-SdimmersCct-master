<?php

$brightLevel = $this->getProperty('brightLevel');
$brightMinWork = $this->getProperty('brightMinWork');
$brightMaxWork = $this->getProperty('brightMaxWork');
$brightLevelWork = $this->getProperty('brightLevelWork');

if ($brightLevel > 0) {
	$this->setProperty('brightLevelSaved', $brightLevel);
}

if ($brightMinWork != $brightMaxWork) {
    $brightLevelWork = round($brightMinWork + round(($brightMaxWork - $brightMinWork) * $brightLevel / 100));
    $diffbrightLevel = abs($this->getProperty('brightLevelWork') - $brightLevelWork);
    if ($diffbrightLevel >= 5) {
        $this->setProperty('brightLevelWork', $brightLevelWork);
    }
}
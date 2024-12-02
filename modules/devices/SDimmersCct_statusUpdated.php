<?php

$status = $this->getProperty('status');
$linked_room = $this->getProperty('linkedRoom');

$brightLevel = $this->getProperty('brightLevel');
$brightLevelSaved = $this->getProperty('brightLevelSaved');

$cctLevel = $this->getProperty('cctLevel');
$cctLevelSaved = $this->getProperty('cctLevelSaved');

$brightSetMaxTurnOn = $this->getProperty('brightSetMaxTurnOn');
$cctSetMaxTurnOn = $this->getProperty('cctSetMaxTurnOn');

if ($status > 0) {
	$this->setProperty('brightLevel', $brightLevelSaved);
	$this->setProperty('cctLevelSaved', $cctLevel);
} else {
	$this->setProperty('brightLevel', 0);
}

if ($params['NEW_VALUE'] && $linked_room && $this->getProperty('isActivity')) {
    $nobodyhome_timeout = 1 * 60 * 60;
    if (defined('SETTINGS_BEHAVIOR_NOBODYHOME_TIMEOUT')) {
        $nobodyhome_timeout = SETTINGS_BEHAVIOR_NOBODYHOME_TIMEOUT * 60;
    }
    if ($nobodyhome_timeout) {
        setTimeOut("nobodyHome", "callMethodSafe('NobodyHomeMode.activate');", $nobodyhome_timeout);
    }
    if ($linked_room) {
        callMethodSafe($linked_room . '.onActivity', array('sensor' => $ot));
    } else {
        if (getGlobal('NobodyHomeMode.active')) {
            callMethodSafe('NobodyHomeMode.deactivate', array('sensor' => $ot, 'room' => $linked_room));
        }
    }
}

$this->callMethod('logicAction');
include_once(dirname(__FILE__) . '/devices.class.php');
$dv = new devices();
$dv->checkLinkedDevicesAction($this->object_title, $params);
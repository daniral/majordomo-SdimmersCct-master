<?php

if (SETTINGS_SITE_LANGUAGE && file_exists(ROOT . 'languages/SDimmersCct_' . SETTINGS_SITE_LANGUAGE . '.php')) {
 include_once(ROOT . 'languages/SDimmersCct_' . SETTINGS_SITE_LANGUAGE . '.php');
} else {
 include_once(ROOT . 'languages/SDimmersCct_default.php');//
}

$this->device_types['dimmerCct'] = array(
		'TITLE'=>'Освещение (Яркость,Температура)',
		'PARENT_CLASS' => 'SControllers',
        'CLASS' => 'SDimmersCct',
        'PROPERTIES' => array(
            'brightnessLevel' => array('DESCRIPTION' => 'Уровеь яркости %', 'ONCHANGE' => 'brightLevelUpdated', 'DATA_KEY' => 1),
            'brightnessLevelSaved' => array('DESCRIPTION' => 'Последнее значение яркости.'),
            'brightnessLevelWork' => array('DESCRIPTION' => 'Рабочий уровень яркости', 'ONCHANGE' => 'brightLevelWorkUpdated'),
            'brightnessMinWork' => array('DESCRIPTION' => 'Минимальный рабочий уровень яркости', '_CONFIG_TYPE' => 'num', '_CONFIG_HELP' => 'SdDimmerMinMax'),
            'brightnessMaxWork' => array('DESCRIPTION' => 'Максимальный рабочий уровень яркости', '_CONFIG_TYPE' => 'num', '_CONFIG_HELP' => 'SdDimmerMinMax'),
            'cctLevel' => array('DESCRIPTION' => 'Уровеь темпратуры %', 'ONCHANGE' => 'CctLevelUpdated', 'DATA_KEY' => 1),
            'cctLevelSaved' => array('DESCRIPTION' => 'Последнее значение темпратуры.'),
            'cctLevelWork' => array('DESCRIPTION' => 'Рабочий уровень темпратуры.', 'ONCHANGE' => 'CctLevelWorkUpdated'),
            'cctMinWork' => array('DESCRIPTION' => 'Минимальный рабочий уровень темпратуры', '_CONFIG_TYPE' => 'num', '_CONFIG_HELP' => 'SdDimmerMinMax'),
            'cctMaxWork' => array('DESCRIPTION' => 'Максимальный рабочий уровень темпратуры', '_CONFIG_TYPE' => 'num', '_CONFIG_HELP' => 'SdDimmerMinMax'),
            'brightnessSetMaxTurnOn' => array('DESCRIPTION' => 'Включать на полную яркость', '_CONFIG_TYPE' => 'yesno', '_CONFIG_HELP' => 'SdDimmerSetMax'),
			'cctSetMaxTurnOn' => array('DESCRIPTION' => 'Включать холодный', '_CONFIG_TYPE' => 'yesno', '_CONFIG_HELP' => 'SdDimmerSetMax'),
        ),
        'METHODS' => array(
            'setBrightnessLevel' => array('DESCRIPTION' => 'Установить яркость в %', '_CONFIG_SHOW' => 1, '_CONFIG_REQ_VALUE' => 1),
            'brightnessLevelUpdated' => array('DESCRIPTION' => 'Level Updated'),
            'brightnessLevelWorkUpdated' => array('DESCRIPTION' => 'Level Work Updated'),
			'setCctLevel' => array('DESCRIPTION' => 'Установить темпратуру в %', '_CONFIG_SHOW' => 1, '_CONFIG_REQ_VALUE' => 1),
            'CctLevelUpdated' => array('DESCRIPTION' => 'Level Updated'),
            'CctLevelWorkUpdated' => array('DESCRIPTION' => 'Level Work Updated'),
            'turnOn' => array('DESCRIPTION' => 'Включить', '_CONFIG_SHOW' => 1),
            'turnOff' => array('DESCRIPTION' => 'Выключить', '_CONFIG_SHOW' => 1),
			'statusUpdated' => array('DESCRIPTION' => 'Status Updated'),   
    ),
);
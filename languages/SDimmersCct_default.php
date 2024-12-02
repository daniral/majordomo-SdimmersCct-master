<?php

$dictionary = array(

 'SDimmersCct_PATTERN_BRIGHTNESS' => 'brighness',
 'SDimmersCct_PATTERN_COLORTEMPERATURE' => 'color temperature'

);

foreach ($dictionary as $k => $v) {
 if (!defined('LANG_' . $k)) {
  @define('LANG_' . $k, $v);
 }
}

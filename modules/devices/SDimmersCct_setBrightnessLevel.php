<?php

if (!isset($params['value'])) return;

$new_brightLevel = $params['value'];

if ($new_brightLevel>=0 && $new_brightLevel<=100) {
    $this->setProperty('brightnessLevel',$new_brightLevel);
}
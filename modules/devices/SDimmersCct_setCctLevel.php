<?php

if (!isset($params['value'])) return;

$new_cctLevel = $params['value'];

if ($new_cctLevel>=0 && $new_cctLevel<=100) {
    $this->setProperty('cctLevel',$new_cctLevel);
}
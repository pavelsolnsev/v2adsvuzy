<?php

$lander        = "https://syn.su/lander.php?r=land/index";
$land          = 'spa';
$type          = '';
$unit          = 'synergy';
$quote_id      = '';
$speaker       = '';
$program       = '';
$GTM           = '';
$title         = 'Синергия | СПА-банное';
$desc          = 'Банное мастерство и&nbsp;фитотерапия';
$link          = '';
$Facebook_ID   = '';


switch($version){
    case '':
    break;
}

$action = implode(array(

    $lander,
    '&land='     ,  $land,
    '&unit='     ,  $unit,
    '&type='     ,  $type,
    '&version='  ,  $version,
    '&partner='  ,  $partner,
    '&speaker='  ,  $speaker,
    '&program='  ,  $program,
    '&link='     ,  $link,
    '&quote_id=' ,  $quote_id,
    '&ignore-thanksall=true'

));


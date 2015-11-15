<?php
    // no direct access
    defined('_JEXEC') or die;

    $start_date	    = htmlspecialchars($params->get('startDate'));
    $start_time	    = htmlspecialchars($params->get('startTime'));
    $end_date	    = htmlspecialchars($params->get('endDate'));
    $end_time	    = htmlspecialchars($params->get('endTime'));

    $showFormatDate = htmlspecialchars($params->get('formatDate'));

    $showPeri   = htmlspecialchars($params->get('showPeri'));
    $showZero	= htmlspecialchars($params->get('showZero'));

    $showTextTimer	= htmlspecialchars($params->get('showTextTimer'));
    $showText	= htmlspecialchars($params->get('showText'));

    $curLayout = htmlspecialchars($params->get('layout'));

    $nowtime    = time();
    $endtime    = strtotime($end_date.' '. $end_time);
    if ($endtime <  1){ $endtime = 0;}
    if ($start_time <  1){ $start_time = 0;}

    $doc = & JFactory::getDocument();
    $doc->addScript(JURI::root(true) . "/modules/mod_simpleTimer/js/timer.js");

    $doc->addStyleSheet("/modules/mod_simpleTimer/css/".$curLayout.".css");
    require JModuleHelper::getLayoutPath('mod_simpleTimer',$curLayout );

    //Связываем шаблон отображения со скриптами обработки
    require_once "/modules/mod_simpleTimer/showtime.php";
?>
<?php


defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldshowTime extends JFormField {
    protected $type = 'showTime';
    protected function getInput() {
        return "<h3>Период:</h3><hr>";
    }
}

?>
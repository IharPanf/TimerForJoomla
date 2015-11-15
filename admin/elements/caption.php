<?php

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldcaption extends JFormField {
    protected $type = 'caption';
    protected function getInput() {
        return "<h3>Формат отображения:</h3><hr>";
    }
}

?>
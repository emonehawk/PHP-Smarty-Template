<?php
// path for root directory
$root_dir = dirname(__DIR__,2);
include_once $root_dir.'/path.php';

// put full path to Smarty.class.php
include_once Smarty;

class View extends Smarty
{
    function __construct($template)
    {
        parent::__construct();
        $this->setTemplateDir($template);
        $this->setCompileDir(Root.'/resources/smarty/tmp/templates_c');
        $this->setCacheDir(Root.'/resources/smarty/tmp/cache');
        $this->setConfigDir(Root.'/resources/smarty/tmp/configs');
    }
}

?>
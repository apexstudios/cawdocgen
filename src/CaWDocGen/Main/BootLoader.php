<?php
namespace CaWDocGen\Main;

use YamwLibs\Libs\Cli\CliArgs;

/**
 * @author AnhNhan <anhnhan@outlook.com>
 */
class BootLoader
{
    private $args;

    public function boot()
    {
        // Stub
        if (isset($_SERVER['argv'])) {
            array_shift($_SERVER['argv']);
            $this->args = CliArgs::parseArgv($_SERVER['argv']);
            $this->args_count = $_SERVER['argc'] - 1;
        } else {
            $this->args = array(array(), array());
            $this->args_count = 0;
        }
    }
}

<?php
/**
 *  @author nguyenhongphat0 <nguyenhongphat28121998@gmail.com>
 *  @copyright 2018 nguyenhongphat0
 *  @license https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Module main class
 */
class RawDelivery extends Module
{
    public function __construct()
    {
        $this->name = 'rawdelivery';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'nguyenhongphat0';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array(
            'min' => '1.6',
            'max' => _PS_VERSION_
        );
        $this->bootstrap = true;
        $this->module_key = '26d140b284bb3ecd72f3f0f09131ab45';
        parent::__construct();

        $this->displayName = $this->l('Raw Delivery');
        $this->description = $this->l('This module allow you upload custom files to your server in a shape of a module');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }
}

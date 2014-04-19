<?php
if (!defined('IN_CMS')) { exit(); }
/**
 * @package Plugins
 * @subpackage djg_rss
 *
 * @author Micha� Uchnast <djgprv@gmail.com>
 * @copyright kreacjawww.pl, 2014
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */ 
$settings = array(
	'ver' => '0.1',
	'generator' = 'djg_rss plugin for Wolf CMS',
	'managingEditor' = 'Wolf CMS',
	'webMaster' = '',
	'maxFeedsPerChanel' => '100'
);
if (plugin::setAllSettings($settings, 'djg_rss')) Flash::set('success', __('Successfully installed plugin.'));
exit('sdf');
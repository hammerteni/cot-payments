<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=payments.billing.register
 * [END_COT_EXT]
 */
/**
 * Null billing Plugin
 *
 * @package nullbilling
 * @version 1.0.0
 * @author Yusupov
 * @copyright (c) CMSWorks Team 2013
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

$cot_billings['null'] = array(
	'plug' => 'nullbilling',
	'title' => 'Test billing system',
	'icon' => $cfg['plugins_dir'] . '/nullbilling/images/nullbill.png'
);
?>
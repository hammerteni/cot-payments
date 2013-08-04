<?php
/**
 * Payments module
 *
 * @package payments
 * @version 1.1.2
 * @author Yusupov, esclkm
 * @copyright Copyright (c) CMSWorks Team 2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_balance_enabled'] = (isset($L['cfg_balance_enabled'])) ? $L['cfg_balance_enabled'] : array('Turn on internal billings');

$L['payments_mybalance'] = (isset($L['payments_mybalance'])) ? $L['payments_mybalance'] : 'My balance';
$L['payments_balance'] = (isset($L['payments_balance'])) ? $L['payments_balance'] : 'Balance';
$L['payments_paytobalance'] = (isset($L['payments_paytobalance'])) ? $L['payments_paytobalance'] : 'To deposit';
$L['payments_history'] = (isset($L['payments_history'])) ? $L['payments_history'] : 'History';
$L['payments_balance_billing_error_summ'] = (isset($L['payments_balance_billing_error_summ'])) ? $L['payments_balance_billing_error_summ'] : 'Amount empty';
$L['payments_balance_billing_desc'] = (isset($L['payments_balance_billing_desc'])) ? $L['payments_balance_billing_desc'] : 'Account funding';
$L['payments_balance_billing_summ'] = (isset($L['payments_balance_billing_summ'])) ? $L['payments_balance_billing_summ'] : 'Enter the amount';

$L['payments_billing_title'] = (isset($L['payments_billing_title'])) ? $L['payments_billing_title'] : 'Billings';
$L['payments_emptybillings'] = (isset($L['payments_emptybillings'])) ? $L['payments_emptybillings'] : 'At the moment, payment methods available. Please try to pay later.';

$L['payments_allusers'] = (isset($L['payments_allusers'])) ? $L['payments_allusers'] : 'All users';
$L['payments_siteinvoices'] = (isset($L['payments_siteinvoices'])) ? $L['payments_siteinvoices'] : 'Site invoices';
$L['payments_debet'] = (isset($L['payments_debet'])) ? $L['payments_debet'] : 'Debet';
$L['payments_credit'] = (isset($L['payments_credit'])) ? $L['payments_credit'] : 'Credit';
$L['payments_allpayments'] = (isset($L['payments_allpayments'])) ? $L['payments_allpayments'] : 'Summ all payments';
$L['payments_area'] = (isset($L['payments_area'])) ? $L['payments_area'] : 'Type';
$L['payments_code'] = (isset($L['payments_code'])) ? $L['payments_code'] : 'Code';
$L['payments_desc'] = (isset($L['payments_desc'])) ? $L['payments_desc'] : 'Desc';
$L['payments_summ'] = (isset($L['payments_summ'])) ? $L['payments_summ'] : 'Summ';

?>
<?php
/**
 * nullbilling plugin
 *
 * @package nullbilling
 * @version 1.0.0
 * @author Yusupov
 * @copyright Copyright (c) CMSWorks Team 2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');


$L['nullbilling_title'] = (isset($L['nullbilling_title'])) ? $L['nullbilling_title'] : 'Тестовая платежная система  (пустышка)';

$L['nullbilling_error_paid'] = (isset($L['nullbilling_error_paid'])) ? $L['nullbilling_error_paid'] : 'Оплата прошла успешно. В ближайшее время услуга будет активирована!';
$L['nullbilling_error_done'] = (isset($L['nullbilling_error_done'])) ? $L['nullbilling_error_done'] : 'Оплата прошла успешно.';
$L['nullbilling_error_incorrect'] = (isset($L['nullbilling_error_incorrect'])) ? $L['nullbilling_error_incorrect'] : 'Некорректная подпись';
$L['nullbilling_error_otkaz'] = (isset($L['nullbilling_error_otkaz'])) ? $L['nullbilling_error_otkaz'] : 'Отказ от оплаты.';
$L['nullbilling_error_title'] = (isset($L['nullbilling_error_title'])) ? $L['nullbilling_error_title'] : 'Результат операции оплаты';
$L['nullbilling_error_fail'] = (isset($L['nullbilling_error_fail'])) ? $L['nullbilling_error_fail'] : 'Оплата не произведена! Пожалуйста, повторите попытку. Если ошибка повторится, обратитесь к администратору сайта';

?>
CREATE TABLE IF NOT EXISTS `cot_payments` (  `pay_id` int(10) unsigned NOT NULL auto_increment,  `pay_userid` int(11) NOT NULL,  `pay_status` varchar(50) NOT NULL,  `pay_cdate` int(11) NOT NULL,  `pay_pdate` int(11) NOT NULL,  `pay_adate` int(11) NOT NULL,  `pay_summ` float(16,2) DEFAULT NULL,  `pay_desc` varchar(255) NOT NULL,  `pay_area` varchar(20) NOT NULL,  `pay_code` varchar(255) NOT NULL,  `pay_time` int(11) NOT NULL,  `pay_redirect` varchar(255) NOT NULL  PRIMARY KEY  (`pay_id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;CREATE TABLE IF NOT EXISTS `cot_payments_services` (  `service_id` int(10) unsigned NOT NULL auto_increment,  `service_area` varchar(20) NOT NULL,  `service_userid` int(11) NOT NULL,  `service_expire` int(11) NOT NULL,  PRIMARY KEY  (`service_id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;CREATE TABLE IF NOT EXISTS `cot_payments_outs` (  `out_id` int(10) unsigned NOT NULL auto_increment,  `out_userid` int(11) NOT NULL,  `out_summ` float(16,2) NOT NULL,  `out_status` varchar(50) NOT NULL,  `out_date` int(11) NOT NULL,  `out_details` text collate utf8_unicode_ci NOT NULL,  PRIMARY KEY  (`out_id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
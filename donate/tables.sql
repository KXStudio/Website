-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `transaction_id` varchar(64) collate utf8_unicode_ci NOT NULL default '',
  `donor_email` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `amount` double NOT NULL default '0',
  `original_request` text collate utf8_unicode_ci NOT NULL,
  `dt` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`transaction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

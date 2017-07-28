--
-- Table structure for table `mail_tracks`
--

CREATE TABLE IF NOT EXISTS `mail_tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mailer_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `dt` date NOT NULL,
  `mail_status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

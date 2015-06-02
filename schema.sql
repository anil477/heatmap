CREATE TABLE IF NOT EXISTS `click` (
  `page_url` varchar(150) NOT NULL,
  `x_cordinate` mediumint(9) NOT NULL,
  `y_cordinate` mediumint(9) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
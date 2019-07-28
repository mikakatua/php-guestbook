CREATE TABLE `guestbook` (
`id` int(4) NOT NULL auto_increment,
`name` varchar(65) NOT NULL,
`email` varchar(65) NOT NULL,
`comment` varchar(255) NOT NULL,
`datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

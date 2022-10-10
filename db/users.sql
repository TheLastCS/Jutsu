CREATE TABLE `users` (
  `id` bigint(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `number` int(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

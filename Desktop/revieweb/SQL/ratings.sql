

CREATE TABLE `ratings` (
  `ID` int(11) NOT NULL,
  `Initials` varchar(100) NOT NULL,
  `agency` varchar(100) NOT NULL,
  `name_of_accom` varchar(100) NOT NULL,
  `value` int(6) NOT NULL,
  `reliability` int(6) NOT NULL,
  `location` int(6) NOT NULL,
  `quality` int(6) NOT NULL,
  `internet` int(6) NOT NULL,
  `comments` mediumtext NOT NULL,
  `rating` int(10) NOT NULL,
  `updated` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


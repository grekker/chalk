DROP TABLE IF EXISTS `ck_users`, `ck_users_level`;

CREATE TABLE `ck_users_level` (
  `ULID` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
  `levelName` varchar(200) NOT NULL
);

CREATE TABLE  `ck_users` (
  `uid` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `passwd` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ULID` int(10) unsigned NOT NULL,
   CONSTRAINT levelFK FOREIGN KEY (ULID) REFERENCES ck_users_level(ULID) ON DELETE CASCADE
);

INSERT INTO ck_users_level (levelName) VALUES (`green`);
INSERT INTO ck_users (firstName, lastName, userName, passwd, email, ULID) VALUES (`Dave`, `Tester`, `dtester`, `123pass`, `dtester@gmail.com`, 1);
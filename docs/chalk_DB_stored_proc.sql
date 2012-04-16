DROP TABLE IF EXISTS  `users_courses`, `submissions`, `assignments`, `courses`, `users`, `users_level`;

CREATE TABLE `users_level` (
 	 `userLevelID` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
 	 `levelName` varchar(200) NOT NULL
);

CREATE TABLE  `users` (
  	`userID` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
  	`firstName` varchar(50) NOT NULL,
  	`lastName` varchar(50) NOT NULL,
 	`passwd` varchar(150) NOT NULL,
 	`email` varchar(100) NOT NULL,
 	`userLevelID` int(10) unsigned NOT NULL,
 	 CONSTRAINT levelFK FOREIGN KEY (userLevelID) REFERENCES users_level(userLevelID) ON DELETE CASCADE
);

CREATE TABLE `courses`(
	`courseID` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
	`courseCode` varchar(50) NOT NULL,
	`startDate` date NOT NULL,
	`endDate` date NOT NULL
);

CREATE TABLE `assignments`(
	`assignmentID` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
	`dueDate` date NOT NULL,
	`setDate` date NOT NULL,
	`information` varchar(100), 
	`maxPoints` double,
	`courseID` int(10) unsigned NOT NULL,
 	 CONSTRAINT coursesFK FOREIGN KEY (courseID) REFERENCES courses(courseID) ON DELETE CASCADE
);


CREATE TABLE `submissions`(
	`submissionID` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
	`submissionDate` date NOT NULL,
	`grade` double,
	`comments` varchar(250),
	`attachedFiles` varchar(200),
	`userID` int(10) unsigned NOT NULL,
	`assignmentID` int(10) unsigned NOT NULL,
	CONSTRAINT userIdFK FOREIGN KEY (userID) references users(userID) ON DELETE CASCADE,
	CONSTRAINT assignmentIdFK FOREIGN KEY (assignmentID) references assignments(assignmentID) ON DELETE CASCADE
);

CREATE TABLE `users_courses`(
	`userID` int(10) unsigned NOT NULL,
	`courseID` int(10) unsigned NOT NULL,
	CONSTRAINT usersidfkb FOREIGN KEY (userID) references users(userID) ON DELETE CASCADE,
	CONSTRAINT courseIdFK FOREIGN KEY (courseID) references courses(courseID) ON DELETE CASCADE,
	PRIMARY KEY(userID, courseID)
);

INSERT INTO users_level (levelName) VALUES ('green');
INSERT INTO users (firstName, lastName, passwd, email, userLevelID) VALUES ('Dave', 'Tester', '123pass', 'dtester@gmail.com', 1);
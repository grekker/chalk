DROP TABLE IF EXISTS  `submissions`, `assignments`, `users`, `users_level`;

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

CREATE TABLE `assignments`(
	`assignmentID` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
	`dueDate` datetime NOT NULL,
	`setDate` datetime NOT NULL,
	`title` varchar(75) NOT NULL,
	`information` text, 
	`maxPoints` double
);


CREATE TABLE `submissions`(
	`submissionID` int(10) unsigned NOT NULL auto_increment PRIMARY KEY,
	`submissionDate` datetime NOT NULL,
	`grade` double,
	`comments` text,
	`attachedFiles` text,
	`userID` int(10) unsigned NOT NULL,
	`assignmentID` int(10) unsigned NOT NULL,
	CONSTRAINT userIdFK FOREIGN KEY (userID) references users(userID) ON DELETE CASCADE,
	CONSTRAINT assignmentIdFK FOREIGN KEY (assignmentID) references assignments(assignmentID) ON DELETE CASCADE
);


INSERT INTO users_level (levelName) VALUES ('student');
INSERT INTO users_level (levelName) VALUES ('teacher');
INSERT INTO users (firstName, lastName, passwd, email, userLevelID) VALUES ('Dave', 'Tester', 'student', 'student@gmail.com', 1);
INSERT INTO users (firstName, lastName, passwd, email, userLevelID) VALUES ('Cody', 'Eggnitor', 'student', 'student@duq.edu', 1);
INSERT INTO users (firstName, lastName, passwd, email, userLevelID) VALUES ('Jo', 'Mamma', 'teacher', 'teacher@gmail.com', 2);
INSERT INTO assignments (dueDate, setDate, title, information, maxPoints) VALUES ('2012-4-28 11:00:00', '2012-4-01 16:40:00', 'Final Project', 'Take everything that you''ve learned up to this point and create your own CMS. This CMS should be able to 1) Store data effectively, 2) Present its content beautifully, 3) Cover all 17 components of a CMS. Extra credit is given if your CMS serves coffee or tea.', 100);
INSERT INTO submissions (submissionDate, grade, comments, userID, assignmentID) VALUES ('2012-4-28 1:30:00', '93', 'Overall, good project. Needs more cross-browser support, though. The green tea was a plus.', 1, 1);
INSERT INTO assignments (dueDate, setDate, title, information, maxPoints) VALUES ('2012-4-25 16:40:00', '2012-3-25', 'Midterm paper on your personal project', 'Write a paper about the content that you plan to put into your CMS. Your goal here is to focus on the content itself--what do you want your users to take away from your site? If they could describe your site in one paragraph, what would they write?', 50);
INSERT INTO submissions (submissionDate, grade, userID, assignmentID) VALUES ('2012-4-25 16:39:47', '50', 1, 2);
INSERT INTO submissions (submissionDate, grade, comments, userID, assignmentID) VALUES ('2012-4-27 15:12:15', '45', 'Excellent paper, but I had to deduct points since it was late.',2, 2);
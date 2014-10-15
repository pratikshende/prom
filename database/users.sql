#####users table#####
DROP TABLE IF EXISTS users;

CREATE TABLE users (
	id		INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username	VARCHAR(120) UNIQUE,
	password	CHAR(120),	
	created_at 	INT,
	updated_at 	INT,
	type		INT #0:super, 1:service center admin, 2:Customer
);
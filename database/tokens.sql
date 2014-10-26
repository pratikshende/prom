#####tokens table#####
DROP TABLE IF EXISTS tokens;

CREATE TABLE tokens (
	id		INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_id		INT NOT NULL,
	token		VARCHAR(120) NOT NULL,
	created_at	INT,
	updated_at	INT,
	is_valid	INT #0 if invalid, 1 if valid
);

#####configs table#####
DROP TABLE IF EXISTS configs;

CREATE TABLE configs (
        id              INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		name		varchar(20),
        data            TEXT,
        created_at      INT,
        updated_at      INT
);

ALTER TABLE configs
ADD UNIQUE KEY (name);

/*
data: {
	acad_start : [string],
	acad_end   : [string],
}
*/

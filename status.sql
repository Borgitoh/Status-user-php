create database status;
use status;
CREATE TABLE user (
   id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
	 name varchar(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    status ENUM('Online', 'Offline', 'Awaiting') NOT NULL
);

select * from user;


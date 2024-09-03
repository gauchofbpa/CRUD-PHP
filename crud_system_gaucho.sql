CREATE DATABASE crud_system_gaucho;
USE crud_system_gaucho;
CREATE TABLE user (
	user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_name VARCHAR(100) NOT NULL,
    user_email VARCHAR(100) UNIQUE NOT NULL,
    user_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL) 
    ENGINE = InnoDB;
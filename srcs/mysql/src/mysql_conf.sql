CREATE DATABASE wordpress;
CREATE USER 'jiandre'@'%' IDENTIFIED BY 'root';
GRANT ALL PRIVILEGES ON wordpress.* TO 'jiandre'@'%';
FLUSH PRIVILEGES;
/* Creación del usuario y dar permisos para poder usar la base de datos*/
CREATE USER IF NOT EXISTS 'yoursquare'@'localhost' IDENTIFIED BY 'yoursquare';
GRANT ALL PRIVILEGES ON *.* TO 'yoursquare'@'localhost';
FLUSH PRIVILEGES;

DROP DATABASE reservation;
CREATE DATABASE reservation;

DROP USER reservation_test@localhost ;
CREATE USER reservation_test@localhost identified by 'reservation_test';
GRANT ALL ON reservation.* TO reservation_test@localhost ;

USE reservation ;

DROP TABLE IF EXISTS `guests`;
DROP TABLE IF EXISTS `guest`;
CREATE TABLE guest (
     id MEDIUMINT NOT NULL AUTO_INCREMENT,
     name VARCHAR(30) NOT NULL,
     PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO guest(name) VALUES('John Doe') ;
INSERT INTO guest(name) VALUES('Jane Doe') ;
INSERT INTO guest(name) VALUES('Smith Dakar') ;
INSERT INTO guest(name) VALUES('Jacobs Laden') ;
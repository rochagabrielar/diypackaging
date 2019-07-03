CREATE SCHEMA diy;
CREATE TABLE diy.users (
id INT NOT NULL AUTO_INCREMENT,
nombre VARCHAR(45) NOT NULL,
usuario VARCHAR(45) NOT NULL,
password VARCHAR(256) NOT NULL,
pais VARCHAR(45) NOT NULL,
avatar VARCHAR(45) NOT NULL,
email varchar (45) not null,
  PRIMARY KEY (id)
);
describe users;
describe diy.users;        
use diy;
drop table users;
 create table diy.users (
 id INT NOT NULL AUTO_INCREMENT,
 nombre varchar(45) not null,
 username varchar (45) not null,
 password varchar (256) Not null,
 pais varchar (45) not null,
 avatar varchar (45) not null,
 primary key (id)
 );




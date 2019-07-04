CREATE SCHEMA diy;
create table diy.users (
 id INT NOT NULL AUTO_INCREMENT,
 nombre varchar(45) not null,
 username varchar (45) not null,
 password varchar (256) Not null,
 pais varchar (45) not null,
 avatar varchar (45) not null,
 primary key (id)
 );



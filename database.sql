create database Test;
create table login(
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Username varchar(50),
	passeword varchar(50),
	Activer varchar(8)
);
insert into login(Username,passeword,Activer) values('a','a','true'),('test@test.com','Test1234','true');

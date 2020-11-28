CREATE DATABASE client CHARACTER SET utf8 COLLATE utf8_general_ci;

USE client;

CREATE TABLE users (
	username varchar(25),
	email varchar(75),
	password varchar(25),
	PRIMARY KEY(email)
);
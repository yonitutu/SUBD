DROP DATABASE IF EXISTS Crimes;	
CREATE DATABASE Crimes;
USE Crimes;

CREATE TABLE ALABAMA (
id INT NOT NULL AUTO_INCREMENT,
years INT(255) NOT NULL, 
population INT(255) NOT NULL, 
violent_crime_total INT(255) NOT NULL, 
murder INT(255) NOT NULL, 
legacy_rape1 INT(255) NOT NULL, 
revised_rape2 INT(255) NOT NULL,
robbery INT(255) NOT NULL, 
assault INT(255) NOT NULL, 
violet_crime_rate FLOAT NOT NULL,
murder_rate FLOAT NOT NULL,
legacy_rape_rate1 FLOAT NOT NULL,
revised_rape_rate2 FLOAT NOT NULL, 
robbery_rate FLOAT NOT NULL,
assault_rate FLOAT NOT NULL,
primary key (id)
);
 
 SELECT a.years, a.legacy_rape_rate1 FROM ALABAMA a
 where a.legacy_rape_rate1 <= 30;

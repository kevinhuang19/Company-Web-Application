CREATE TABLE Employee(Fname VARCHAR2(25) NOT NULL,
	Minit CHAR(5) NULL,
	Lname VARCHAR(15) NOT NULL,
	Ssn CHAR(9) NOT NULL,
	Bdate DATE NULL,
	Address VARCHAR(30) NULL,
	Sex CHAR(10) NULL,
	Salary DECIMAL(10,2) NULL,
	Super_ssn CHAR(9) NULL,
	Dno NUMBER(10) NOT NULL,
	PRIMARY KEY (Ssn )); 

 

CREATE TABLE Department(Dname VARCHAR(15) NOT NULL,
	Dnumber INT NOT NULL ,
	Mgr_ssn CHAR(9) NOT NULL ,
	Mgr_start_date DATE NULL,
	PRIMARY KEY (Dname),
	UNIQUE (Dnumber)); 

 

CREATE TABLE Dept_Locations(Dnumber INT NOT NULL ,
	Dlocation VARCHAR(15) NOT NULL,
	PRIMARY KEY (Dnumber, Dlocation)); 

 

CREATE TABLE Projects(Pname VARCHAR(15) NOT NULL,
	Pnumber INT NOT NULL,
	Plocation VARCHAR(15) NULL,
	Dnum INT NOT NULL,
	PRIMARY KEY (Pnumber),
	UNIQUE (Pname)); 

 

CREATE TABLE Works_On(Essn CHAR(9) NOT NULL ,  
	Pno INT NOT NULL ,  
	Hours DECIMAL(3,1) NOT NULL , 
 	PRIMARY KEY (Essn, Pno));

 

CREATE TABLE Dependent(Essn CHAR(10) NOT NULL,
	Dependent_name VARCHAR(15) NOT NULL,
	Sex CHAR(10) NOT NULL,
	Bdate DATE NOT NULL,
	Relationship VARCHAR(8) NOT NULL,
	PRIMARY KEY (Essn, Dependent_name)); 

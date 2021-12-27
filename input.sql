INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('Anthony', 'J', 'Anderson', '123456789', DATE '1959-01-01', '123 Jefferson, Windsor, ON', 'M', '70000', '987654321', 5); 
INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('Jennifer', NULL, 'Lopez', '147258369', DATE'1995-05-17', '490 Giles Blvd, Windsor, ON', 'F', '35000', '123456789', '5'); 
INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('Ben', 'D', 'Wall', '999999999', DATE'1945-10-26', '5725 University W, Windsor, ON', 'M', '15000', '123456789', '5'); 
INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('James', 'T', 'Richard', '963852741', DATE'1990-05-30', '556 Pierrie St, Windsor, ON', 'M', '55000', '987654321', '4'); 
INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('Teresa', 'S', 'Bond', '555555555', DATE'1999-12-14', '1754 Assumption St, London, ON', 'F', '26000', '987654321', '4') ; 
INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('Jose', NULL, 'Josua', '987654321', DATE'1986-12-24', '557 Riverside W, Windsor, ON', 'M', '150000', '888888888', '1'); 

 

INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('Joyce', 'A', 'English', '888888888', DATE'1957-11-10', '450 Dallas, Houston, TX', 'F', '160000', NULL, '1'); 

 

INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('John', 'B', 'Smith', '832051884', DATE'1976-11-10', '4768 Bridge Ave, New York, US', 'M', '29000', '987654321', '4'); 

 

INSERT INTO Employee(Fname, Minit, Lname, Ssn, Bdate, Address, Sex, Salary, Super_ssn, Dno) VALUES ('Marc', 'A', 'Mansor', '517092019', DATE'1997-03-10', '487 Edlington St, Windsor, ON', 'M', '16000', '123456789', '5');       

 

 

INSERT INTO Department (Dname, Dnumber, Mgr_ssn, Mgr_start_date) VALUES ('Headquarters', '1', '888888888', DATE'1997-10-23'); 

INSERT INTO Department (Dname, Dnumber, Mgr_ssn, Mgr_start_date) VALUES ('Administration', '4', '987654321', DATE'2005-01-01'); 

INSERT INTO Department (Dname, Dnumber, Mgr_ssn, Mgr_start_date) VALUES ('Research', '5', '123456789', DATE'2000-05-21'); 

 

 

 

 

INSERT INTO Dept_Locations (Dnumber, Dlocation) VALUES ('1', 'Windsor'); 

INSERT INTO Dept_Locations (Dnumber, Dlocation) VALUES ('4', 'Texas'); 

INSERT INTO Dept_Locations (Dnumber, Dlocation) VALUES ('5', 'Toronto'); 

INSERT INTO Dept_Locations (Dnumber, Dlocation) VALUES ('5', 'Ottawa'); 

 

 

INSERT INTO Projects (Pname, Pnumber, Plocation, Dnum) VALUES ('ProjectX', '1', 'Windsor', '1'); 

INSERT INTO Projects (Pname, Pnumber, Plocation, Dnum) VALUES ('ProjectY', '2', 'Texas', '5'); 

INSERT INTO Projects (Pname, Pnumber, Plocation, Dnum) VALUES ('ProjectZ', '3', 'New York', '5'); 

INSERT INTO Projects (Pname, Pnumber, Plocation, Dnum) VALUES ('Newbenefit', '30', 'Windsor', '4'); 

 

 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('123456789', '2', '25.5'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('147258369', '3', '35.5'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('999999999', '2', '40'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('987654321', '1', '35'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('888888888', '1', '20'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('555555555', '30', '26.5'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('987654321', '30', '7.5'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('963852741', '30', '18'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('832051884', '30', '6'); 

INSERT INTO Works_On (Essn, Pno, Hours) VALUES ('517092019', '3', '16'); 

 
INSERT INTO Dependent (Essn, Dependent_name, Sex, Bdate, Relationship) VALUES (' 963852741','Jennifer', 'F', DATE'2005-10-17', 'Daughter'); 

INSERT INTO Dependent (Essn, Dependent_name, Sex, Bdate, Relationship) VALUES (' 963852741', 'Kaylee', 'F', DATE'1990-04-13', 'Spouse'); 

INSERT INTO Dependent (Essn, Dependent_name, Sex, Bdate, Relationship) VALUES (' 555555555', 'Tommy', 'M', DATE'2010-01-01', 'Son');  

INSERT INTO Dependent (Essn, Dependent_name, Sex, Bdate, Relationship) VALUES (' 555555555', 'Nina', 'F', DATE'1996-06-19', 'Spouse'); 

INSERT INTO Dependent (Essn, Dependent_name, Sex, Bdate, Relationship) VALUES (' 987654321', 'Mayleen', 'F', DATE'1992-04-13', 'Spouse'); 

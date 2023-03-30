<?php 
// Database Creation
// CREATE DATABASE XYZCorp;

// employees Table creating
CREATE TABLE employees (
	employee_id INT (11) NOT NULL,
	name VARCHAR (255),
    age INT (11),
    salary VARCHAR (11),
    department_id INT (11),
	PRIMARY KEY (employee_id)
	);


  // department Table creating
  CREATE TABLE departments (
	id INT (11) NOT NULL,
	name VARCHAR (255),
    manager VARCHAR (255),
	PRIMARY KEY (id)
	);


// Inserting values to the employees table
 
INSERT INTO employees(employee_id, name, age, salary, department_id) 
    VALUES 
    ('1001', 'Mohammad Shobuj Khan', '33', '50000', '101'),
    ('1002', 'Mohammad Shojib Khan', '32', '750000', '102'),
    ('1003', 'Rupantor Khan', '5', '55000', '103'),
    ('1004', 'Mohammad Tahmid Khan', '6', '5000', '104'),
    ('1005', 'Sheuly Khan', '32', '20000', '105'),
    ('1006', 'Polash Mahmud', '36', '10000', '106'),
    ('1007', 'Motalem Hossail', '30', '12000', '107'),
    ('1008', 'Mohammad Sujan Khan', '28', '25000', '108'),
    ('1009', 'Jibon Hossain', '35', '42000', '109'),
    ('1010', 'Arif Khan', '45', '85000', '110');

  
// Query to select all columns and rows from the employees table.
 SELECT * FROM employees;


/* Query to select only the name and salary columns of all employees with a salary greater      than  50000. */
SELECT employees.name, employees.salary 
    FROM employees 
    WHERE salary>50000;


// A query to calculate the average salary of all employees.
SELECT AVG(salary) AS Average_Salary FROM employees;

//query to count the number of employees who work in the "Marketing" department.
SELECT COUNT(*) FROM employees WHERE department = 'Marketing';

// Query to update the salary column of the employee with an id of 1001 to 60000.
UPDATE employees SET salary = '60000' WHERE employee_id = 1001;

// query to delete all employees whose salary is less than 30000.
DELETE FROM employees WHERE salary < 30000;


// Query to select all columns and rows from the departments table.
SELECT * FROM departments;

// query to select only the name and manager columns of the "Finance" department.
SELECT name, manager FROM departments WHERE name = 'Finance';


// query to calculate the total number of employees in each department.
SELECT departments.name, COUNT(*) as total_employees
FROM employees
INNER JOIN departments ON employees.department_id = departments.id
GROUP BY departments.name;


// query to insert a new department called "Research" with a manager named "John Doe".
INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');
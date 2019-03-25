# REST-CRUD-PHP
This is about how to create or develop the REST API in PHP, which can helps beginners to learn the basics of REST framework. Now a days many mobile app developer using this framework to develop their apps. Through this beginners can learn basics of CRUD operations.

This project is MIT licensed.


**Author - Siddhant Satpute**

Hello friends I'm Siddhant Satpute. Here I'm sharing how to create or develop the REST API in PHP, which can helps begginers to learn the basics of REST framework. Now a days many mobile app developer using this framework to develop their apps. Some of them using basic CRUD operations only. 

**ABOUT :-**

Before going through the programming part first we have to understand that what is REST ?

Basically REST stands for "REpresentational State Transfer". It means when a REST API is called, the server will transfer to the client a representation of the state of the requested resource. This representation of state can be in a form of JSON format, and most of the APIs uses this state. It can also be in XML or in HTML format.

Suppose you make a request for the details of a student named Akshay to the API and it sends to the server then after processing server sends the response in a JSON format, which looks like - 

{
    
   "data": 
	[
        
	  {
            
		"roll_no": "1",
            
		"name": "Akshay",
            
		"standard": "10th",
           
		"dob": "22-May-2003",
            
		"school": "St. Thomas School, Bhopal",
            
		"Board": "CBSE",
		"Address": "H-264, Shanti Vihar, TT Nagar, Bhopal"    
	 }
    
	]

}

**AUDIENCE :-**

This documentation is designed for the begginers who wants to learn the basics of REST APIs for designing the Web/Mobile Applications with CRUD opeartions.

**PREREQUISITES :-**

Before you go through the content for learning and designing your own REST CRUD API, we assume that you already know the basics of PHP with Object Oriented concepts along with the basics of SQL and how to use and work on MySql DBMS.

**GET STARTED :-**

Now in this tutorial we'll make a REST API which perform basic CRUD operations. As you know CRUD stands for Create, Read, Update and Delete. We are using PHP for scripting and MySql for queries (and as a database). 

Now after this as I'm using XAMPP server, also I'm recommend you to use it for this tutorial. Now go to htdocs folder and create a folder with name "rest_php_students" and open up that folder in VS Code. For programming part we are going to use VS Code to write up our PHP codes. You can use any other code editor also of your choice like Sublime Text or Notepad++. 

Now in XAMPP create database with name 'college_students'. Further create table 'student_details' with 5 columns/attributes i.e. sr_no, roll_no, name, standard, dob, school, board, and address.

where, 	
	sr_no is of type INT, auto-incremented.
	roll_no is of type VARCHAR.
	name is of type VARCHAR.
	standard is of type VARCHAR.
	dob is of type DATE as it stores the Date of Birth of the student.
	school is of type of VARCHAR.
	board is of type of VARCHAR.
	address is of type of VARCHAR.

*Note : You can take the length of the attributes as you desired because I've not mentioned it.*

Now insert the elements in table 'student_details' by firing up the following SQL query - 

INSERT INTO `student_details`(`sr_no`, `roll_no`, `name`, `standard`, `dob`, `school`, `board`, `address`) VALUES (1,'1','Akshay','10th','2003-05-22','St. Thomas School, Bhopal','CBSE','H-264, Shanti Vihar, TT Nagar, Bhopal');

Just like the above SQL query you can add some more data into the same table. For more, look into code files.

As you can see that we've folder with name "PHP_REST_STUDENTS", under this folder we have following three folders :-

**1 - api :-**

This folder has sub-folder named as "CRUD" and yes this is our main folder which has five PHP files as described below -

  a) create.php : This file is used to perform Create opeartion. This file is responsible for INSERT operation in MySql 	DB. We have to    give JSON data as an input for this file.

	b) read.php : This file is responsible for SELECT operation, but it reads all the data stored in a database as it uses 	query "SELECT     * FROM...".

	c) read_single.php : As by name "read_single", you can able to understand that this file is capable to read single data 	from the          database at a time as it uses SELECT query with WHERE clause.

	d) update.php : This file is capable of performing UPDATE operation in database of a single data. This file uses 	UPDATE query with SET and WHERE clause.

	e) delete.php : This file performs DELETE opeartion in database on a single data and this file uses DELETE query 	with WHERE clause.

**2 - config :-**

This folder has just one PHP file which also named as config with ".php" as a extension. This file describes the connection with database inorder to perform above described CRUD opeartions on data stored in database.

**3 - Model :-**

This folder also has just one PHP file named same as folder name i.e. "model.php". This file is a heart of our whole REST module as it describes all the functions of CRUD operations. This file has five functions i.e. -
	a) create()
	b) read()
	c) read_single()
	d) update()
	e) delete()

All the above mentioned functions is used by the above described PHP files (in api folder).

To understand this carefully look into the code files, so that you can understand the concepts carefully.

So this much only friends!!

**HAPPY CODING :-)...**

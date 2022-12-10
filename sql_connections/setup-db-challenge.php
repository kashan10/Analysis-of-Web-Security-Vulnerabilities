<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB&TB SETUP</title>
</head>
<body style="background-image:url('../img/setup db.jpg'); background-repeat: no-repeat;">

<div style=" margin-top:20px;color:#FFF; font-size:24px; text-align:center"> 

<p>Welcome&nbsp;&nbsp;&nbsp;<span style="color:red">FSC Project</p>
<br>
</div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:left">
<p style="color:#FFFF00; font-size: 0.7em;" >
SETTING UP THE DATABASE SCHEMA AND POPULATING DATA IN TABLES:

<br><br> 


<?php
//including the Mysql connect parameters.
include("../sql_connections/sql_connect.php");


	
	
//purging Old Database	
	$sql="DROP DATABASE IF EXISTS fsc";
	if (mysqli_query($con, $sql))
		{echo "[*]...................Old database 'fsc' purged if exists"; echo "<br><br>\n";}
	else 
		{echo "[*]...................Error purging database: " . mysqli_error($con); echo "<br><br>\n";}


//Creating new database fsc
	$sql="CREATE database `fsc` CHARACTER SET `gbk` ";
	if (mysqli_query($con, $sql))
		{echo "[*]...................Creating New database 'fsc' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating database: " . mysqli_error($con);echo "<br><br>\n";}

//creating table users
$sql="CREATE TABLE fsc.users (id int(3) NOT NULL AUTO_INCREMENT, username varchar(20) NOT NULL, password varchar(20) NOT NULL, PRIMARY KEY (id))";
	if (mysqli_query($con, $sql))
		{echo "[*]...................Creating New Table 'USERS' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysqli_error($con);echo "<br><br>\n";}


//creating table emails
$sql="CREATE TABLE fsc.emails
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		email_id varchar(30) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysqli_query($con, $sql))
		{echo "[*]...................Creating New Table 'EMAILS' successfully"; echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysqli_error($con);echo "<br><br>\n";}



//creating table uagents
$sql="CREATE TABLE fsc.uagents
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		uagent varchar(256) NOT NULL,
		ip_address varchar(35) NOT NULL,
		username varchar(20) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysqli_query($con, $sql))
		{echo "[*]...................Creating New Table 'UAGENTS' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysqli_error($con);echo "<br><br>\n";}


//creating table referers
$sql="CREATE TABLE fsc.referers
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		referer varchar(256) NOT NULL,
		ip_address varchar(35) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysqli_query($con, $sql))
		{echo "[*]...................Creating New Table 'REFERERS' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysqli_error($con);echo "<br><br>\n";}







//inserting data
$sql="INSERT INTO fsc.users (id, username, password) VALUES ('1', 'Dumb', 'Dumb'), ('2', 'Angelina', 'I-kill-you'), ('3', 'Dummy', 'p@ssword'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'admin'), ('9', 'admin1', 'admin1'), ('10', 'admin2', 'admin2'), ('11', 'admin3', 'admin3'), ('12', 'dhakkan', 'dumbo'), ('13', 'admin4', 'admin4'),('14', 'admin5', 'admin5')";
	if (mysqli_query($con, $sql))
		{echo "[*]...................Inserted data correctly into table 'USERS'";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error inserting data: " . mysqli_error($con);echo "<br><br>\n";}



//inserting data
$sql="INSERT INTO `fsc`.`emails` (id, email_id) VALUES ('1', 'Dumb@dhakkan.com'), ('2', 'Angel@iloveu.com'), ('3', 'Dummy@dhakkan.local'), ('4', 'secure@dhakkan.local'), ('5', 'stupid@dhakkan.local'), ('6', 'superman@dhakkan.local'), ('7', 'batman@dhakkan.local'), ('8', 'admin@dhakkan.com')";
	if (mysqli_query($con, $sql))
		{echo "[*]...................Inserted data correctly  into table 'EMAILS'";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error inserting data: " . mysqli_error($con);echo "<br><br>\n";}



?>


</p>
</div>
</body>
</html>
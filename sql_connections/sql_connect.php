<?php

//including the Mysql connect parameters.
include("../sql_connections/db-creds.inc");
@error_reporting(0);
@$con = mysqli_connect($host,$dbuser,$dbpass);
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


    @mysqli_select_db($con, $dbname) or die ( "Unable to connect to the database: $dbname");


?>
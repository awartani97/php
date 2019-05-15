<?php

class db{
/*
* Create variables for credentials to MySQL database
* The variables have been declared as private. This
* means that they will only be available with the
* Database class
*/
private $db_host = "localhost";  // Change as required
private $db_user = "";  // Change as required
private $db_pass = "";  // Change as required
private $db_name = "e-commerce";  // Change as required
   public  function  cc()
{
    $conm = mysqli_connect("localhost", "root", "", "e-commerce");
    return $conm;
}/*
* Extra variables that are required by other function such as boolean con variable
*/
private $conn = false; // Check to see if the connection is active
private $result = array(); // Any results from a query will be stored here


// Function to make connection to database
public function connect(){
    $con=mysqli_connect("localhost","root","","e-commerce");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

}


}







?>

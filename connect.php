<?php
// $con=@mysql_connect("localhost","root","") or die("Serever could not connected");
$c=mysqli_connect("localhost","root","");

if($c){
    echo "Connected";
} 
else{
    echo "Not Connected";
}


// $db=@mysql_select_db("test") or die("DB not selected");

// $c=mysqli_connect("localhost","root","","test");
//mysql_select_db("test");
	
?>
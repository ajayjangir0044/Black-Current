<?php

$servername="localhost";

$username="u572096984_registration";

$password="Blackcurrent@1";

$dbname="u572096984_regdata";

// echo "data entered";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
       
}

else{
    echo "connection failed".mysqli_connect_error();
}

?>
<?php
 include("connection.php");

 if(strpos($_SERVER['HTTP_USER_AGENT'],'Mediapartners-Google') !== false) {
    exit();}

if(isset($_POST['submit'])){
 
 $name=$_POST['name'];

 $email=$_POST['email']; 
 $contact=$_POST['contact'];
 
 $queryy=$_POST['queryy'];
 
 $message=$_POST['message'];


 
if($name!="" && $email!="" && $contact!="" && $queryy!="" && $message!="" ){
 $query="insert into query (name,email,contact,queryy,message) values ('$name','$email','$contact','$queryy','$message')";
 $data=mysqli_query($conn,$query);

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query/feedback</title>
    
    <link rel="icon" href="Black Current logo.png" type="image/gif" sizes="100x100">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <style>
           .asdf{
               text-align:center;
               font-family:'Montserrat',sans-serrif;
               position: absolute;
top:50%;
left: 50%;
transform: translate(-50%, -50%);
            

           }
           a{
               color:black;
               outline:none;
               text-decoration:none;
           }
           a:hover{
               color:green;
               cursor:pointer;
           }
        </style>
</head>
<body>
<div class="asdf">
<img src='https://img.icons8.com/fluent/48/000000/checkmark.png'/>
    <h1>Thank you for your response.</h1>
    <a href="https://blackcurrent.club/query-feedback"> <p>Submit another response</p></a></div>
</body>
</html>

<?php
 include("connection.php");

 if(strpos($_SERVER['HTTP_USER_AGENT'],'Mediapartners-Google') !== false) {
    exit();}

if(isset($_POST['submit'])){
 


 $email=$_POST['email']; 


 
if( $email!="" ){
 $query="insert into emailletter (email) values ('$email')";
 $data=mysqli_query($conn,$query);

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email-Letter</title>
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
    <h1>Thank you for subscribing our Email Letter. Now you will receive all updates regarding our upcoming events</h1>
    <a href="https://blackcurrent.club"> <p>Go back to main website</p></a></div>
</body>
</html>

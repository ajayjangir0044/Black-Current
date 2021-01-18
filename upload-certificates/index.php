

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="icon" href="Black Current logo.png" type="image/gif" sizes="100x100">



    <!-- ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Registration</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="aarogyam.css">
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <section id="nav1">
        <div class="logo">
            <a href="#">
                <p>B<span style="color: #66BFBF;">L</span>ACK CU<span style="color: #66BFBF;">R</span>RENT</p>
            </a>

        </div>
        <div class="elements">
            <ul>
                <li><a class="hover" style="font-size: 14px;" href="http://blackcurrent.club">Home</a></li>
                <li><a class="hover" style="font-size: 14px;" href="#foot">Contact</a></li>

            </ul>
        </div>

    </section>
    <div class="abc abc2">
        <h1>Certificate Upload</h1>

    </div>
    <div id="division">
        <div id="div1"></div>
        <div id="div2">
            <form  action="upload.php" autocomplete="off" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control sub" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter full name" name="name" required>

                </div>
                
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Registration No</label>
                    <input  class="form-control sub" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter reg no" name="regno" required>
                        <small>If not in lpu, Write mobile number</small>

                </div>
             
              
                <div class="form-group">
                        <label for="exampleInputEmail1">Choose Event</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="event"
                         required>
                            <option value="current event" selected>Current Event</option>
                            <option value="Aarogyam">Aarogyam</option>
                            <option disabled>Ethical hacking</option>
                            <option disabled>IAS</option>
                        </select>
                    
                </div>
                <div class="form-group">
                    <label id="labelFiles" for="exampleFormControlFile1">Certificate upload</label>
                    <input type="file"  class="form-control-file sub" id="files" name="pic" required>
                  </div>


                <button id="submission" type="submit" name="submit" class="btn btn-outline-dark btn-lg">Submit</button>
            <small id="small" style="display:none;" >Thank you for registering. We will contact you shortly.</small>
            </form>
        </div>
        <div id="div3"></div>

    </div>



    <section id="foot">
        <footer>
            <div id="part1">
                <div>
                    <img src="Black Current logo white.png" alt="">
                    <a href="http://blackcurrent.club">
                        <p>Home</p>
                    </a>
                    <a href="http://blackcurrent.club">
                        <p>About us</p>
                    </a>
                    <a href="http://blackcurrent.club">
                        <p>Contact us</p>
                    </a>
                    <a href="http://blackcurrent.club">
                        <p>Recruitment</p>
                    </a>
                </div>
            </div>
            <div id="part2">
                    <div>
                        <h1>Contact us</h1>
                        <p>Address: Room no 205 SOC , Block 13 Division of student welfare, Punjab 144411</p>

                        <p>Email: <a href="mailto:blackcurrent@gutsandgloryy.com"><span>
                                    blackcurrent@gutsandgloryy.com</span></a></p>
                        <p><a href="tel:+918708588528">Call us : +91 87085 88528</a></p>
                        <p><a href="tel:+917413882466">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp+91
                                74138 82466</a></p>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/company/black-current/"> <i class="ri-linkedin-line"></i></a>
                        <a href="https://www.instagram.com/blackcurrentlpu/"><i class="ri-instagram-line"></i></a>
                        <a href="https://www.facebook.com/blackcurrentlpu-107331947776401"><i
                                class="ri-facebook-line"></i></a></div>
                </div>
                <div id="part3">
                    <h1>Location</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.755165967968!2d75.703695914989!3d31.25520038145809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5fc129df6773%3A0xa7fc117f4c2e7bc0!2sBlack%20Current%20LPU!5e0!3m2!1sen!2sin!4v1601870107775!5m2!1sen!2sin"
                        width="250" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>

                </div>


            </footer>
            <div id="credits">
                <p>Copyright © 2020 All rights reserved. This website is made with <img width="20px"
                        src="https://img.icons8.com/fluent/48/000000/like.png" /> by <a
                        href="https://linkedin.com/in/ajay-jangir"> Ajay Jangir</a> & <a
                        href="https://linkedin.com/in/asif-sheikh-b16093188"> Mohd. Asif Sheikh</a></p>
            </div>


    </section>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="register.js"></script>
    <script>
    $("#submission").click(function (){
   
   //    console.log(document.getElementsByTagName("input")[0].value)
      

 
   


        
       if(document.getElementsByClassName("sub")[0].value!="" && document.getElementsByClassName("sub")[1].value!="" && document.getElementsByClassName("sub")[2].value!="" && document.getElementsByClassName("sub")[3].value!="" && document.getElementsByClassName("sub")[4].value!="" && document.getElementsByClassName("sub")[5].value!="" && document.getElementsByClassName("sub")[6].value!="" ){
               
           $("#submission").html("<img src='https://img.icons8.com/fluent/48/000000/checkmark.png'/>")
           $("#small").css("display","block")
       }
  
      
   
   
   

})</script>
</body>

</html>

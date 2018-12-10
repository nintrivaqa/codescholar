<html lang="en">

<head>
    <title>
        CodeScholar
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale = 1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/my.css">
    <style>
.error {color: #FF0000;}
.sucs {color:#008000}
.contact-form .col-lg-6{
    padding:0;
}

@media (min-width: 1590px){
.contact-form .col-lg-6 {
    width: 40%;
}}
@media (min-width: 1390px){
.contact-form .col-lg-6 {
    width: 47%;
}}
@media (max-width:1390px) and (min-width:1200px){
    .contact-form .col-lg-6{
        width:51%;
    }
}
</style>
</head>

<body>
<?php
$firstnameErr=$lastnameErr=$emailErr=$phoneErr=$success="";

?>
    <!--################### Header-->
    <header>
        <div class="row">
            <div id="header">
                <!--######################## Nav-->
                <div class="container-fluid">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>                        
                                        </button>
                                <a class="navbar-brand" href="#"><img src="img/Code-Scholar_logo.png"></a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul id="nav-menu" class="nav navbar-nav navbar-right">
                                    <li><a class="mnu" href="index.php">Home</a></li>
                                    <li><a class="mnu" href="about.html">About</a></li>
                                    <li class="mnu dropdown">
                                        <a class="mnu dropdown-toggle" data-toggle="dropdown" href="#">Courses
                                    <span class="caret"></span></a>
                                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                            <li class="dropdown-submenu" data-toggle="dropdown-submenu">
                                                <a tabindex="-1" href="#">Coding Bootcamps</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blended.html">Onsite Bootcamp</a></li>
                                                    <li><a href="blended.html">Blended Bootcamp</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="other.html">Other Courses</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="mnu" href="FAQ.html">FAQ</a></li>
                                    <li><a class="mnu" href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--######################## /////////////Nav-->
                <!--###############################################################################################-->
                <!--#################slider-->
                <div class="headerimg">
                    <h1 style="border-bottom: 5px solid #e9c435;">Contact us</h1>
                    <img src="img/contact-heder.jpg">
                </div>
                <!--#################/////////////slider-->
            </div>
        </div>
        <!--####################////////Header-->
    </header>
    <!--#################### BODY-->
    
    <div id="body">
        <!--###############################################################################################-->
        <!--###################### Why codescholar-->
        <div class="row">
            <section>
                    <div class="container-fluid" style="padding:0;">
                            <div class="contact col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="left col-xs-12 col-sm-12 col-md-12 col-lg-7" style="padding:0;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.007357454266!2d76.33677831563364!3d10.01625027550048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ef1da6a76725%3A0x773fb08ba4199b82!2sNintriva!5e0!3m2!1sen!2sin!4v1542944098529" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                    <div class="right col-xs-12 col-sm-12 col-md-12 col-lg-5">
           
                                       <br>
                                       <div class="about-left col-md-12 col-lg-6">
                                          <h4>Nintriva,
                                            Kadavil Building,Kunnumpuram,<br>
                                            Old Civil Station Road,Kakkanad<br>
                                            Cochin- 682030<br>Kerala, India<br> Ph:9995875073<br>Ph:7736407223
                                          </h4>
                                    
                                       </div>
                                       <div class="contact-form col-lg-12">
                                   
                                          <div class="col-lg-6">
                                            <input type="text" id="first_name" name="first_name"   placeholder="First Name"><br>
                                            <span class="error" id="namespan"><?php echo $firstnameErr;?></span> 
                                          </div>  
                                          <div class="col-lg-6">
                                            <input type="text" id="last_name" name="last_name"   placeholder="Last Name"><br>
                                            <span class="error" id="lastspan"> <?php echo $lastnameErr;?></span>
                                          </div>
                                          <div class="col-lg-6">
                                            <input type="number" name="phone" id="phone"   placeholder="Phone"><br>
                                            <span class="error" id="phonespan"> <?php echo $phoneErr;?></span>
                                          </div>
                                          <div class="col-lg-6">
                                            <input type="email" name="email" id="email"  placeholder="Email"><br>
                                            <span class="error" id="emailspan"> <?php echo $emailErr;?></span>
                                          </div>
                                          <br>
                                          <!-- <button type="submit" class="black-btn">SEND</button> -->
                                          <div class="col-lg-6">
                                            <button type="submit" class="black-btn" id="submit" value="SEND">SEND</button><br>
                                            <span class="sucs" id="sucspan"> <?php echo $success;?></span>
                                          </div>
                                          <div class="col-lg-4">
                  <button class="btn btn-lg btn-warning" id="load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Loading...</button>
                  </div>
                                        
                                       </div>
                                    </div>
                            </div>
                    </div>
            </section>
                
        </div>
        <!--###################### /////////////Why codescholar-->
        <!--###############################################################################################-->
        <!--###############################################################################################-->
    </div>


    <!--################### Footer-->
    <div class="row">
        <!--################### Footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div id="footer" class="col-lg-12">
                        <div class="codesidscholar col-lg-4 col-md-4">
                            <img src="img/codescolar-logo-footer.png">
                            <P class="codescholarfooter">CodeScholar offers a personalised approach to technical education.</P>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <p class="copyright">(c) copyright owned and reserverd by CodeScholar 2018.</p>
                        </div>
                        <div id="newsletter" class="col-lg-4 col-md-4 text-right">
                            <h5>CONTACT US</h5>
                            <div class="form-group">
                                <p class="nomargn">hello@codescholar.in</p>
                                <p class="nomargn">+91 9995875073</p>
                                <p class="nomargn">+91 7736407223</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        document.getElementById("load").style.visibility = "hidden";
        // document.getElementById('namespan').textContent='';
        //     document.getElementById('lastspan').textContent='';
        //     document.getElementById('phonespan').textContent='';
        //     document.getElementById('emailspan').textContent='';
          
    $('.dropdown-submenu a.test').on("click", function(e){
       
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
    $('#submit').on('click', function() {
        
        var first_name= document.getElementById('first_name').value; 
        var last_name= document.getElementById('last_name').value; 
        var phone= document.getElementById('phone').value; 
        var email= document.getElementById('email').value; 
       
        var letters = /^[A-Za-z]+$/;
        var phoneno = /^\d{10}$/;
        var error=0;
        var brn='';
         if(first_name==''){
             document.getElementById('namespan').textContent='Required';
             error=1;

         }
 
         else if (!letters.test(first_name)) {
     
              document.getElementById('namespan').textContent='Invalid';
             error=1;

         }
         else{
             document.getElementById('namespan').textContent='';

         }
         if(last_name==''){
             document.getElementById('lastspan').textContent='Required';
             error=1;

         }
 
         else if (!letters.test(last_name)) {
     
             document.getElementById('lastspan').textContent='Invalid';
             error=1;

         }
         else{
             document.getElementById('lastspan').textContent='';
         }
         if(email=='')
         {
             document.getElementById('emailspan').textContent='Required';
             error=1;

         }
         else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
         {
             document.getElementById('emailspan').textContent='Invalid';
             error=1;
         }
         else{
             document.getElementById('emailspan').textContent='';

         }
   
         if(phone=='')
         {
             document.getElementById('phonespan').textContent='Required';
             error=1;

         }
         else if(!phone.match(phoneno))
          {
             document.getElementById('phonespan').textContent='Invalid';
             error=1;

         }
         else{
             document.getElementById('phonespan').textContent='';
         }
        
         if(error==0)
         {
             document.getElementById("load").style.visibility =  'visible';
            
             $.ajax({
                 type: 'post',
                  url: 'mail.php',
                  data: { 
                     'first_name':first_name, 
                     'last_name':last_name,
                     'email':email,
                     'phone':phone,
                 
                  },
                  success: function( data ) {
                    
                     if(data="Success")
                     {
                        
                      document.getElementById('first_name').value=''; 
                      document.getElementById('last_name').value=''; 
                      document.getElementById('phone').value=''; 
                      document.getElementById('email').value=''; 
                    
                      document.getElementById("load").style.visibility ="hidden";
                      document.getElementById('sucspan').textContent='Thank you! Your Details has been sent successfully';
                         // $('#myModal').modal('hide');
                         // alert('Thank you! Your Details has been sent successfully');
                     }
             }
         });
         }


      
     
     });
    
  });
  function clearform()
{
    document.getElementById("nam").value=""; //don't forget to set the textbox ID
    document.getElementById("last").value=""; //don't forget to set the textbox ID
   
}
    </script>
</body>

</html>

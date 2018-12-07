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
     <link href="css/flexisel.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/my.css">
    <style>
.error {color: #FF0000;
}
.sucs {color:#008000;
    font-weight: 600;
    font-size: 20px;}
    .glyphicon-refresh-animate {
    -animation: spin .7s infinite linear;
    -webkit-animation: spin2 .7s infinite linear;
}

@-webkit-keyframes spin2 {
    from { -webkit-transform: rotate(0deg);}
    to { -webkit-transform: rotate(360deg);}
}

@keyframes spin {
    from { transform: scale(1) rotate(0deg);}
    to { transform: scale(1) rotate(360deg);}
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</head>

<body>
    <?php
    $nameerr=$lasterr=$emailerr=$phoneerr= $success=$qualierr=$brancherr=$exerr=$yearerr="";
    ?>
    
    <!--################### Header-->
    <div class="row">
        <header>
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
                                <a class="navbar-brand" href="index.php"><img src="img/Code-Scholar_logo.png"></a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul id="nav-menu" class="nav navbar-nav navbar-right">
                                    <li><a class="mnu" href="#">Home</a></li>
                                    <li><a class="mnu" href="about.html">About</a></li>

                                    <li class="mnu dropdown">
                                        <a class="mnu dropdown-toggle" data-toggle="dropdown" href="#">Courses
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu multi-level" role="menu">
                                            <li class="dropdown-submenu">
                                                <a  class="test" data-toggle="dropdown-submenu" href="#">Coding Bootcamps</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="onsite.html">Onsite Bootcamp</a></li>
                                                    <li><a href="blended.html">Blended Bootcamp</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="other.html">Other Courses</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="mnu" href="FAQ.html">FAQ</a></li>
                                    <li><a class="mnu" href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--######################## /////////////Nav-->
                <!--###############################################################################################-->
                <!--#################slider-->
                <div id="sldr" class="container">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/codescholar1 (1).jpg" alt="bible">
                                <div class="container">
                                    <div class="header-qotes">
                                        <h1>Zero to Job Ready in 12 weeks.</h1>
                                        <p>Structured Training programs in software development - Fulltime, Parttime,Onsite and Online </p>
                                        <a href="#"><button type="button" class="rgtr" data-toggle="modal" data-target="#myModal">Apply Now</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/codescholar2 (1).jpg" alt="bible">
                                <div class="container">
                                    <div class="header-qotes">
                                        <h1>Moulding software professionals loved by the industry.</h1>
                                        <p>Cutting Edge Curriculum mapped to Industry needs designed to make you Future Ready</p>
                                        <a href="#"><button type="button" class="rgtr" data-toggle="modal" data-target="#myModal">Explore Courses
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/codescholar3 (1).jpg" alt="bible">
                                <div class="container">
                                    <div class="header-qotes">
                                        <h1>Transform your career</h1>
                                        <p>Upgrade yourself with on-demand skills in the high growth technology industry</p>
                                        <a href="#"><button type="button" class="rgtr" data-toggle="modal" data-target="#myModal">Explore Courses</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--#################/////////////slider-->
            </div>
            <!--####################////////Header-->
        </header>
    </div>
    <!--#################### BODY-->
    <div id="body">
        <!--#######################our specialities######################-->
        <div class="row">
            <section id="section1">
                <div id="os" class="container">
                    <div class="row">
                        <div id="os1" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 os">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <img src="img/1_Outlined.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1">
                                <h4>Flexible Programs</h4>
                                <p>A variety of programs to meet your unique needs - full time,part time, online, onsite and blended . </p>
                            </div>
                        </div>
                        <div id="os2" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 os">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <img src="img/2_Outlined.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1">
                                <h4>Personalised Mentoring</h4>
                                <p>Our instructors are there for you - both in and out of class , to guide you and help you evolve as a programmer.</p>
                            </div>
                        </div>
                        <div id="os3" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 os">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <img src="img/3_Outlined.png">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1">
                                <h4>Career Services</h4>
                                <p>We do not just teach you how to code, but handhold you till you land your first job as a software developer. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--####################### /////our specialities######################-->
        <!--###############################################################################################-->
        <!--###################### Why codescholar-->
        <section id="section2">
            <div class="container-fluid">
                <div class="row">
                    <div id="parallax" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="parallax parallax__layer--base text-center">
                            <img src="img/codescholer.png">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="specialities">
                            <h6>WHY?</h6>
                            <h1> We are Different</h1>
                            <hr>
                            <p>
                                CodeScholar is a new age coding bootcamp which offers a personalised approach to technical education.
                                <p>
                                    An initiative of NIT/IIM Alumni and Technology Entrepreneurs with extensive experience in the IT industry, Code Scholar provides high impact training, focussed on skills that employers look for.
                                </p>
                            </p>
                            <p> Our approach is not just about teaching a particular language or technology, but inspires our students to think like a true professional, and develop in them the ability to teach themselves ,any technology on their own and
                                remain future ready - for life.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--###################### /////////////Why codescholar-->
        <!--###############################################################################################-->
        <!--######################courses-->
        <section id="section3">
            <div class="offer">
                <div class="container">
                    <h6>COURSES WE OFFER</h6>
                    <h1>Choose the best for you</h1>
                    <hr>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div id="courses" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="onsite" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <h3>Onsite Coding BootCamp</h3>
                                <h6>12 weeks Full Time </h6>
                                <p>Intense structured training program to make you a professional programmer in the shortest possible time. </p>
                                <a href="onsite.html"><button class="sktlbtn" type="button">Learn More</button></a>
                            </div>
                            <div id="online" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <h3>Remote Coding BootCamp</h3>
                                <h6>32 Weeks Part-Time</h6>
                                <p>Blended Program with Online learning and On-Campus contact sessions</p>
                                <a href="blended.html"><button class="sktlbtn" type="button">Learn More</button></a>
                            </div>
                            <div id="other" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <h3>Other Courses</h3>
                                <h3>&nbsp;</h3>
                                <p>Specialised trainings to upgrade your skills for experienced professonals</p>
                                <a href="other.html"><button class="sktlbtn" type="button">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--###################### ////////////courses-->
        <!--###############################################################################################-->
        <!--######################client company slider-->
        <section id="section4">
            <div class="clients">
                <div class="container">
                    <h6>The Industry Loves To Hire Our Students</h6>
                    <h1>Our Students are employed with</h1>
                    <hr>
                </div>
                <!--#################slider-->
                <div class="slideshow-container">
                   <ul id="flexiselslider">
    <li><img src="img/1.png" /></li>
    <li><img src="img/2.png" /></li>
    <li><img src="img/3.png" /></li>
    <li><img src="img/4.png" /></li>   
    <li><img src="img/5.png" /></li>
    <li><img src="img/6.png" /></li>
    <li><img src="img/7.png" /></li>
    <li><img src="img/9.png" /></li>
    <li><img src="img/10.png" /></li>
    <li><img src="img/11.png" /></li>
    <li><img src="img/12.png" /></li>
    <li><img src="img/13.png" /></li>        
    <li><img src="img/14.png" /></li>                                                
                </ul>
                <div class="clearout"></div>
                </div>
                <!--#################//////////////slider-->
            </div>
        </section>
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
                                <p class="nomargn">Codescholar@gmail.com</p>
                                <p class="nomargn">+91 9995875073</p>
                                <p class="nomargn">+91 7736407223</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>



    <!--###################////// Footer-->
    
      <!--form -->

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" id="close" class="close" >&times;</button>
            <div class="image-pop-up">
               <h1>Enroll Now  </h1>
            </div>
        </div>
             
        <div class="modal-body">
       
            
           <div class="container-fluid">

              <div class="row">
                   
                <div class="col-lg-6">
                        
                    
                    <label>First Name</label><br>
                    <input id="first_name" type="text">
                 </div>
                 <div class="col-lg-6">
                    <label>Last Name</label><br>
                    <input id="last_name" type="text">
                 </div>
                 
                 <div class="col-lg-6">
                 <span id="namespan" class="error"> <?php echo $nameerr;?></span>
                 </div> 
                 <div class="col-lg-6">
                 <span id="lastspan" class="error"> <?php echo $lasterr;?></span>
                 </div> 
                     
                 <div class="col-lg-6">
                    <label>Email</label><br>
                    <input id="email" type="email">
                 </div>
                 <div class="col-lg-6">
                    <label>Phone</label><br>
                    <input id="phone" type="text">
                 </div>
                 
                 <div class="col-lg-6">
                 <span id="emailspan" class="error"> <?php echo $emailerr;?></span>
                 </div> 
                 <div class="col-lg-6">
                 <span id="phonespan" class="error"> <?php echo $phoneerr;?></span>
                 </div> 
                 <div class="col-lg-6">
                  <label>Education Qualification</label><br>
                  <div class="dropdown">
                    <select class="drop-btn" name='year_admission' id='qualification'>
                    <option value='' selected disabled>Choose here</option>
                        <option value='Btech'>Btech</option>    
                        <option value='MCA'>MCA</option>
                        <option value='BCA'>BCA</option>
                        <option value='BSc'>BSc</option>
                        <option value='MSc'>MSc</option>
                        <option value='Others'>Others</option>
                    
                        </select>
                  </div>
               </div>
               <div class="col-lg-6">
                  <label>Branch</label><br>
                  <div class="dropdown">
                    <select class="drop-btn" name='year_admission' id='branch'>
                        <option value='' selected disabled>Choose here</option>
                        <option value='Computer Science'>Computer Science</option>                                 
                        <option value='Information Technology'>Information Technology</option>
                        <option value='Electronics and Communication'>Electronics and Communication</option>
                        <option value='Electronics and Electrical'>Electronics and Electrical</option>
                        <option value='Civil'>Civil</option>
                        <option value='Applied Electronics and Instrumentation'>Applied Electronics and Instrumentation</option>
                        <option value='Others'>Others</option>
                    
                        </select>
                  </div>
               </div>
               <div class="col-lg-6">
                 <span id="qualificationspan" class="error"> <?php echo $qualierr;?></span>
                 </div> 
                 <div class="col-lg-6">
                 <span id="branchspan" class="error"> <?php echo $brancherr;?></span>
                 </div> 
               <div class="col-lg-6">
                  <label>Year of Passing(YOP)</label><br>
                  <div class="dropdown">
                    
                   
                    <select class="drop-btn" name='year_admission' id='year_admission'>
                    <option value='' selected disabled>Choose here</option>
                         <option value='2019'>2019</option>   
                         <option value='2018'>2018</option>                                    <option value='2017'>2017</option>
                         <option value='2016'>2016</option>
                         <option value='2015'>2015</option>
                         <option value='2014'>2014</option>
                         <option value='2013'>2013</option>
                         <option value='2012'>2012</option>
                         <option value='2011'>2011</option>
                         <option value='2010'>2010</option>
                         </select>
                  </div>
               </div>
               <div class="col-lg-6">
                  <label>Previous Experience</label><br>
                  <div class="dropdown">
                    <select class="drop-btn" name='year_admission' id='experience'>
                    <option value='' selected disabled>Choose here</option>
                        <option value='1 month'>1 month</option>                          
                             <option value='2 months'>2 months</option>
                        <option value='3 months'>3 months</option>
                        <option value='4 months'>4 months</option>
                        <option value='5 months'>5 months</option>
                        <option value='6 months'>6 months</option>
                        <option value='7 months'>7 months</option>                            
                         <option value='8 months'>8 months</option>
                        <option value='9 months'>9 months</option>
                        <option value='10 months'>10 months</option>
                        <option value='11 months'>11 months</option>
                        <option value='12 months'>12 months</option>
                    
                        </select>
                  </div>
                  </div>
                  <div class="col-lg-6">
                 <span id="year_admissionspan" class="error"> <?php echo $yearerr;?></span>
                 </div> 
                 <div class="col-lg-6">
                 <span id="experiencespan" class="error"> <?php echo $exerr;?></span>
                 </div> 
                  <div class="col-lg-3">
                  </div>
                  <div class="col-lg-4">
                  <button class="submit-form-btn" type="submit" id="submit" name="submit" class="submit-form">Submit</button>
                  <span id='sucspan' class="sucs"><?php echo $success;?></span>
                  </div>
                  <br>
                  <div class="col-lg-4">
                  <button class="btn btn-lg btn-warning" id="load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Loading...</button>
                  </div>
                
            </div>

           </div>
           
        </div>
        <div class="modal-footer">
         
        </div>
 
      </div>
      
    </div>
  </div>
  
    <script type="text/javascript">

    $("#flexiselslider").flexisel({
        visibleItems: 4,
        itemsToScroll: 1,         
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }  
    });




    $(document).ready(function(){
        document.getElementById("load").style.visibility = "hidden";
    $('.dropdown-submenu a.test').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
   
    });
</script>
   <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000); // Change image every 2 seconds
        }
    </script>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
        $("img,a").mousedown(function() {
            return false;
        });
    </script>


    <script>
        $("img,a").mousedown(function() {
            return false;
        });
    </script>
</body>

</html>
<script>
     $(document).ready(function(){
   
   
    $('#qualification').on('change', function() {
        console.log(this.value);
      
                        if (this.value == 'BCA' || this.value == 'MCA')
                           {
                              $('#branch').val('');
                              $('#branch').prop('disabled', true);       

                            }
                        else {
                              $('#branch').val('');
                              $('#branch').prop('disabled', false);
                        }
                       
                          

                     });
    $('#submit').on('click', function() {
        
           var first_name= document.getElementById('first_name').value; 
           var last_name= document.getElementById('last_name').value; 
           var phone= document.getElementById('phone').value; 
           var email= document.getElementById('email').value; 
           var branch= document.getElementById('branch').value; 
           var experience= document.getElementById('experience').value; 
           var qualification= document.getElementById('qualification').value; 
           var year_admission= document.getElementById('year_admission').value; 
           var letters = /^[A-Za-z]+$/;
           var phoneno = /^\d{10}$/;
           var error=0;
           var brn='';
            if(first_name==''){
                document.getElementById('namespan').textContent='First Name is Required';
                error=1;

            }
    
            else if (!letters.test(first_name)) {
        
                 document.getElementById('namespan').textContent='Only letters and white space allowed';
                error=1;

            }
            else{
                document.getElementById('namespan').textContent='';

            }
            if(last_name==''){
                document.getElementById('lastspan').textContent='Last Name is Required';
                error=1;

            }
    
            else if (!letters.test(last_name)) {
        
                document.getElementById('lastspan').textContent='Only letters and white space allowed';
                error=1;

            }
            else{
                document.getElementById('lastspan').textContent='';
            }
            if(email=='')
            {
                document.getElementById('emailspan').textContent='Email is Required';
                error=1;

            }
            else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
            {
                document.getElementById('emailspan').textContent='Invalid Email';
                error=1;
            }
            else{
                document.getElementById('emailspan').textContent='';

            }
      
            if(phone=='')
            {
                document.getElementById('phonespan').textContent='Phone Number is Required';
                error=1;

            }
            else if(!phone.match(phoneno))
             {
                document.getElementById('phonespan').textContent='Invalid Phone Number';
                error=1;

            }
            else{
                document.getElementById('phonespan').textContent='';
            }
            if(qualification=='')
            {
                document.getElementById('qualificationspan').textContent='Qualification is Required';
                error=1;

            }
            else{
                document.getElementById('qualificationspan').textContent='';
            }
            if(branch=='')
            {
              
                if(qualification=='BCA' || qualification == 'MCA'){
                    document.getElementById('branchspan').textContent='';
                }
                else{
                document.getElementById('branchspan').textContent='Branch is Required';
                error=1;
                }

            }
            else{
                document.getElementById('branchspan').textContent=''; 
               
            }
            if(year_admission=='')
            {
                document.getElementById('year_admissionspan').textContent='Year of Passing is Required';
                error=1;

            }
            else{
                document.getElementById('year_admissionspan').textContent='';
            }
            if(experience=='')
            {
                document.getElementById('experiencespan').textContent='Experience is Required';
                error=1;

            }
            else{
                document.getElementById('experiencespan').textContent='';
            }
            

            if(error==0)
            {
                document.getElementById("load").style.visibility =  'visible';
               
                $.ajax({
                    type: 'post',
                     url: 'test.php',
                     data: { 
                        'first_name':first_name, 
                        'last_name':last_name,
                        'email':email,
                        'phone':phone,
                        'qualification':qualification,
                        'branch':branch,
                        'year_admission':year_admission,
                        'experience':experience
                     },
                     success: function( data ) {
                       
                        if(data="Success")
                        {
                           
                         document.getElementById('first_name').value=''; 
                         document.getElementById('last_name').value=''; 
                         document.getElementById('phone').value=''; 
                         document.getElementById('email').value=''; 
                         document.getElementById('year_admission').selectedIndex = 0;
                         document.getElementById('qualification').selectedIndex = 0;
                         document.getElementById('branch').selectedIndex = 0;
                         document.getElementById('experience').selectedIndex = 0;
                         document.getElementById("load").style.visibility ="hidden";
                         document.getElementById('sucspan').textContent='Thank you! Your Details has been sent successfully';
                            // $('#myModal').modal('hide');
                            // alert('Thank you! Your Details has been sent successfully');
                        }
                }
            });
            }


         
        
        });
        $('#close').on('click', function() {
            document.getElementById('namespan').textContent='';
            document.getElementById('lastspan').textContent='';
            document.getElementById('phonespan').textContent='';
            document.getElementById('emailspan').textContent='';
            document.getElementById('sucspan').textContent='';
            document.getElementById('year_admissionspan').textContent='';
            document.getElementById('qualificationspan').textContent='';
            document.getElementById('branchspan').textContent='';
            document.getElementById('experiencespan').textContent='';
            document.getElementById('year_admission').selectedIndex = 0;
            document.getElementById('qualification').selectedIndex = 0;
            document.getElementById('branch').selectedIndex = 0;
            document.getElementById('experience').selectedIndex = 0;
            $('#myModal').modal('hide');

        });

  });
  </script>
 
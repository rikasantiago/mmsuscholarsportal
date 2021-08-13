<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Register </title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Scholar.css">  
        <!-- SCRIPT -->
        <script src="/js/Scholar.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">
    </head>
    
    <body class="antialiased">
        
       <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:7vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <h4>MMSU SCHOLAR'S PORTAL</h4>
        </div>
    
        <!--Register-->

        <div class="logincontainer2">
            <div class="wrapper">
            <div class="title"><span>Register</span></div>
        <form action="#">
          <div class="row"> 
            <input type="text" placeholder="First Name">
          </div>
          <div class="row"> 
            <input type="text" placeholder="Middle Name">
          </div>
          <div class="row"> 
            <input type="text" placeholder="Last Name">
          </div>
          <div class="row"> 
            <input type="text" placeholder="Suffix">
          </div>
          <div class="row">
            <input type="text" placeholder="Student ID/Examinee No">
          </div>
          <div class="row">
            <input type="text" placeholder="Email Address">
          </div>
          <div class="row">
            <input type="password" placeholder="Password">
          </div>
          <div class="row">
            <input type="password" placeholder="Confirm Password">
          </div>

          <p style="text-align:justify; font-size:0.7vw;">By clicking Signup, you agree to the collection and processing of your personal data
            in accordance with the policies of the Mariano Marcos State University. This consent does 
            not preclude the existence of other criteria for lawful processing of personal data and
            does not waive any rights under the <a href="https://www.officialgazette.gov.ph/2012/08/15/republic-act-no-10173/">Data Privacy Act of 2012</a> and other 
            applicable laws.
          </p>

          <div class="row button"> <br>
          <a href="loginstudent"><button type="button" class="btnlogin">Signup</button></a>
          </div>
          
        </form>
      </div>
    </div>
            
  
    </body>
</html>

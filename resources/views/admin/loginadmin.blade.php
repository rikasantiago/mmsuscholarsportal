<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Admin.css"> 
        <!-- SCRIPT -->
        <script src="/js/Admin.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">
    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
    
        <!--Login-->

        <div class="logincontainer">
            <div class="wrapper">
            <div class="title"><span>Admin Login</span></div>
        <form action="#">
          <div class="row">
           
            <input type="text" placeholder="Admin ID">
          </div>
          <div class="row">
           
            <input type="password" placeholder="Password">
          </div>

          <div class="row button"> <br>
          <a href="home"><button type="button" class="btnlogin">Login</button></a>
          </div>
          
        
      </div>
    </div>
            
  
    </body>
</html>

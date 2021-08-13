<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Admin.css"> 
        <!-- SCRIPT -->
        <script src="/js/Admin.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="fonts/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/material-design-icons/material-icon.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">

<style>

.column {
  float: left;
  width: 33.33%;
  padding: 1vw;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>
        
    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
        

       <!-- Sidebar -->
       <div class="w3-sidebar w3-bar-block" style="width:20%; background: #E8E8E8; border-color: black;">
  <a href="#" class="w3-bar-item w3-button" style="font-size:2vw;"></i>Admin</a><br>
  <a href="home" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-home" style="font-size:2vw; left:-0.5vw;color:black;"></i>Home</a><br>
  <a href="calendar" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-calendar" style="font-size:2vw; left:-0.5vw;color:black;"></i>Calendar of Events</a><br>
  <div class="dropdown" style="float:left;">
  <a href="#" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-list" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Scholars</a><br>
  <div class="dropdown-content" style="left:0; top:0vw;">
  <a href="cas">CAS</a>
  <a href="#">COE</a>
  <a href="#">CHS</a>
  <a href="#">CIT</a>
  <a href="#">CTE</a>
  <a href="#">CBEA</a>
  <a href="#">CAFSD</a>
  <a href="#">CASAT</a>
  </div>
</div>

  <a href="scholarshipprogramadmin" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-education" style="font-size:2vw; left:-0.5vw;color:black;"></i>Scholarship Programs</a><br>
  <a href="welcome" class="w3-bar-item w3-button" style="font-size:1.4vw; color:red;"><i class="glyphicon glyphicon-log-out" style="font-size:2vw; left:-0.5vw;color:black;"></i>Logout</a><br>
</div><br><br>

    <!-- Page Content -->
  <!--start widget-->

  <div class="state-overview">
 
    <div class="row" style="--bs-gutter-x:1.5rem; --bs-gutter-y:0; display:flex; flex-wrap:wrap;margin-top: -3vw; margin-left:20vw;">

    <div class="analytics" style="flex:0 0 auto; width: 90%;">
    <div class="analytics1" style="background: linear-gradient(45deg, #2ed8b6, #59e0c5);min-height: 100pvw; width: 100%; margin-left: 4vw; margin-top: 3vw; margin-bottom: 0vw; padding: 1vw; border-radius: 2vw;">
        <span class="info-box-icon push-bottom" style="margin-top: 0vw; float: left; height: 5vw; width: 5vw; text-align: center; font-size: 2vw; line-height: 5vw; background: rgba(0, 0, 0, 0.2); border-radius: 100%;">
        <i class="material-icons">group</i>
        </span>
    
    <div class="info-box-content" style="padding: 0vw 0vw 1vw 0;margin-left: 5vw;">
        <span class="info-box-text" style="display: block;font-size: 2vw;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-weight: 400;">Total Scholars</span>
        <span class="info-box-number" style="font-weight:300; font-size:1.5vw;">450</span>
    
    <div class="progress">
        <div class="progress-bar" style="width: 45%;"></div>
    </div>    

    <span class="progress-description" style="margin:0;"> 45% Increase in 28 days</span>
</div>
</div>

<div class="analytics" style="flex:0 0 auto; width: 100%;">
    <div class="analytics1" style="background: linear-gradient(45deg, #ffb64d, #ffcb80);min-height: 100pvw; width: 100%; margin-left: 4vw; margin-top: 3vw; margin-bottom: 0vw; padding: 1vw; border-radius: 2vw;">
        <span class="info-box-icon push-bottom" style="margin-top: 0vw; float: left; height: 5vw; width: 5vw; text-align: center; font-size: 2vw; line-height: 5vw; background: rgba(0, 0, 0, 0.2); border-radius: 100%;">
        <i class="material-icons">person</i>
        </span>
    
    <div class="info-box-content" style="padding: 0vw 0vw 1vw 0;margin-left: 5vw;">
        <span class="info-box-text" style="display: block;font-size: 2vw;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-weight: 400;">New Scholars</span>
        <span class="info-box-number" style="font-weight:300; font-size:1.5vw;">155</span>
    
    <div class="progress">
        <div class="progress-bar" style="width: 25%;"></div>
    </div>    

    <span class="progress-description" style="margin:0;"> 20% Increase in 28 days</span>
</div>
</div>






 
  
    </body>
</html>
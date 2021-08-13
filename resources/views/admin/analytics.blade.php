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
    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:100px;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.20em; font-weight: bolder; margin-top:35px; margin-right:1090px;">MMSU SCHOLAR'S PORTAL</p>
        </div>
        

        

       <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block" style="width:20%; background: #E8E8E8; border-color: black;">
    <a href="#" class="w3-bar-item w3-button" style="font-size:48px;"></i>Admin</a><br>
  <a href="home" class="w3-bar-item w3-button" style="font-size:20px;"><i class="glyphicon glyphicon-home" style="font-size:28px; left:-10px;color:black;"></i>Home</a><br>
  <a href="listcoordinator" class="w3-bar-item w3-button" style="font-size:20px;"><i class="glyphicon glyphicon-list" style="font-size:28px; left:-10px;color:black;"></i>List of Scholars</a><br>
  <a href="analytics" class="w3-bar-item w3-button" style="font-size:20px;"><i class="glyphicon glyphicon-signal" style="font-size:28px; left:-10px;color:black;"></i>Analytics</a><br>
  <a href="welcome" class="w3-bar-item w3-button" style="font-size:20px; color:red;"><i class="glyphicon glyphicon-log-out" style="font-size:28px; left:-10px;color:black;"></i>Logout</a><br>

</div>

    <!-- Page Content -->
 
    <div style="margin-left:20%">
    <div class="w3-container" style="background: #E8E8E8;">
    <h1>ANALYTICS</h1>
    </div>
    
    <!--start widget-->

    <div class="state-overview">
    <div class="row" style="--bs-gutter-x: 1.5rem;--bs-gutter-y: 0;display: flex;flex-wrap: wrap;margin-top: calc(var(--bs-gutter-y) * -1);margin-right: calc(var(--bs-gutter-x)/ -2); margin-left: calc(var(--bs-gutter-x)/ -2);">

    <div class="analytics" style="flex:0 0 auto; width: 25%;">
    <div class="analytics1" style="background: linear-gradient(45deg, #2ed8b6, #59e0c5);min-height: 100px; width: 100%; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); margin-left:30px; margin-top: 50px; margin-bottom: 20px; padding: 15px; border-radius: 10px;">
        <span class="info-box-icon push-bottom" style="margin-top: 20px; float: left; height: 70px; width: 70px; text-align: center; font-size: 30px; line-height: 74px; background: rgba(0, 0, 0, 0.2); border-radius: 100%;">
        <i class="material-icons">group</i>
        </span>
    
    <div class="info-box-content" style="padding: 10px 10px 10px 0;margin-left: 90px;">
        <span class="info-box-text" style="display: block;font-size: 16px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-weight: 400;">Total Scholars</span>
        <span class="info-box-number" style="font-weight:300; font-size:21px;">450</span>
    
    <div class="progress">
        <div class="progress-bar" style="width: 45%;"></div>
    </div>    

    <span class="progress-description" style="margin:0;"> 45% Increase in 28 days</span>
</div>


    <div class="col-xs-3" style="flex: 0 0 auto; width: 130%; margin-top:-175px; right:-300px;">
    <div class="info-box bg-b-yellow" style="background: linear-gradient(45deg, #ffb64d, #ffcb80); min-height: 100px;width: 100%;box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);margin-left:30px; margin-top: 22px;margin-bottom: 20px;padding: 15px;border-radius: 10px;">
    <span class="info-box-icon push-bottom" style="margin-top: 20px; float: left;height: 70px;width: 70px;text-align: center;font-size: 30px;line-height: 74px;background: rgba(0, 0, 0, 0.2);border-radius: 100%;">
    <i class="material-icons" style="font-family: 'Material Icons';font-weight: 400;font-style: normal;font-size: 24px;line-height: 1;letter-spacing: normal;text-transform: none;display: inline-block;word-wrap: normal;font-feature-settings: 'liga';>">person</i>
</span>

<div class="info-box-content" style="padding: 10px 10px 10px 0;margin-left: 90px;">
        <span class="info-box-text" style="display: block;font-size: 16px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-weight: 400;">New Scholars</span>
        <span class="info-box-number" style="font-weight:300; font-size:21px;">155</span>
    
    <div class="progress">
        <div class="progress-bar" style="width: 25%;"></div>
    </div>    

    <span class="progress-description" style="margin:0;"> 40% Increase in 28 days</span>
</div>

<div class="col-xs-3" style="flex: 0 0 auto; width: 150%; margin-top:-175px; right:-300px;">
    <div class="info-box bg-b-yellow" style="background: linear-gradient(45deg, #4099ff, #73b4ff); min-height: 150px;width: 100%;box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);margin-left:60px; margin-top: 22px;margin-bottom: 20px;padding: 15px;border-radius: 10px;">
    <span class="info-box-icon push-bottom" style="margin-top: 20px; float: left;height: 70px;width: 70px;text-align: center;font-size: 30px;line-height: 74px;background: rgba(0, 0, 0, 0.2);border-radius: 100%;">
    <i class="material-icons" style="font-family: 'Material Icons';font-weight: 400;font-style: normal;font-size: 24px;line-height: 1;letter-spacing: normal;text-transform: none;display: inline-block;word-wrap: normal;font-feature-settings: 'liga';>">school</i>
</span>

<div class="info-box-content" style="padding: 10px 10px 10px 0;margin-left: 90px;">
        <span class="info-box-text" style="display: block;font-size: 16px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-weight: 400;">College:   
    <select name="cars" id="cars">
    <option value="cas">CAS</option>
    <option value="coe">COE</option>
    <option value="chs">CHS</option>
    <option value="cit">CIT</option>
    <option value="cte">CTE</option>
    <option value="cbea">CBEA</option>
    <option value="cafsd">CAFSD</option>
    <option value="casat">CASAT</option>
  </select></span>
        <span class="info-box-number" style="font-weight:300; font-size:21px;">50</span>
    
    <div class="progress">
        <div class="progress-bar" style="width: 5%;"></div>
    </div>    

    <span class="progress-description" style="margin:0;"> 30% Increase in 28 days</span>
</div>

</div>
</div>
  
    </body>
</html>

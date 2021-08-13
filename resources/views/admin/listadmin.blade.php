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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: -3px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

td:hover{
    background-color: #0c4b05;
    color: #FFCD00; 
}

.button {
  background-color: #F3EEED;
  border-style: solid;
  color: #0C4B05;
  border-color: #0C4B05;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 80px;
  margin-right: -70px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #F3EEED;
  border-style: solid;
  color: #0C4B05;
  border-color: #0C4B05;
  border: 2px solid #0C4B05;
  border-radius: 40px;
}

.button1:hover {
    background-color: #FFCD00;
    color: #0c4b05;
}

.greenbutton {
  background-color: #F3EEED;
  border-style: solid;
  color: #0C4B05;
  border-color: #0C4B05;
  border: 2px solid #0C4B05;
  border-radius: 40px;
}

.greenbutton:hover {
    background-color: #FFCD00;
    color: #0c4b05;
}

</style>

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
  <a href="calendar" class="w3-bar-item w3-button" style="font-size:20px;"><i class="glyphicon glyphicon-calendar" style="font-size:28px; left:-10px;color:black;"></i>Calendar of Events</a><br>
  <a href="listadmin" class="w3-bar-item w3-button" style="font-size:20px;"><i class="glyphicon glyphicon-list" style="font-size:28px; left:-10px;color:black;"></i>List of Scholars</a><br>
  <a href="analytics" class="w3-bar-item w3-button" style="font-size:20px;"><i class="glyphicon glyphicon-signal" style="font-size:28px; left:-10px;color:black;"></i>Analytics</a><br>
  <a href="welcome" class="w3-bar-item w3-button" style="font-size:20px; color:red;"><i class="glyphicon glyphicon-log-out" style="font-size:28px; left:-10px;color:black;"></i>Logout</a><br>

</div>

    <!-- Page Content -->
    <div style="margin-left:20%">
    <div class="w3-container" style="background: #E8E8E8;">
    <h1>SCHOLARSHIP HISTORY</h1>
    </div>



<div class="w3-container">
</div>

<!--Scholar's Profile-->
<div class="col-sm-3">
            <div class="text-center">
                <img class="avatar" style="margin-left:20px; top:-20px;" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="avatar">


<!--List of Scholars-->

<table>
  <tr style="background-color: #FFCD00;">
    <th>Name</th>
    <th>Student Number</th>
    <th>College</th>
    <th>Course</th>
    <th>Scholarship Program</th>
    
  </tr>
  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>College of Arts and Sciences</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1">Delete</button></td>
  </tr>
 
  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>College of Arts and Sciences</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1">Delete</button></td>

  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>College of Arts and Sciences</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1">Delete</button></td>
  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>College of Arts and Sciences</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1">Delete</button></td>
  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>College of Arts and Sciences</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1">Delete</button></td>
  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>College of Arts and Sciences</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1">Delete</button></td>
  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>College of Arts and Sciences</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1">Delete</button></td>
  </tr>


</table>
<br>
<button type="button" onclick="download()" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:500px;">DOWNLOAD</button>
            
  

</div>

</body>
</html>
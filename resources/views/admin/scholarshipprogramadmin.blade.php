<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | List of Scholarship Programs</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Admin.css"> 
        <!-- SCRIPT -->
        <script src="/js/Admin.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">


        <style>

      table{
        width: 98.2vw;
        margin: 2vw auto;
        border-collapse: collapse;
        text-align: center;
      }

      table td,
      table th {
        border: solid 0.1vw black;
      }

      label,
      input {
        display: block;
        margin: 0vw 0;
        font-size: 1.2vw;
        width:100vw;
      }

      button {
        display: block;
        background-color:#0C4B05; 
        color: #FFCD00;
        border-radius: 2vw;
        height:3vw; 
        font-size:1.5vw; 
        width:10vw;
      }
    </style>
     
    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  


    <!--Scholarship Programs-->
<hr>
    <p style="font-size:2vw; background-color:#dcdcdc; font-weight:bolder; text-align:center;"> List of Scholarship Programs </p>
<hr>

    <form style="background-color:#f2f2f2; width:60vw; ">
      <div class="input-row">
        <label style="font-weight:bolder;" for="scholarship">Scholarship/Assistantship Program</label>
        <input type="text" name="scholarship" id="scholarship" placeholder="Enter scholarship.." />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="policy">Applicable policy</label>
        <input type="text" name="policy" id="policy" placeholder="Enter policy.." />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="qualification">Qualification</label>
        <input type="text" name="qualification" id="qualification" placeholder="Enter qualification.." />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="stipend">Amount of Grant/Stipend</label>
        <input type="text" name="stipend" id="stipend" placeholder="Enter stipend.." />
      </div>

      <div class="input-row">
        <label style="font-weight:bolder;" for="guidelines">General Guidelines</label>
        <input type="text" name="guidelines" id="guidelines" placeholder="Enter guidelines.." />
      </div>

      <button style="margin-left:47vw;">Add</button>
      </form>
      <table>


      <thead>
        <tr>
          <th>Scholarship/Assistantship Program</th>
          <th>Applicable policy</th>
          <th>Qualification</th>
          <th>Amount of Grant/Stipend</th>
          <th>General Guidelines</th>
          <th></th>
        </tr>

      </thead>
      <tbody></tbody>
    </table>

    <script>
      const formEl = document.querySelector("form");
      const tbodyEl = document.querySelector("tbody");
      const tableEl = document.querySelector("table");
      function onAddWebsite(e) {
        e.preventDefault();
        const scholarship = document.getElementById("scholarship").value;
        const policy = document.getElementById("policy").value;
        const qualification = document.getElementById("qualification").value;
        const stipend = document.getElementById("stipend").value;
        const guidelines = document.getElementById("guidelines").value;
        tbodyEl.innerHTML += `
            <tr>
                <td>${scholarship}</td>
                <td>${policy}</td>
                <td>${qualification}</td>
                <td>${stipend}</td>
                <td>${guidelines}</td>
                <td><button class="deleteBtn">Delete</button></td>
            </tr>
        `;
      }

      function onDeleteRow(e) {
        if (!e.target.classList.contains("deleteBtn")) {
          return;
        }

        const btn = e.target;
        btn.closest("tr").remove();
      }

      formEl.addEventListener("submit", onAddWebsite);
      tableEl.addEventListener("click", onDeleteRow);
    </script>


  </body>
</html>
<html>
<head>
<title>View Task List Records</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


body {
  background-color: #afcecf;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 300px;
  padding:3px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 100px;
  margin: 20px;
  max-width: 1050px;
  padding:2px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}


</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left w3-light-grey" style="z-index:3;width:250px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
  </div>
  <div class="w3-bar-block " style="margin-top:50px">
    <a href="http://127.0.0.1:8000/home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
    <a href="http://127.0.0.1:8000/view-records" onclick="w3_close()" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw w3-margin-right "></i>ALL TASK</a> 
    <a href="http://127.0.0.1:8000/edit-records" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-blue"><i class="fa fa-envelope fa-fw w3-margin-right"></i>MANAGE TASK</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px" >

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container w3-bottombar w3-border-black w3-padding-16">
    <h1><b>MANAGE TASK</b></h1>
    
    </div>
  </header>

  <table class="table-fill">
<thead>
<tr>
<th class="text-left">Id</th>
<th class="text-left">Title</th>
<th class="text-left">Description</th>
<th class="text-left">Priority</th>
<th class="text-left">Status</th>
<th class="text-left" colspan = "2">Manage</th>
<!--<td>Delete</td> -->
</tr> @foreach ($task as $task)
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">{{ $task->taskId }}</td>
<td class="text-left">{{ $task->taskName }}</td>
<td class="text-left">{{ $task->taskDesc }}</td>
<td class="text-left">{{ $task->taskPriority }}</td>
<td class="text-left">{{ $task->taskStatus }}</td>
<td class="text-left"><a href = 'edit/{{ $task->taskId }}'>Edit</a></td>
<td class="text-left"><a onclick="return myFunction();" href = 'delete/{{ $task->taskId }}'>Delete</a></td>
<!--<td><a href = 'delete/{{ $task->taskId }}'>Delete</a></td>-->
</tr> @endforeach
</table>
<div class="text-center">
<input type="button" name="addTask"  class="btn btn-success" value="Add Task" onclick="window.location = 'http://127.0.0.1:8000/insertTask' " />
</div>
</body>
</html>
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>
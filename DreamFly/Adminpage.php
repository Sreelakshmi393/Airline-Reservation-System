<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DreamFly</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forcompany.css">
	<link rel="stylesheet" href="AdminSignin.css">
	<script  src="jquery-1.9.1.min.js"></script>
	<script src="Admin.js"></script>
	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="homepage.html"><span class="glyphicon glyphicon-home"></span> Home</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="homepage.html"><span class="glyphicon glyphicon-user"> Sign out&nbsp;</span>						</a>
						
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center">
		<h1>DreamFly.com</h1> 
		<p>We specialize in your air plan!</p> 
	</div>

	<div class="container">
		
		<div class="btn-group btn-group-justified">
			<div class="btn btn-primary" id="v">View</div>
			<div class="btn btn-primary" id="a">Add</div>
			<div class="btn btn-primary" id="u">Update</div>
			<div class="btn btn-primary" id="d">Delete</div>
		</div>
		<hr />
		<div id = "add">
		<form class="form-horizontal" role="form" id="addf">
			<div class="form-group">
				<label class="control-label col-sm-2" for="flightno2">Flight No.</label>
				<div class="col-sm-6">
					<input type="text" required class="form-control" id="flightno2" placeholder="" name="flightno" >
					
				</div>
				
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="airplaneid2">Airplane ID</label>
				<div class="col-sm-6">
					<input type="text" required class="form-control" id="airplaneid2" placeholder="" name="airplaneid">
				</div>
				<label class="control-label col-sm-1" for="airpiddetail" id = "ad1"><font color="gray">details</font></label>
				<div class="col-sm-3" id = "detail">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="departure">Departure Airport</label>
				<div class="col-sm-6">
					<input type="text" required class="form-control" id="departure2" placeholder="" name="departure">
				</div>
				<label class="control-label col-sm-1" for="dairportdetail" id="ad2" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "adetail2">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="dtime">Departure Time</label>
				<div class="col-sm-6">
					<input type="time" required class="form-control" id="dtime2" placeholder="" name="dtime">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="arrival">Arrival Airport</label>
				<div class="col-sm-6">
					<input type="text" required class="form-control" id="arrival2" placeholder="" name="arrival">
				</div>
				<label class="control-label col-sm-1" for="dairportdetail" id="ad3" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "adetail3">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="atime">Arrival Time</label>
				<div class="col-sm-6">
					<input type="time" required class="form-control" id="atime2" placeholder="" name="atime">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="ecapacity">Economy Capacity</label>
				<div class="col-sm-6">
					<input type="number" required class="form-control" id="ecapacity2" placeholder="" name="ecapacity">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="eprice">Economy Price</label>
				<div class="col-sm-6">
					<input type="number" required class="form-control" id="eprice2" placeholder="" name="eprice" min="0" max="10000">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="bcapacity">Business Capacity</label>
				<div class="col-sm-6">
					<input type="number" required class="form-control" id="bcapacity2" placeholder="" name="bcapacity">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="bprice">Business Price</label>
				<div class="col-sm-6">
					<input type="number" required class="form-control" id="bprice2" placeholder="" name="bprice" min="0" max="10000">
				</div>
			</div>
			
			<br />
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<input type = "submit" class="btn btn-primary btn-block" name="btn-submit" id="ad" value = "submit" />
				</div>
			</div>
		</form>
		</div>
 	<div id = "update">
		 <form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="control-label col-sm-2" for="number">Flight No.</label>
				<div class="col-sm-6">
					<input type="flightno" required class="form-control" name="number" id="number" placeholder="">
					
				</div>
				<div class="col-sm-2">
					<input type="button" class="btn btn-success btn-block" name="search" id="search" value = "search flight" />
				</div>
			</div>
		 </form>
		  <form class="form-horizontal" role="form" id="result">
			<div class="form-group">
				<label class="control-label col-sm-2" for="flightno" style="display:none">Flight No.</label>
				<div class="col-sm-6" style="display:none">
					<input type="flightno" required class="form-control" id="flightno1" placeholder="" name="flightno">
					
				</div>
				
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="airplaneid">Airplane ID</label>
				<div class="col-sm-6">
					<input type="text" required class="form-control" id="airplaneid1" placeholder="" name="airplaneid">
				</div>
				
				<label class="control-label col-sm-1" for="dairportdetail" id="ud1" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "detail1">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="departure">Departure Airport</label>
				<div class="col-sm-6">
					<input type="text" required class="form-control" id="departure1" placeholder="" name="departure"> 
				</div>
				<label class="control-label col-sm-1" for="dairportdetail" id="ud2" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "udetail2">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="dtime">Departure Time</label>
				<div class="col-sm-6">
					<input type="time" required class="form-control" id="dtime1" placeholder="" name="dtime">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="arrival">Arrival Airport</label>
				<div class="col-sm-6">
					<input type="text" required class="form-control" id="arrival1" placeholder="" name="arrival">
				</div>
				<label class="control-label col-sm-1" for="dairportdetail" id="ud3" ><font color="gray">details</font></label>
				<div class="col-sm-3" id = "udetail3">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="atime">Arrival Time</label>
				<div class="col-sm-6">
					<input type="time" required class="form-control" id="atime1" placeholder="" name="atime">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="ecapacity">Economy Capacity</label>
				<div class="col-sm-6">
					<input type="number" required class="form-control" id="ecapacity1" placeholder="" name="ecapacity">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="eprice">Economy Price</label>
				<div class="col-sm-6">
					<input type="number" required class="form-control" id="eprice1" placeholder="" name="eprice">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="bcapacity">Business Capacity</label>
				<div class="col-sm-6">
					<input type="number" required class="form-control" id="bcapacity1" placeholder="" name="bcapacity">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="bprice">Business Price</label>
				<div class="col-sm-6">
					<input type="number" required class="form-control" id="bprice1" placeholder="" name="bprice">
				</div>
			</div>
			
			<br />
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<input type = "button" class="btn btn-primary btn-block" value="Update" id="up" />
					<input type = "button" class="btn btn-primary btn-block" value="Delete" id="de" />
				</div>
			</div>
		 </form>
		 </div>
		 <div id = "delete">
	
	     </div>

		 
		 <br /><br /><br />
         </div>	


	 <div id = "view">
			<div class="view-container">
			<form role="form" action="" method="" class="view-form">
             <div class="row"> 
              <label for="selectdate">Select a date:</label>
			  <div class="input-container">
              <input type="date"  class="form-control" id="selectdate" name="selectdate" pattern="\d{4}-\d{2}-\d{2}" required>
			  <button type="submit" class="btn btn-primary" name="showbtn">Show </button>
             </div> </div>
            </form>
			<div class="history-container">
			<?php
			include_once 'dbconnect2.php';
			if(isset($_REQUEST['showbtn'])){
				$_SESSION['date']=$_REQUEST['selectdate'];
				
				$sql = "SELECT FL.number AS FLnumber, company, type, time, B.date,B.username,  departure, d_time, arrival, a_time, C.name AS classname, price, paid
            FROM flight FL,  class C, airplane AP , book B
            WHERE (FL.number = C.number) AND (B.flightno = c.number) AND (classtype = C.name) AND (FL.airplane_id = AP.ID) AND paid = '1' AND ( B.date ='".$_SESSION['date']."') ORDER BY time DESC";
			$result = mysqli_query($con,$sql);
			$rowcount = mysqli_num_rows($result);

				if($rowcount == 0){
					echo "<div class='alert alert-info'><strong>No bookings.</strong></div>";
				}
				else{
				echo "<div class='alert alert-info'>Bookings in ";
				echo $_SESSION['date'];
				echo " : </div>";


   
					echo "<table class='table table-bordered table-striped table-hover'>
						<thead>
						<tr>
							<th>Time</th>
							<th>Username</th>
							<th>Flight</th>
							<th>Aircraft</th>
							<th>Date</th>
							<th>Departure</th>
							<th>Departure Time</th>
							<th>Arrival</th>
							<th>Arrival Time</th>
							<th>Class</th>

							<th>Price</th>

							<th>Pay</th>
						</tr>
						</thead>";
					while($row = mysqli_fetch_array($result)) {
						echo "<tbody><tr>";
						echo "<td>" . $row['time'] . "</td>";
						echo "<td>" . $row['username'] . "</td>";
						echo "<td>" . $row['FLnumber'] . "</td>";
						echo "<td>" . $row['company']." ".$row['type']. "</td>";
						echo "<td>" . $row['date'] . "</td>";
						echo "<td>" . $row['departure'] . "</td>";
						echo "<td>" . $row['d_time'] . "</td>";
						echo "<td>" . $row['arrival'] . "</td>";
						echo "<td>" . $row['a_time'] . "</td>";
						echo "<td>" . $row['classname'] . "</td>";
						echo "<td>" . $row['price'] . "</td>";
						if($row['paid'] == 1){
							echo "<td>YES</td>";
						}
					
						echo "</tr>";
					}
					echo " </tbody></table>";
				}
			}
					?>
			 
			</div>
			</div>
		 </div>





	
			<footer class="container-fluid text-center">
			<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
			<p>DreamFly.com</p>		
			</footer>
			<script>
				 window.onload=function(){
      document.getElementById("v").click();}
			</script>
			</body>
			</html>
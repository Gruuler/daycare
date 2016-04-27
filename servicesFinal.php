<head>

	<link type="text/css" rel="stylesheet" href="style/bootstrap.css">

	<?php
		$title ="Services";
	?>

	

</head>

<body>

	<?php
		include 'files/header.php';
	?>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">


		<?php
			if(isset($_GET['status'])){
				if($_GET['status']){
					echo "<div class='alert alert-success'>";
					echo "<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					echo "<strong>Success!</strong> Your infomation has been recorded, and we will contact you soon.";
					echo "</div>";
				}else{
					echo "<div class='alert alert-warning'>";
					echo "<a href='#'' class='close' data-dismiss='alert-warning' aria-label='close'>&times;</a>";
					echo "<strong>Warning!</strong> Something went wrong.  Please re-enter your information in the form below.";
					echo "</div>";
				}
			}
		?>
	
		<h2>Our services are top notch!</h2>

		<p>Child drop off and pickup is flexible and based on your schedule.  
			Spots are sold on a time-based scale according to how long you will be leaving your child with us.  
			Sign up for the days you need, and the amount of time your child will be with us. 
			Drop in times start before school and go after school hours. 
			Care is provided in English and Spanish with a Spanish Immersion.</p>
		</p>
		<p>
			Up to 8 1/2 hours with rates being charged per hour.</p>
			<p>
			<table class="table">
				<tr>
					<td>Earliest check-in time:</td><td class="text-right">7:15pm</td>
				</tr><tr>
					<td>Latest check-out time:</td><td class="text-right">5:30pm</td>
				</tr>
			</table>
		</p><p>
			Pricing Tiers:
				<Table class="table">
					<tr>
						<td>Infants (2 and under)</td>
						<td class="text-right">$23.00</td>
					</tr>
					<tr>
						<td>Toddlers (2 and up) Not Potty-Trained</td>
						<td class="text-right">$23.00</td>
					</tr>
					<tr>
						<td>Toddlers (2 to 4) Potty-Trained</td>
						<td class="text-right">$23.00</td>
					</tr>
					<tr>
						<td>School agers: (4 and up)</td>
						<td class="text-right">$19.00</td>
					</tr>
				</table>
		</p>

		<p>Meals: 
			Include breakfast and lunch. Meal plans are done in advance and certified by the state, but may not
			meet the specific diatary needs of your child. 
			Parents/Guardians, you will be required to provide the supplemental dietary products your child will need. 
			(ie. Almond Milk, Baby formula/food) Food calendar available on request.<p>
		</p>
		<div>
			<div class="well">
				<p>Would you like addittional information on our services?  
					Please fill out the following contact form and we will get back to you as soon as possible!</p>
				<form class="form-horizontal" role="form" method="get" action="logincheck.php" id="responseForm">
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">Name:</label>
						<div class="col-sm-10">
	    					<input type="text" class="form-control" name="name">
	    				</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Email:</label>
						<div class="col-sm-10">
		    				<input type="email" class="form-control" name="email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="phone">Phone:</label>
						<div class="col-sm-10">
		    				<input type="text" class="form-control" name="phone">
		    			</div>
					</div>
					<div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" lass="btn btn-default">Submit</button>
				    </div>

				    <?php //code for alert ?>
				    <div class="userWarning">
				    	
				    </div>

				</form>	
			</div>
		</div>
	</div>
	<div class="col-md-2">
	</div>

</body>
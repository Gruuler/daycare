<head>

	<link type="text/css" rel="stylesheet" href="style/bootstrap.css">

	<?php
		$title ="Services";
	?>

	

</head>

<body>

	<script type="text/javascript">

	var $ = function(x) {
  		return document.getElementById(x);
	}

	var checkForm = function(){
		var submitForm = false;
		var name = $("name").value;
		var email = $("email").value;
		var phone = $("phone").value;


		if($("name").value.length<1) {
			submitForm = false;
		}else if($("email").value.length < 1) {
			submitForm = false;
		}else if($("phone").value.length < 1){
			submitForm = false;
		}

		if(submitForm) {
			$("responseForm").submit();
  		}else{
  			var temp = createDiv();
  			$("userWarning").innerHTML = temp;

  		}
	}

	var createDiv = function(pId,name,description,price,picture) {
	  var div = document.createElement("div");
	  div.setAttribute("id","product"+pId);
	  div.setAttribute("class","product");

	  var image = document.createElement("label");
	  image.setAttribute("for",name);
	  image.innerHTML = "<img src='images/"+picture+"' height='50' width='40'>";
	  div.appendChild(image);

	  var text = document.createElement("p");
	  text.setAttribute("id","pname");
	  text.innerHTML = name;
	  div.appendChild(text);

	  button.appendChild(buy);

	  div.appendChild(button);

	  return div;
	}

	window.onload=function(){
		$("buttonSubmit").onclick = checkForm;
	}
	</script>

	<?php
		include 'files/header.php';
	?>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
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
				<form class="form-horizontal" role="form" method="POST" id="responseForm">
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">Name:</label>
						<div class="col-sm-10">
	    					<input type="text" class="form-control" id="name">
	    				</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Email:</label>
						<div class="col-sm-10">
		    				<input type="email" class="form-control" id="email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="phone">Phone:</label>
						<div class="col-sm-10">
		    				<input type="text" class="form-control" id="phone">
		    			</div>
					</div>
					<div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" value="Submit" id="buttonSubmit" class="btn btn-default">Submit</button>
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
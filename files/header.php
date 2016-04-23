

<head>

	<link type="text/css" rel="stylesheet" href="style/customstyle.css">
	<title>Bright | <?php echo $title?></title>

</head>
<body>
	<div class="header">
		<div class="row">
			<div class="col-md-2">
			</div>
			
			<div class="col-md-8">
				<p>Snoopy Daycare Service</p><br>
				<div>
					<ul class="nav nav-tabs">
					<?php
						$pages = array("Main" => "index.php","Services" => "services.php","About Us"=>"about.php");
				         
				         foreach ($pages as $key => $value)
				         {
				         	if(strcmp($title,$key) == 0){
				         		echo "<li class='active'><a href=".$value.">".$key."</a></li>";
				         	}
				         	else
				         	{
				         		echo "<li><a href=".$value.">".$key."</a></li>";
				         	}
				         	
				         }
		         	?>
		         	</ul>

				</div>
			</div>

			<div class="col-md-2">
			</div>
		</div>
	</div>
	<br>

</body>
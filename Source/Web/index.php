
<?php

// Turn off all error reporting
error_reporting(0);


	include("connect.php"); 	
	
	$link=Connection();

	$result=mysql_query("SELECT * FROM `users` WHERE 1",$link);


?>



<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<title>Arduino Weather Station</title>

</head>





<body>









<div class="container">

<div class="panel panel-info">
<div class="panel-heading"><h4>Temperature / moisture sensor readings</h4></div>



  <div class="panel-body">



<div class="table-responsive">
<table class="table table-striped">


		<tr class="info">
			<td>Timestamp <i class="fa fa-clock-o" aria-hidden="true"></i></td>
			<td>Temperature <i class="fa fa-sun-o" aria-hidden="true"></i></td>
			<td>Moisture <i class="fa fa-tint" aria-hidden="true"></i></td>
		</tr>

      

      <?php 
		  if($result!==FALSE){
		     while($row = mysql_fetch_array($result)) {
		        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
		           $row["index"], $row["uid"], $row["priority"]);
		     }
		     mysql_free_result($result);
		     mysql_close();
		  }
      ?>


</table>
</div>





  </div>
  <div class="panel-footer">Powered By Arduino</div>
</div>

</div>
</body>
</html>
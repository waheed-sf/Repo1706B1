<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<?php
session_start();
$uname = $_SESSION['uname'];
?>
<body>
<div class="container">

	<div class="row">
    <div class="col-md-12">
    	<div class="jumbotron">
  			<h3 class="display-4">Registration Form</h3>
  		</div>
    
    </div>
    	
    </div>
    
    <div class="row">
    	<div class="col-md-4">
<table width="200" class="table table-bordered">
  <tr>
  
   
    <td><img src="FIL/<?php echo $_COOKIE['image']?>"/></td>
  </tr>

</div>
</div>
</div>
</body>
</html>
<?php
include('class/users.php');
$ques=new users;
$cat=@$_POST['cat'];
$ques->ques_show($cat);
$_SESSION['cat']=$cat;


?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	
		<center><h2>The Quiz</h2></center>  
		<form method="post" action="answer.php">
			
		<?php
		$i=1;
		if(count($ques->ques)>0){
		foreach($ques->ques as $quest) {?>
	<table class="table table-bordered">
    <thead>
		<tr class="danger">
			<th><?php echo $i; ?> <?php echo $quest['question']; ?> </th>
		</tr>
    </thead>
    <tbody>
	
		<?php if(isset($quest['option1'])) {?>
	
		<tr class="info">
			<td>&nbsp;a&emsp;<input type="radio" value="0" name="<?php echo $quest['id']; ?>"/>&nbsp<?php echo $quest['option1']; ?></td>
		</tr>
		<?php }?>
		<?php if(isset($quest['option2'])) {?>
		
		<tr class="info">
			<td>&nbsp;b&emsp;<input type="radio" value="1" name="<?php echo $quest['id']; ?>"/>&nbsp<?php echo $quest['option2']; ?></td>
		</tr>
		<?php }?>
		<?php if(isset($quest['option3'])) {?>
		
		<tr class="info">
			<td>&nbsp;c&emsp;<input type="radio" value="2" name="<?php echo $quest['id']; ?>"/>&nbsp<?php echo $quest['option3']; ?></td>
		</tr>
		<?php }?>
		<?php if(isset($quest['option4'])) {?>
		
		<tr class="info">
			<td>&nbsp;d&emsp;<input type="radio" value="3" name="<?php echo $quest['id']; ?>"/>&nbsp<?php echo $quest['option4']; ?></td>
		</tr>
		<?php }?>
		
		<tr class="info">
			<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $quest['id']; ?>"/></td>
		</tr>
		
		
		</tbody>
  </table>
		<?php  $i++;}}else{?>
		<p>No data found</p>
	
		<?php } ?>
	<center>
		<input type="submit" value="Submit Quiz" class="btn btn-success"/>
	</center>
  </form>
  
  </div>
<div class="col-sm-2"></div>
</div>
</body>
</html>

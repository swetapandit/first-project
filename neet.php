<?php
$servername="localhost";
$username="root" ;
$password="";
$dbname="first_project";
$successmessage='';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Neet Form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form>
<div class="">
	<h3>Personal Information</h3>
	<div class="container">
		<div class="form-group row">
			<div class="col-sm-4">
				<label>Candidates Name:<span class="text-danger">*</span></label>
			</div>
			<div class="col-sm-6">
				<input type="text" name="" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4">
				<label>Father's Name:<span class="text-danger">*</span></label>
			</div>
			<div class="col-sm-6">
				<input type="text" name="" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4">
				<label>Mother's Name: <span class="text-danger">*</span></label>
			</div>
			<div class="col-sm-6">
				<input type="text" name="" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4">
				<label>Date of birth <span class="text-danger">*</span></label>
			</div>
			<div class="col-sm-2">
				<input type="text" name="" class="form-control">
			</div>
		</div>
		<div class="form-group row">
		<div class="col-sm-4" >
			<label>Gender <span class="text-danger">*</span></label>
			</div>
			<div class="col-sm-2" >
			<select class="form-control">
				<option value="">---Gender---</option>
				<option value="1">Male</option>
				<option value="2">Female</option>
				<option value="3">Other</option>
			</select>
		</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4" >
				<label>Category<span class="text-danger">*</span></label>
			</div>
			<div class="col-sm-2" >
				<select class="form-control">
					<option value="">---Catagory---</option>
					<option value="1">SC</option>
					<option value="2">ST</option>
					<option value="3">OBC</option>
					<option value="4">General</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4" >
				<label>Nationality<span class="text-danger">*</span></label>
			</div>
			<div class="col-sm-2" >
				<select class="form-control">
					<option value="">---Nationality---</option>
					<option value="1">Afgan</option>
					<option value="2">Albanian</option>
					<option value="3">Algerian</option>
					<option value="4">Australian</option>
					<option value="4">Bangladeshi</option>
					<option value="4">Brazilian</option>
					<option value="4">Bulgarian</option>
					<option value="4">Cambodian</option>
					<option value="4">Chinese</option>
					<option value="4">Colombian</option>
					<option value="4">Cuban</option>
					<option value="4">Danish</option>
					<option value="4">Dominican</option>
					<option value="4">Egyptian</option>
					<option value="4">Salvadorian</option>
					<option value="4">Finnish</option>
					<option value="4">French</option>
					<option value="4">German</option>
					<option value="4">Greek</option>
					<option value="4">Indian</option>
					<option value="4">Indonesian</option>
					<option value="4">Italian</option>
					<option value="4">Japanese</option>
					<option value="4">New Zealand</option>
					<option value="4">Pakistani</option>
					<option value="4">Polish</option>
					<option value="4">Scottish</option>
					<option value="4">South African</option>
					<option value="4">Sri Lankan</option>
					<option value="4">Tajikistani</option>
					<option value="4">Vietnamese</option>
					<option value="4">Zimbabwean</option>
				</select>
			</div>
		</div>		
	
</div>
</form>
</body>
</html>

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
	<title>Sweta Form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">
	.colon {
	    text-decoration: none;
	    float: left;
	    margin: 6px 0px 0px -10px;
	}
	.mt-5{
		margin-top: 5px;
	}
</style>
</head>
<body>
<form>
<div class="container">
	<h4>Personal Information</h4>
	<hr>
	<div class="form-group row">
		<div class="col-sm-12">
			<label>Registration For <span class="text-danger">*</span> </label>
			<div class="option">
				<input type="radio" name="">
				<label>Self</label>&nbsp;&nbsp;
				<input type="radio" name="">
				<label>Other</label>&nbsp;&nbsp;
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>Category Name : </label>
			<select class="form-control">
				<option value="">--Select category of travellers--</option>
				<option value="1">Student</option>
				<option value="1">Tourist</option>
				<option value="1">Migrant worker</option>
				<option value="1">Other Proffesionals</option>
				<option value="1">Other</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>Traveller's Name <span class="text-danger">*</span></label>
			<input type="text" name="" class="form-control">
		</div>
		<div class="col-sm-6">
			<label>Age <span class="text-danger">*</span></label>
			<input type="number" name="" class="form-control">
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6" >
			<label>Gender <span class="text-danger">*</span></label>
			<select class="form-control">
				<option value="">---Gender---</option>
				<option value="1">Male</option>
				<option value="2">Female</option>
				<option value="3">Other</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label>Mobile No. <span class="text-danger">*</span></label>
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>Aadhaar No.<span class="text-danger">*</span></label>
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-12">
			<h4>Present Location(Outside odisha)</h4>
			<hr>
		</div>
	</div>

	
	<div class="form-group row">
		<div class="col-sm-6">
			<label>State <span class="text-danger">*</span></label>
			<select class="form-control">
				<option value="">---Select State---</option>
				<option value="1">Andaman and Nicobar Island</option>
				<option value="2">Andhra Pradesh</option>
				<option value="3">Arunachal Pradesh</option>
				<option value="4">Assam</option>
				<option value="5">Bihar</option>
				<option value="6">Chandigarh</option>
				<option value="7">Chhatisghar</option>
				<option value="8">Dadra and Nagar Haveli</option>
				<option value="9">Daman and Dui</option>
				<option value="10">Delhi</option>
				<option value="11">Goa</option>
				<option value="12">Gujarat</option>
				<option value="13">Haryana</option>
				<option value="14">Himachal Pradesh</option>
				<option value="15">Jammu & Kashmir</option>
				<option value="16">Jharkhand</option>
				<option value="17">Karnataka</option>
				<option value="18">Kerela</option>
				<option value="19">Ladakh</option>
				<option value="20">Lakshadeep</option>
				<option value="21">Madhya Pradesh</option>
				<option value="22">Maharashtra</option>
				<option value="23">Manipur</option> 
				<option value="24">Meghalaya</option>
				<option value="25">Mizoram</option>
				<option value="26">Nagaland</option>
				<option value="27">Puducherry</option>
				<option value="28">Punjab</option>
				<option value="29">Rajasthan</option>
				<option value="30">Sikkim</option>
				<option value="31">Tamil Nadu</option>
				<option value="32">Telangana</option>
				<option value="33">Tripura</option>
				<option value="34">Uttar Pradesh</option>
				<option value="35">Uttrakhand</option>
				<option value="36">West Bengal</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label>District <span class="text-danger">*</span></label>
			<select class="form-control">
				<option value="">---Select District---</option>
			</select>
			
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>City <span class="text-danger">*</span></label>
			<input type="text" name="" class="form-control">
			
		</div>
	</div>
	<div class="form-group row">
	<div class="col-sm-6">
		<p>No. of Family staying with you & want to come back odisha <span class="text-danger">*</span></p>
	</div>
	<div class="col-sm-2">
		<input type="text" name="" class="form-control">
	</div>
	<div class="form-group row">
		<div class="col-sm-12">
			<h3>Family members Details</h3>
			<hr>
		</div>
	</div>
	</div>
		<div class="form-group row">
			<div class="col-sm-12">
			<h3>Address in Odisha</h3>
			<hr>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>District <span class="text-danger">*</span>
			</label>
		</div>
		<div class="col-sm-6">
			<div class="option">
				<input type="radio" name="">
				<label>Block</label>&nbsp;&nbsp;
				<input type="radio" name="">
				<label>ULB</label>&nbsp;&nbsp;
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<select class="form-control">
				<option value="">---Select District---</option>
			</select>
		</div>
		<div class="col-sm-6">
			<select class="form-control">
				<option value="">---Select Block---</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-6">
				<label>GP/ Ward number <span class="text-danger">*</span>
				</label>
			</div>
			<div class="col-sm-6">
				<label>Village<span class="text-danger">*</span>
				</label>
			</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<select class="form-control">
				<option value="">---Select GP/ Ward number---</option>
			</select>
		</div>
		<div class="col-sm-6">
			<select class="form-control">
				<option value="">---Select Village---</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="">
			
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>Address <span class="text-danger">*</span></label>
			<textarea class="form-control" rows="4"></textarea>
		</div>
	</div>
	<div class="form-group row">
		<button type="button" class="btn btn-success">Submit</button>
	</div>
	<div class="form-group row">
		<label class="col-sm-6 mt-5 text-right">User Name</label>
		<div class="col-sm-3">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="User Name">
		</div>
	</div>
</div>
</form>
</body>
</html>
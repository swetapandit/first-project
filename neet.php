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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.heading{
		margin: 0px;
	    margin-left: 26px;
	    color: white;
	}
	.heading-div{
		background: red;
	    width: 600px;
	    padding: 0.35em 0px;
	    border: 1px solid white;
	    border-radius: 50px;
	    margin-left: -20px;
	}
	.colon {
	    text-decoration: none;
	    float: left;
	    margin: 6px 0px 0px -10px;
	}
	.mandatory {
	    color: #FF0000;
	    text-decoration: none;
	    font-size: 20px;
	    float: right;
	    margin: -25px -12px 0px 0px;
	}
</style>
</head>
<body>
<form style="background-color:#f0f0f0;"s>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Personal Information <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="container">
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Candidates Name</label>
			</div>
			<div class="col-sm-3">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Candidates name">
				<span class="mandatory">*</span>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Father's Name</label>
			</div>
			<div class="col-sm-3">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Father's Name">
				<span class="mandatory">*</span>		
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Mother's Name</label>
			</div>
			<div class="col-sm-3">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Mother's Name">
				<span class="mandatory">*</span>		
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Date of birth</label>
			</div>
			<div class="col-sm-3">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Date of birth">
				<span class="mandatory">*</span>		
			</div>
		</div>
		<div class="form-group row">
		<div class="col-sm-4 text-right" >
			<label>Gender</label>
			</div>
			<div class="col-sm-2" >
				<span class="colon">:</span>
				<select class="form-control">
					<option value="">---Gender---</option>
					<option value="1">Male</option>
					<option value="2">Female</option>
					<option value="3">Other</option>
				</select>
				<span class="mandatory">*</span>
		</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right" >
				<label>Category</label>
			</div>
			<div class="col-sm-2" >
				<span class="colon">:</span>
				<select class="form-control">
					<option value="">---Catagory---</option>
					<option value="1">SC</option>
					<option value="2">ST</option>
					<option value="3">OBC</option>
					<option value="4">General</option>
				</select>
				<span class="mandatory">*</span>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right" >
				<label>Nationality</label>
			</div>
			<div class="col-sm-2">
				<span class="colon">:</span>
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
				<span class="mandatory">*</span>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>State</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
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
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right" >
			<label>Person with Disability</label>
			</div>
			<div class="col-sm-2" >
				<span class="colon">:</span>
				<select class="form-control">
					<option value="">---Select---</option>
					<option value="1">Yes</option>
					<option value="2">No</option>
				</select>
				<span class="mandatory">*</span>
			</div>
		</div>
	<div class="form-group row">
	<div class="col-sm-4 text-right" >
		<label>Disability Details</label>
		</div>
		<div class="col-sm-2" >
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="1">Physical disability</option>
				<option value="2">xyz</option>
			</select>
			<span class="mandatory">*</span>
	</div>
	</div>
	<div class="form-group row">
	<div class="col-sm-4 text-right" >
		<label>Do you belong to minority category?</label>
	</div>
	<div class="col-sm-2" >
		<span class="colon">:</span>
		<select class="form-control">
			<option value="">---Select---</option>
			<option value="1">Yes</option>
			<option value="2">No</option>
			</select>
			<span class="mandatory">*</span>
	</div>
	</div>
	<div class="form-group row">
	<div class="col-sm-4 text-right" >
		<label>Are you suffering from diabeties Type 1?</label>
		</div>
		<div class="col-sm-2" >
			<span class="colon">:</span>
			<select class="form-control">
			<option value="">---Select---</option>
			<option value="1">Yes</option>
			<option value="2">No</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right" >
			<label>Identification Type</label>
		</div>
		<div class="col-sm-2" >
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="1">Aaddhar Card</option>
				<option value="2">Voter card</option>
				<option value="2">Ration card</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Identification Number</label>
		</div>
		<div class="col-sm-3">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Identification Number">
			<span class="mandatory">*</span>
		</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Place of Birth   <i class="fa fa-arrow-circle-o-right   " aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="container">
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Place of Birth</label>
			</div>
			<div class="col-sm-2">
				<div class="option">
					<span class="colon">:</span>
					<input type="radio" name="">
					<label>In India</label>&nbsp;&nbsp;
					<input type="radio" name="">
					<label>Abroad</label>&nbsp;&nbsp;
				</div>
				<span class="mandatory">*</span>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>State</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
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
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>District</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select District---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Choice of Medium of Question Paper <i class="fa fa-arrow-circle-o-right   " aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="container">	
		<div class="form-group row">
			<div class="col-sm-12">
				<p style="color:red;">Medium of Question Paper once submitted, cannot be edited. The Examination centres for languages other than English & Hindi will be available as per details	given in the Information Bulletian.
				</p>
			</div>
		</div>
		<div>
			<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Medium of question Paper</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select Medium---</option>
				<option value="1">Tamil</option>
				<option value="2">Bengoli</option>
				<option value="3">Hindi</option>
				<option value="4">Telgu</option>
				<option value="5">Urdu</option>
				<option value="6">Odia</option>
				<option value="7">Kannada</option>
				<option value="8">Gujarati</option>
				<option value="9">Punjabi</option>
				<option value="10">Assamese</option>
				<option value="11">Maithli</option>
				<option value="12">English</option>
				<option value="13">Marathi</option>
				<option value="14">Manipuri</option>
				<option value="15">Nepali</option>
				<option value="16">Odia</option>
				<option value="17">Malayalam</option>
				<option value="18">Kashmiri</option>
				<option value="19">Khasi</option>
				<option value="20">Sanskrit</option>
				<option value="21">Santhali</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	</div>
	</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Choice of Examination city<i class="fa fa-arrow-circle-o-right   " aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="container">	
		<div class="form-group row">
			<div class="col-sm-12">
				<p style="color:red;">Choice of city for Examination Centres Onces submitted cannot be editted Further. The choice of centres is available based on Medium selected.
				</p>
			</div>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>1st choice of Examination Centre</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="1">Port Blair</option>
				<option value="2">Hyderabad</option>
				<option value="3">Itanagar</option>
				<option value="4">Dispur</option>
				<option value="5">Patna</option>
				<option value="6">Chandigarh</option>
				<option value="7">Raipur</option>
				<option value="8">Silvassa</option>
				<option value="9">Daman</option>
				<option value="10">Delhi</option>
				<option value="11">Panaji</option>
				<option value="12">Gandhinagar</option>
				<option value="14">Shimla</option>
				<option value="15">Srinagar</option>
				<option value="16">Ranchi</option>
				<option value="17">Bengaluru</option>
				<option value="18">Thiruvananthapuram</option>
				<option value="20">Kavaratti</option>
				<option value="21">Bhopal</option>
				<option value="22">Mumbai</option>
				<option value="23">Imphal</option> 
				<option value="24">Shillong</option>
				<option value="25">Aizawl</option>
				<option value="26">Kohima</option>
				<option value="27">Pondicherry</option>
				<option value="28">Bhubaneswar</option>
				<option value="29">Jaipur</option>
				<option value="30">Gangtok</option>
				<option value="31">Chennai</option>
				<option value="32">Hyderabad</option>
				<option value="33">Agartala</option>
				<option value="34">Lucknow</option>
				<option value="35">Dehradun</option>
				<option value="36">Kolkata</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>2nd choice of Examination Centre</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="1">Port Blair</option>
				<option value="2">Hyderabad</option>
				<option value="3">Itanagar</option>
				<option value="4">Dispur</option>
				<option value="5">Patna</option>
				<option value="6">Chandigarh</option>
				<option value="7">Raipur</option>
				<option value="8">Silvassa</option>
				<option value="9">Daman</option>
				<option value="10">Delhi</option>
				<option value="11">Panaji</option>
				<option value="12">Gandhinagar</option>
				<option value="14">Shimla</option>
				<option value="15">Srinagar</option>
				<option value="16">Ranchi</option>
				<option value="17">Bengaluru</option>
				<option value="18">Thiruvananthapuram</option>
				<option value="20">Kavaratti</option>
				<option value="21">Bhopal</option>
				<option value="22">Mumbai</option>
				<option value="23">Imphal</option> 
				<option value="24">Shillong</option>
				<option value="25">Aizawl</option>
				<option value="26">Kohima</option>
				<option value="27">Pondicherry</option>
				<option value="28">Bhubaneswar</option>
				<option value="29">Jaipur</option>
				<option value="30">Gangtok</option>
				<option value="31">Chennai</option>
				<option value="32">Hyderabad</option>
				<option value="33">Agartala</option>
				<option value="34">Lucknow</option>
				<option value="35">Dehradun</option>
				<option value="36">Kolkata</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>3rd choice of Examination Centre</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="1">Port Blair</option>
				<option value="2">Hyderabad</option>
				<option value="3">Itanagar</option>
				<option value="4">Dispur</option>
				<option value="5">Patna</option>
				<option value="6">Chandigarh</option>
				<option value="7">Raipur</option>
				<option value="8">Silvassa</option>
				<option value="9">Daman</option>
				<option value="10">Delhi</option>
				<option value="11">Panaji</option>
				<option value="12">Gandhinagar</option>
				<option value="14">Shimla</option>
				<option value="15">Srinagar</option>
				<option value="16">Ranchi</option>
				<option value="17">Bengaluru</option>
				<option value="18">Thiruvananthapuram</option>
				<option value="20">Kavaratti</option>
				<option value="21">Bhopal</option>
				<option value="22">Mumbai</option>
				<option value="23">Imphal</option> 
				<option value="24">Shillong</option>
				<option value="25">Aizawl</option>
				<option value="26">Kohima</option>
				<option value="27">Pondicherry</option>
				<option value="28">Bhubaneswar</option>
				<option value="29">Jaipur</option>
				<option value="30">Gangtok</option>
				<option value="31">Chennai</option>
				<option value="32">Hyderabad</option>
				<option value="33">Agartala</option>
				<option value="34">Lucknow</option>
				<option value="35">Dehradun</option>
				<option value="36">Kolkata</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>4th choice of Examination Centre</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="1">Port Blair</option>
				<option value="2">Hyderabad</option>
				<option value="3">Itanagar</option>
				<option value="4">Dispur</option>
				<option value="5">Patna</option>
				<option value="6">Chandigarh</option>
				<option value="7">Raipur</option>
				<option value="8">Silvassa</option>
				<option value="9">Daman</option>
				<option value="10">Delhi</option>
				<option value="11">Panaji</option>
				<option value="12">Gandhinagar</option>
				<option value="14">Shimla</option>
				<option value="15">Srinagar</option>
				<option value="16">Ranchi</option>
				<option value="17">Bengaluru</option>
				<option value="18">Thiruvananthapuram</option>
				<option value="20">Kavaratti</option>
				<option value="21">Bhopal</option>
				<option value="22">Mumbai</option>
				<option value="23">Imphal</option> 
				<option value="24">Shillong</option>
				<option value="25">Aizawl</option>
				<option value="26">Kohima</option>
				<option value="27">Pondicherry</option>
				<option value="28">Bhubaneswar</option>
				<option value="29">Jaipur</option>
				<option value="30">Gangtok</option>
				<option value="31">Chennai</option>
				<option value="32">Hyderabad</option>
				<option value="33">Agartala</option>
				<option value="34">Lucknow</option>
				<option value="35">Dehradun</option>
				<option value="36">Kolkata</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-7 text-right">
			<button type="button" class="btn btn-danger">Save as Draft</button>
			<button type="button" class="btn btn-danger">Next</button>
		</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Academic Details (Class 10th or equivalent)<i class="fa fa-arrow-circle-o-right   " aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Name of School Education Board</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Name of School / College</label>
			</div>
			<div class="col-sm-3">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Name of School / College">
				<span class="mandatory">*</span>		
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Address of School / College</label>
			</div>
			<div class="col-sm-3">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Address of School / College">
				<span class="mandatory">*</span>		
			</div>
		</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Year of Passing</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="12">1994</option>
				<option value="13">1995</option>
				<option value="14">1996</option>
				<option value="15">1997</option>
				<option value="16">1998</option>
				<option value="17">1999</option>
				<option value="18">2000</option>
				<option value="19">2001</option>
				<option value="20">2002</option>
				<option value="21">2003</option>
				<option value="22">2004</option>
				<option value="23">2005</option> 
				<option value="24">2006</option>
				<option value="25">2007</option>
				<option value="26">2008</option>
				<option value="27">2009</option>
				<option value="1">2010</option>
				<option value="2">2011</option>
				<option value="3">2012</option>
				<option value="4">2013</option>
				<option value="5">2014</option>
				<option value="6">2015</option>
				<option value="7">2016</option>
				<option value="8">2017</option>
				<option value="9">2018</option>
				<option value="10">2019</option>
				<option value="11">2020</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Percentage of Marks obtained in Class 10th</label>
			</div>
			<div class="col-sm-1">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Percentage">
				<span class="mandatory">*</span>		
			</div>
		</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Academic Details (Class 11th or equivalent)<i class="fa fa-arrow-circle-o-right   " aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Name of School / College</label>
			</div>
			<div class="col-sm-3">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Name of School / College">
				<span class="mandatory">*</span>		
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Year of Passing</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="12">1994</option>
				<option value="13">1995</option>
				<option value="14">1996</option>
				<option value="15">1997</option>
				<option value="16">1998</option>
				<option value="17">1999</option>
				<option value="18">2000</option>
				<option value="19">2001</option>
				<option value="20">2002</option>
				<option value="21">2003</option>
				<option value="22">2004</option>
				<option value="23">2005</option> 
				<option value="24">2006</option>
				<option value="25">2007</option>
				<option value="26">2008</option>
				<option value="27">2009</option>
				<option value="1">2010</option>
				<option value="2">2011</option>
				<option value="3">2012</option>
				<option value="4">2013</option>
				<option value="5">2014</option>
				<option value="6">2015</option>
				<option value="7">2016</option>
				<option value="8">2017</option>
				<option value="9">2018</option>
				<option value="10">2019</option>
				<option value="11">2020</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Place of Birth</label>
		</div>
		<div class="col-sm-2">
			<div class="option">
				<span class="colon">:</span>
				<input type="radio" name="">
				<label>In India</label>&nbsp;&nbsp;
				<input type="radio" name="">
				<label>Abroad</label>&nbsp;&nbsp;
			</div>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>State where class XI school is located</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
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
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>District where class XI school is located</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select District---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Academic Details (Class 12th or equivalent)<i class="fa fa-arrow-circle-o-right   " aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>School Board of Class 12/ Qualification Examination</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select Board---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Name of School / College (Passed/ Appearing)</label>
		</div>
		<div class="col-sm-3">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Name of School / College">
			<span class="mandatory">*</span>		
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Address of School / College</label>
			</div>
			<div class="col-sm-3">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Address of School / College">
				<span class="mandatory">*</span>		
			</div>
		</div>
		<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Place of Birth</label>
		</div>
		<div class="col-sm-2">
			<div class="option">
				<span class="colon">:</span>
				<input type="radio" name="">
				<label>In India</label>&nbsp;&nbsp;
				<input type="radio" name="">
				<label>Abroad</label>&nbsp;&nbsp;
			</div>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>State where class XII school is located</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
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
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>District where class XII school is located</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select District---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Examination Qualification Code</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="1">01</option>
				<option value="2">02</option>
				<option value="3">03</option>
				<option value="4">04</option>
				<option value="5">05</option>
				<option value="6">06</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Year of Passing/ Appearing class 12th/ Qualifying Examination </label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select---</option>
				<option value="12">1994</option>
				<option value="13">1995</option>
				<option value="14">1996</option>
				<option value="15">1997</option>
				<option value="16">1998</option>
				<option value="17">1999</option>
				<option value="18">2000</option>
				<option value="19">2001</option>
				<option value="20">2002</option>
				<option value="21">2003</option>
				<option value="22">2004</option>
				<option value="23">2005</option> 
				<option value="24">2006</option>
				<option value="25">2007</option>
				<option value="26">2008</option>
				<option value="27">2009</option>
				<option value="1">2010</option>
				<option value="2">2011</option>
				<option value="3">2012</option>
				<option value="4">2013</option>
				<option value="5">2014</option>
				<option value="6">2015</option>
				<option value="7">2016</option>
				<option value="8">2017</option>
				<option value="9">2018</option>
				<option value="10">2019</option>
				<option value="11">2020</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>% of marks obtained in class 12th/ Qualifying Examination</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Percentage">
		</div>
		<div>
			<label>(% if passed)</label>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Enter Roll No. of Class XII</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Roll No.">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-7 text-right">
			<button type="button" class="btn btn-danger">Back</button>
			<button type="button" class="btn btn-danger">Save as Draft</button>
			<button type="button" class="btn btn-danger">Next</button>
		</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Parmanent Address<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>House No.</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="House No.">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Locality</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Locality">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Land Mark</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Land Mark">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Village/Town/City</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Village/Town/City">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Zip Code</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Zip Code">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>State</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
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
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>District</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select District---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Email Address</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Email Address">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Land Line No. with STD Code</label>
		</div>
		<div class="col-sm-1">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control">
		</div>
		<div class="col-sm-2">
			<input type="text" name="" class="form-control">
		</div>
		<div>
			<label>(#Optional)</label>
		</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Correspondence Address<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h3>
		</div>
	</div>
	<div>
		<input type="checkbox" id="checkbox" name="1" value="box">
	  	<label for="1" style="font-size:20px;"> Same as Parmanent Address</label><br>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>House No.</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="House No.">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Locality</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Locality">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Land Mark</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Land Mark">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Village/Town/City</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Village/Town/City">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-4 text-right">
			<label>Zip Code</label>
		</div>
		<div class="col-sm-2">
			<span class="colon">:</span>
			<input type="text" name="" class="form-control" placeholder="Zip Code">
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>State</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
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
			<span class="mandatory">*</span>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>District</label>
			</div>
			<div class="col-sm-2">
			<span class="colon">:</span>
			<select class="form-control">
				<option value="">---Select District---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
			<span class="mandatory">*</span>
		</div>
	</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Correspondence Address<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="container">
		<div class="form-group row " style="font-size:20px;">
			<div class="col-sm-6 text-right">
				<label>Qualification</label>
			</div>
			<div class="col-sm-2 text-right">
				<label>Occupation</label>
			</div>
			<div class="col-sm-2 text-right">
				<label>Annual Income</label>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Father's/Guardians</label>
			</div>
			<div class="col-sm-2">
				<span class="colon">:</span>
				<select class="form-control">
					<option value="">---Qualification---</option>
					<option value="1">A</option>
					<option value="2">B</option>
					<option value="3">C</option>
					<option value="4">D</option>
					<option value="5">E</option>
					<option value="6">F</option>
					<option value="7">F</option>
					<option value="8">G</option>
					<option value="9">H</option>
					<option value="10">I</option>
					<option value="11">J</option>
					<option value="12">K</option>
					<option value="13">L</option>
					<option value="14">M</option>
					<option value="15">N</option>
					<option value="16">O</option>
					<option value="17">P</option>
					<option value="18">Q</option>
					<option value="19">R</option>
					<option value="20">S</option>
					<option value="21">T </option>
					<option value="22">U</option>
					<option value="23">V</option> 
					<option value="24">W</option>
					<option value="25">X</option>
					<option value="26">Y</option>
					<option value="27">Z</option>
				</select>
			</div>
			<div class="col-sm-2">
			<select class="form-control">
				<option value="">---Occupation---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
		</div>
		<div class="col-sm-2">
		<select class="form-control">
				<option value="">---Annual Income---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
			<div class="col-sm-4 text-right">
				<label>Mother's</label>
			</div>
			<div class="col-sm-2">
				<span class="colon">:</span>
				<select class="form-control">
					<option value="">---Qualification---</option>
					<option value="1">A</option>
					<option value="2">B</option>
					<option value="3">C</option>
					<option value="4">D</option>
					<option value="5">E</option>
					<option value="6">F</option>
					<option value="7">F</option>
					<option value="8">G</option>
					<option value="9">H</option>
					<option value="10">I</option>
					<option value="11">J</option>
					<option value="12">K</option>
					<option value="13">L</option>
					<option value="14">M</option>
					<option value="15">N</option>
					<option value="16">O</option>
					<option value="17">P</option>
					<option value="18">Q</option>
					<option value="19">R</option>
					<option value="20">S</option>
					<option value="21">T </option>
					<option value="22">U</option>
					<option value="23">V</option> 
					<option value="24">W</option>
					<option value="25">X</option>
					<option value="26">Y</option>
					<option value="27">Z</option>
				</select>
			</div>
			<div class="col-sm-2">
			<select class="form-control">
				<option value="">---Occupation---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
		</div>
		<div class="col-sm-2">
		<select class="form-control">
				<option value="">---Annual Income---</option>
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
				<option value="4">D</option>
				<option value="5">E</option>
				<option value="6">F</option>
				<option value="7">F</option>
				<option value="8">G</option>
				<option value="9">H</option>
				<option value="10">I</option>
				<option value="11">J</option>
				<option value="12">K</option>
				<option value="13">L</option>
				<option value="14">M</option>
				<option value="15">N</option>
				<option value="16">O</option>
				<option value="17">P</option>
				<option value="18">Q</option>
				<option value="19">R</option>
				<option value="20">S</option>
				<option value="21">T </option>
				<option value="22">U</option>
				<option value="23">V</option> 
				<option value="24">W</option>
				<option value="25">X</option>
				<option value="26">Y</option>
				<option value="27">Z</option>
			</select>
		</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Dress Code<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h3>
		</div>
	</div>
	<div class="container">
		<div class="col-sm-8 text-right">
			<p style="color:red;">Do you intend to wear Customary Dress contrary to the Dress Code while appearing in NEET(UG)-2019
			</p>
		</div>
		<div class="col-sm-2">
			<div class="option">
					<span class="colon">:</span>
					<input type="radio" name="">
					<label>Yes</label>&nbsp;&nbsp;
					<input type="radio" name="">
					<label>No</label>&nbsp;&nbsp;
				</div>
				<span class="mandatory">*</span>
		</div>
	</div>
</div>
<div class="">
	<div class="form-group">
		<div class="heading-div text-right">
			<h3 class="heading">Security Pin<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></h3>
		</div>
		<div class="container">
		<div class="form-group row ">
			<div class="col-sm-6 text-right">
				<label>Enter Security Pin</label>
				<label style="color:red;">(Case Sensitive)</label>
			</div>
			<div class="col-sm-2">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="Security Pin">
				<span class="mandatory">*</span>
			</div>
		</div>
		<div class="form-group row ">
			<div class="col-sm-6 text-right">
				<label>Security Pin</label>
			</div>
			<div class="col-sm-2">
				<span class="colon">:</span>
				<input type="text" name="" class="form-control" placeholder="">
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-7 text-right">
			<button type="button" class="btn btn-danger">Back</button>
			<button type="button" class="btn btn-danger">Save as Draft</button>
			<button type="button" class="btn btn-danger">Preview and Submit</button>
		</div>
	</div>
</div>


</div>
</div>
</form>
</body>
</html>
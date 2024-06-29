<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<h1><u>REGISTRATION PAGE</U></h1>
	</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: left;
            padding: 50px;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        
		#image{
    margin-top: 10px;
    box-shadow: 5px 5px 5px 5px gray;
    width: 60px;;
    padding: 20px;
    font-weight: 400;
    padding-bottom: 0px;
    height: 40px;
    user-select: none;
    text-decoration:line-through;
    font-style: italic;
    font-size: x-large;
    border: red 2px solid;
    margin-left: 10px;
     
}
#user-input{
    box-shadow: 5px 5px 5px 5px gray;
    width:auto;
       margin-right: 10px;
    padding: 10px;
    padding-bottom: 0px;
    height: 40px;
       border: red 0px solid;
}
input{
    border:1px black solid;
}
.inline{
    display:inline-block;
}
#btn{
    box-shadow: 5px 5px 5px grey;
    color: aqua;
    margin: 10px;
    background-color: brown;
}
body{
	background-image:url("image2.jpg");
	color:"white";
}


        
    </style>
</head>
	
	<body style="background-color:#b3d1ff" onload="generate()">
		<form method="post">
			<center><h1><u> Admission Registration page</u></h1></center>
			<fieldset>
				<legend>
					<b>BIO DATA</b>
				</legend>
				<input type="text" placeholder="surname" name="surname" required>&nbsp &nbsp
				<input type="text" placeholder="firstname" name="fname" > &nbsp &nbsp <input type="text" placeholder="middlename" name="mname" ><br><br>
				Female<input type="radio" value="female" name="gender">
				Male<input type="radio" value="male" name="gender"><br><br>
				DOB : <input type="date" name="DOB" ><br><br>

				Pursing: <input list="plist" name="plist">
								<datalist id="plist">
									<option value="1class">
									<option value="2class">
									<option value="3class">
									<option value="4class">
									<option value="5class">
									<option value="6class">
									<option value="7class">
									<option value="8class">
									<option value="9class">
									<option value="10class">
									<option value="LKG">
									<option value="UKG">
									<option value="undergraduate">
									<option value="none">
								</datalist>
								<br>
								
			</fieldset>
			
			<h3>upload image</h3>
			 <input type="file" id="myFile" name="filename"><br><br>
			Password: <input type="password" id="myInput" name="pwd" >
			<br><br>
			Phone Number : <input type="number" name="phone"  value="+91" placeholder="+91" required><br><br>
			Email : <input type="email" name="mailaddress" placeholder="@gmail.com" required><br><br>
			<br>
			<br>
			<input type="submit" value="submit">
		
    
			
		</form>
	</body>
	

</html>




<?php 
if(isset($_POST["submit"]))
{
	
	$surname=$_POST["surname"];
	$fname=$_POST["fname"];
	$mname=$_POST["mname"];
	$gender=$_POST["gender"];
	$DOB=$_POST["DOB"];
	$qfs=$_POST["plist"];
	$filename=$_POST["filename"];
	$pwd=$_POST["pwd"];
	$phone=$_POST["phone"];
	$mailaddress=$_POST["mailaddress"];
	
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"register");
$ins="insert into stud_regisdata values('$surname','$fname','$mname','$gender','$DOB','$plist','$filename','$pwd','$phone','$mailaddress')";
$res=mysqli_query($con,$ins);
if($res)
{
	echo("details inserted seccessfully");
}
}
?>

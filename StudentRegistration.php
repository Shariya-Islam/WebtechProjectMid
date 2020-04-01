<html>
	<head></head>
	<body>
		<?php
		$err_name="";
		$name="";
		$err_uname="";
		$uname="";
		$err_pass="";
		$pass="";
		$err_phn="";
		$phn="";
		$err_email="";
		$email="";
		$gender="";
		$err_inst="";
		$institution="";
		$Medium="";
		$group="";
		$err_class="";
		$class="";
		$regex="";
		$xyz="";
		$err_add="";
		$address="";
		
		
		
		if(isset($_POST['submit']))
		{
			
			if(empty($_POST['name']))
			{
				$err_name="*Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['name']);
				echo "Name=$name <br>";
			}
			if(empty($_POST['uname']))
			{
				$err_uname="*User Name Required";
			}
			else
			{			
				$uname=htmlspecialchars($_POST['uname']);
				echo "User Name=$uname <br>";
			}
			
			if (empty($_POST['pass']))
			{
				$err_pass="*Password Required";
			}
			else
			{
				$pass=$_POST['pass'];
			}
			
			if (empty($_POST['phn']))
			{
				$err_phn="*Phone Number Required";
			}
			else
			{
				$phn=$_POST['phn'];
				$xyz='/^[0-9]*$/';
				if (preg_match($xyz,$phn))
				{
				 echo "Phone Number=$phn <br>";
				}
				else
				{
					$err_phn="*Invalid";
				}
			}
			if(empty($_POST['address']))
			{
				$err_add="*Address Required";
			}
			else
			{			
				$address=htmlspecialchars($_POST['address']);
				echo "Address=$address <br>";
			}
			if (empty($_POST['email']))
			{
				$err_email="*Email Required";
			}
			else
			{   
                $email=$_POST['email'];
				$regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
				if(preg_match($regex,$email)){
				echo "Email=$email<br>";
				}
				else{ $err_email="invalid";}
			}
			if(!empty($_POST['gender']))
			{
			$gender=$_POST['gender'];
			echo "Gender=$gender<br>";
			}
			if(!empty($_POST['group']))
			{
			$group=$_POST['group'];
			echo "Group=$group<br>";
			}
			if(!empty($_POST['Medium']))
			{
			$Medium=$_POST['Medium'];
			echo "Medium=$Medium<br>";
			}
			if(empty($_POST['class']))
			{
				$err_class="*Class Required";
			}
			else
			{			
				$class=htmlspecialchars($_POST['class']);
				echo "Class=$class <br>";
			}
			if(empty($_POST['institution']))
			{
				$err_inst="*Institution Name Required";
			}
			else
			{			
				$institution=htmlspecialchars($_POST['institution']);
				echo "Institution Name=$institution";
			}
			
			
			
		}	
	?>		
	<h1>Student Registration Form</h1>
		<form method="post" action="">
			<table style="background-color:cyan;"align=
			"left"width ="50%">
				<tr>
					<td>Name:</td>
					<td><input type="text" value="<?php echo $name;?>" name="name" >
						<br><span style="color:red"><?php echo $err_name;?></span></td> 
					
				</tr>
				<tr>
					<td>User Name:</td>
					<td><input type="text" value="<?php echo $uname;?>" name="uname" >
						<br><span style="color:red"><?php echo $err_uname;?></span></td> 
					
				</tr>
				
				<tr>
					<td>Password:</td>
					<td> <input type="password" name="pass" value="<?php echo $pass;?>">
					<br><span style="color:red"><?php echo $err_pass;?></span></td>
					
				</tr>
				<tr>
					<td>Phone number:</td>
					<td> <input type="text" name="phn" value="<?php echo $phn;?>">
					<br><span style="color:red"><?php echo $err_phn;?></span></td>
					
				</tr>
				<tr>
					<td>Address:</td>
					<td> <input type="text" name="address" value="<?php echo $address;?>">
					<br><span style="color:red"><?php echo $err_add;?></span></td>
					
				</tr
				<tr>
					<td>Email:</td>
					<td> <input type="text" name="email" value="<?php echo $email;?>">
					<br><span style="color:red"><?php echo $err_email;?></span></td>
					
				</tr>
				<tr>
					<td>Gender: </td>
					<td><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female">Female</td>
				</tr>
				
				<tr>
					<td>Group:</td>
					<td>
						<select name="group">
						    <option value="" disabled selected>Select</option>
							<option value="Science" >Science</option>
							<option value="Arts">Arts</option>
							<option value="Commarce">Commarce</option>
							<option value="None">None</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Medium: </td>
					<td><input type="radio" name="Medium" value="Bangla"> Bangla <input type="radio" name="Medium" value="English">English <input type="radio" name="Medium" value="English Version"> English Version</td>
				</tr>
				<tr>
					<td>Class:</td>
					<td><input type="text" value="<?php echo $class;?>" name="class" >
						<br><span style="color:red"><?php echo $err_class;?></span></td> 
					
				</tr>
				<tr>
					<td>Institution:</td>
					<td><input type="text" value="<?php echo $institution;?>" name="institution" >
						<br><span style="color:red"><?php echo $err_inst;?></span></td> 
					
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Back">
					</td>
				</tr>
				 
			</table>
		</form>
	</body>
</html>
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
		$education="";
		$TeachingMedium="";
		$group="";
		$class="";
		$regex="";
		$xyz="";
		$status="";
		$err_add="";
		$address="";
		
		
		
		if(isset($_POST['Update']))
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
				echo "Password=$pass<br>";
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
			}
			if(!empty($_POST['gender']))
			{
			$gender=$_POST['gender'];
			echo "Gender=$gender<br>";
			}
			if(!empty($_POST['education']))
			{
			$education=$_POST['education'];
			echo "Education=$education<br>";
			}
			
			if(!empty($_POST['group']))
			{
			$group=$_POST['group'];
			echo "Prefered Group=$group<br>";
			}
			if(!empty($_POST['TeachingMedium']))
			{
			 foreach($_POST['TeachingMedium'] as $TeachingMedium)
			 {
			  echo "Medium=$TeachingMedium<br>";
			 }
			}
			if(!empty($_POST['class']))
			{
			 foreach($_POST['class'] as $class)
			 {
			  echo "Prefered Class=$class<br>";
			 }
			}
			if(!empty($_POST['status']))
			{
			$status=$_POST['status'];
			echo "Status=$status";
			}
			
			
		}
	?>
	
	<h1>Teacher Update Information</h1>
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
					<td>Education: </td>
					<td>
						<select name="education">
							<option value="" disabled selected>Select</option>
							<option value="HSC">HSC</option>
							<option value="BSC">BSC</option>
							<option value="MSC">MSC</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Prefered Group:</td>
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
					<td> Teaching Medium: </td>
					<td><br>
						<input type="checkbox" name="TeachingMedium[]" value="English">English<br>
						<input type="checkbox" name="TeachingMedium[]" value="Bangla">Bangla<br>
						<input type="checkbox" name="TeachingMedium[]" value="English Version">English Version <br>
						
							
					</td>
				</tr>
				<tr>
					<td> Prefered Class: </td>
					<td><br>
						<input type="checkbox" name="class[]" value="1">1<br>
						<input type="checkbox" name="class[]" value="2">2<br>
						<input type="checkbox" name="class[]" value="3">3<br>
						<input type="checkbox" name="class[]" value="4">4<br>
						<input type="checkbox" name="class[]" value="5">5<br>
						<input type="checkbox" name="class[]" value="6">6<br>
						<input type="checkbox" name="class[]" value="7">7<br>
						<input type="checkbox" name="class[]" value="8">8<br>
						<input type="checkbox" name="class[]" value="9">9<br>
						<input type="checkbox" name="class[]" value="10">10<br>
						<input type="checkbox" name="class[]" value="11">11<br>
						<input type="checkbox" name="class[]" value="12">12<br>	
					</td>
				</tr>
				<tr>
					<td>Status: </td>
					<td><input type="radio" name="status" value="Available"> Available <input type="radio" name="status" value="Not Available">Not Available</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Update">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Back">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Logout">
					</td>
				</tr>
				 
			</table>
		</form>
	</body>
</html>
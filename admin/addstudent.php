<?php/*
echo 98;
session_start();

 if(isset($_SESSION['uid']))
 {
	  echo $_SESSION['uid']; 
 }
 else
 {
	 header('location: ../login.php');
 }*/
?>

<?php
 include('header.php');
 include('titlehead.php');
?>

<form action="addstudent.php" method="post" enctype="multipart/form-data">
  <table align="center" border="1" style="width:70%; margin-top:40px;">
       
	   <tr>
	     <th>Roll No</th>
	     <td><input type="text" name="rollno" placeholder="Enter roll no" required></td>
	   </tr>
	   
	   <tr>
	     <th>Full Name</th>
	     <td><input type="text" name="name" placeholder="Enter full name" required></td>
	   </tr>
	   
	   <tr>
	     <th>City</th>
	     <td><input type="text" name="city" placeholder="Enter city" required></td>
	   </tr>
	   
	   <tr>
	     <th>Parents Contact No</th>
	     <td><input type="text" name="pcon" placeholder="Enter the contact no of parents" required></td>
	   </tr>
	   
	   <tr>
	      <th>Standard</th>
		  <td><input type="number" name="std" placeholder="Enter standard" required></td>
	   </tr>
	   
	   <tr>
	      <th>Image</th>
		  <td><input type="file" name="simg" required></td>
	   </tr>
	   
	   <tr>
	   <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
	   </tr>
  </table>
</form>

</body>
</html>

<?php

echo "12345";

if(isset($_POST['submit'])){
	
	include('../dbcon.php');
	
echo "0";

	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcon = $_POST['pcon'];
	$std = $_POST['std'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	
	move_uploaded_file($tempname,"../dataimg/{$imagename}");
	
echo "1234";

	$qry = "INSERT INTO student(rollno,name,city,pcon,std,simg) 
	VALUES ('$rollno', '$name', '$city', '$pcon', '$std', '$imagename')";
	
echo "123";

	$run = mysqli_query($con,$qry);
	
	echo "12";
	if($run == true)
	{
		?>
		 <script>
		 alert('Data inserted successfully.');
		 </script>
		<?php
	}
	
}


?>
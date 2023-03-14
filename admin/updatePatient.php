<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

<!-- for retriving data -->
<?php 
							//include('../config.php');
							//$id=$_GET['id'];
							//$name=$_GET['name'];
							//$age=$_GET['age'];
							//$contact=$_GET['contact'];
						//	$address=$_GET['address'];
						//	$bgroup=$_GET['bgroup'];
						//	$email=$_GET['email'];

                         //   $sql="UPDATE patient set id=$id ,name='$name',age='$age',contact='$contact',address='$address',bgroup='$bgroup',email='$email' where id=$id ";
							//$data=mysqli_query($conn, $sql);
							//if($data){
						    //echo "<script>alert(' Record updated successfully');</script>";
						//	} else {
							  //  echo "<script>alert('There was a Error Updating profile');</script>";
						//	}

                        include('../config.php');
							$sql="SELECT * FROM patient where email='" . $_SESSION["email"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$id=$_GET['id'];
							$name=$_GET['name'];
							$age=$_GET['age'];
							$contact=$_GET['contact'];
							$address=$_GET['address'];
							$bgroup=$_GET['bgroup'];
							$email=$_GET['email'];

							mysqli_close($conn);
						
					//	mysqli_close($conn);
				?> 
<!-- for retriving data -->

<div class="login" style="background-color:#fff;background:url(img/newimage1.jpg);">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">My Details</h3>
		
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>
					<label>
						ID: <input type="text" name="name" value="<?php echo $id; ?>" placeholder="id" disabled>
					</label><br><br>

					<label>
						Age: <input type="number" name="age"  value="<?php echo $age; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						Mobile: <input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" />
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>" placeholder="address" required>
					</label><br><br>
					<label>
						Blood Group: <input type="text" name="bgroup" value="<?php echo $bgroup; ?>" placeholder="bgroup" required>
					</label><br><br>

					<label>
						Email: <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required>
					</label><br><br>
					
					
					
					<button name="submit" type="submit" style="margin-left:43px;width:108px;border-radius: 3px; ">Update</button> <br>
					

			</form> <br>
				
				<br>

				
		
				
		
		
	</div>
	
	
</div>
<br><br><br>
<!-- update information -->

<?php
							include('config.php');
							if(isset($_POST['submit'])){
							

							$sql="UPDATE patient SET name='" .$_POST["name"]. "' ,age='" .$_POST["age"]."' , contact='" .$_POST["contact"]. "',address='" .$_POST["address"]. "',bgroup='" .$_POST["bgroup"]. "', email='".$_POST["email"]."' WHERE id='" .$_SESSION["email"]. "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->


 


</body>
</html>

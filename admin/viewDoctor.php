<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">All registered Doctor List</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					
					if(isset($_GET['id'])){
						$id=$_GET['id'];
					}
					
					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);
					
					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Doctor Id</th>
								<th>Name</th>
								
								<th>Address</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Expert in</th>

								<th>Fee</th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['doc_id']."</td>";
								echo "<td>".$row['name']."</td>";
								
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['expertise']."</td>";
								
								echo "<td>".$row['fee']."</td>";
								?>
								<td><a href="updateDoctor.php?doc_id=<?php echo $row['doc_id'];?>& name=<?php echo $row['name'];?>& address=<?php echo $row['address'];?>& contact=<?php echo $row['contact'];?>& email=<?php echo $row['email'];?>& expertise=<?php echo $row['expertise'];?>& fee=<?php echo $row['fee'];?>"><button type='update' name='update' style='color:#000;'>Update</a></button>
								<a href="deleteDoctor.php?doc_id=<?php echo $row['doc_id'];?>"><button type='update' name='update' style='color:#000;'>Delete</a></button></td>
								<?php
								//DELETE FROM `doctor` WHERE 'doctor_id';
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
		
	


	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

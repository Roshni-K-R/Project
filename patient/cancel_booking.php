<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<!-- Cancel Booking -->


<?php
							include('../config.php');
							//if(isset($_POST['submit'])){
							
							// sql to delete a record
							//$sql = "DELETE * FROM booking";
                            $id=$_GET['booking_id'];
                            $sql = " DELETE FROM booking WHERE booking_id = $id";


							if (mysqli_query($conn, $sql)) {
							    echo "<script>alert('Your booking has been Canceled!');</script>";
							} else {
							     echo "<script>alert('There was an Error')<script>";
							}

							mysqli_close($conn);
						//}
						echo"Record has been deleted Successfully";
					?> 



	<!-- Cancel Booking End-->

	<!--delete and update-->




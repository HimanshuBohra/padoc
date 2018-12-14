<html>
<form method="POST" action="bookedappointment.php"/>
Emter Id : <input type="text" name="id" placeholder="enter ID" /><br>
Emter name : <input type="text" name="name" placeholder="enter name" /><br>
Emter Department :
                                <select name="doctor" class="doc">
                              	<?php
									include("connection.php");
									$sql= "select * from department";
									$result= mysqli_query($con,$sql);
									if(mysqli_num_rows($result)>0)
									{
									while($row=mysqli_fetch_assoc($result))
									{	
									echo "<option value=$row['dept_name']></option>";
										}
												}
								
									}
								?>
                                </select><br>
Emter Doctor name : <input type="text" name="dname" placeholder="enter name" /><br>
Emter appointment date : <input type="date" name="date" placeholder="enter name" /><br>
Emter problem: <input type="text" name="prob" placeholder="enter name" /><br>
Emter User Number : <input type="text" name="gender" placeholder="enter name" /><br>


<input type="submit" />
</form>
</html>
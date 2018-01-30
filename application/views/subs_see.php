<?php
if(isset($_POST['ttt']))
	{
		if($_POST['ttt']=="jalaja123")
			$success=1;
	}
	
if(!isset($success))
{
	?>
	<form method="post" >
		<input type="password" name="ttt" >
		<input type="submit" name="submit">
	</form>
	<?php
	
}

if(isset($success))
{
	$res=$this->db->simple_query('SELECT email from subscribers');
	echo 'Total number of Subscribers:'.mysqli_num_rows($res);
	echo '<br/><br/><br/>';
	echo '<table>';
	while($row=mysqli_fetch_array($res))
	{
		echo '<tr><td>'.$row['email'].'</td></tr>';
	}
	echo '</table>';
}
?>
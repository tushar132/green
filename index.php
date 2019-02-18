<?php  include("header.php");  ?>

<?php session_start(); 
	if(isset($_SESSION["uname"]))
	{
		echo "You are Login";
		exit;
	}	
		 
	
		
if(isset($_POST["submit"]))
	{
	$_SESSION["uname"]=$_POST["uname"];	
	header("Location:home.php");
	
	}
	
	
?>    



<form method="post">
		<table align="center" border="2">
			
			<tr><td>User name</td><td><input type="text" name="uname"></td></tr>
			

			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Go"></td>

			</tr>
			
		</table>

</form>
<?php include("footer.php"); ?>
<?php session_start(); include("database.php"); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EVENT x</title>
        <script language="javascript" src="../javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="css.css">
	<script>
		function display()
		{alert("hello");}
	</script>
    </head>
    <body >




			<input type="hidden" name="hiddenname" id="hiddenname" value='event1'>
        <?php
		include("head.php");
                $_SESSION['eventname']="event1";
                 $username = $_SESSION["username"];
                
                     
                    
			$c=mysql_connect("localhost",$dbusername,$dbpassword);
			mysql_select_db("anukriti13",$c);
			
			
					$q = "select event1 from events where username ='".$username."'";
					$result=mysql_query($q);
					if(!$result) echo "error accessing database for details<br>".mysql_error();
		while($row=mysql_fetch_array($result))
                    {
			$value=$row["event1"];
                    }

		if($value=='t')
		{
			 echo "You are REGISTERED for this event.";
			$_SESSION['eventvalue']='x';

	?>

			Click <input type="button" class ="box4" value="UN-register" onclick="parent.location='registerevent.php'" >  to UN-register for this event.
	<?php			
		}
		else
		{
			echo "You are NOT REGISTERED for thiS event.";
			$_SESSION['eventvalue']='t';
	?>
			<input type="hidden" name="hiddenvalue" id="hiddenvalue" value='t'>
			Click <input type="button" class ="box4" value="Register" onclick="parent.location='registerevent.php'" > to register for this event.
	<?php
		}
		mysql_close($c);
		
		
		echo("<br>");

	?>
	
		<table width=100%>
			<tr>
				<td>
					
					<?php include("./foot.php"); ?>
				</td>
			</tr>
		</table>
	
	</body>
</html>

<?php session_start(); include("database.php"); ?>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>registering for event</title>
        <script language="javascript">
			i=10;
			function timer()
			{
				document.getElementById("time").innerHTML=i;
				i--;
				if(i==-1)
					{document.location="./event1.php";}
				setTimeout('timer()',500);
			}
		</script>
    </head>






    <body onload="timer()">

        <?php                  

			$username = $_SESSION["username"];
			$eventname=$_SESSION['eventname'];
			$eventvalue=$_SESSION['eventvalue'];

			if($username=="")
				header('Location: ./register.html');
			
			echo("welcome ".$username."; eventname= ".$eventname."; eventvalue=".$eventvalue."||");

			$conn = mysql_connect("localhost",$dbusername,$dbpassword);
			if(!$conn) echo "CONNECTION TO DATABASE FAILED".mysql_error();

			$db=mysql_select_db("anukriti13",$conn);
		?>

        <?php
		echo "<br>event name=".$eventname." value=".$eventvalue."<br>";
			$q="update events set ".$eventname." = '".$eventvalue."' where username = '".$username."'";
			$result=mysql_query($q);
		while($row=mysql_fetch_array($result))
                    {
			echo("event 1 = ".$row["event1"]." event 2 = ".$row["event2"]." ");
                    }
		
			mysql_close($conn);
	?>

			<br><br><br>Please wait <div id="time"></div> seconds ...
	</body>
  

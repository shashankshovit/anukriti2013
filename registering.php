<!-- 
    Document   : register
    Created on : Jan 24, 2012, 4:42:43 PM
    Author     : Shanky
-->

<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>registering ...</title>
        <script language="javascript">
			i=10;
			function timer()
			{
				document.getElementById("time").innerHTML=i;
				i--;
				if(i==-1)
					{document.location="./welcome.php";}
				setTimeout('timer()',1500);
			}
		</script>
    </head>
    <body onload="timer()">
        <?php 
			include("database.php");
			$conn = mysql_connect("localhost",$dbusername,$dbpassword);
			if(!$conn) echo "CONNECTION TO DATABASE FAILED".mysql_error();

			$db=mysql_select_db("anukriti13",$conn);
			if(!$db)
				$create=mysql_query("create database anukriti13");
			$db=mysql_select_db("anukriti13",$conn);
		?>
        <?php
                $name = $_POST["name"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["mail"];
                $address = $_POST["address"];
                $mobile = $_POST["mobile"];
                $sex = $_POST["sex"];
                $day = parse_str($_POST["day"]);
                $month = parse_str($_POST["month"]);
                $year = parse_str($_POST["year"]);
                //$hobbies[] = $_POST("hobbies");

                $date = ""+$year+"-"+$month+"-"+$day;
//                java.sql.Date date = java.sql.Date.valueOf(d);

/*         try
         {
                /*
                
                */
				$check = mysql_query("describe login");
				if(!$check)
					{
						$create=mysql_query("create table login (username varchar(20) not null primary key, password varchar(20))");
					}
                $result = mysql_query("insert into login values ('".$username."','".$password."')");
		if(!$result) echo("LOGIN DETAILS INSERT ERROR".mysql_error());
		else echo "<br>login details added<br>";
/*
                resultl.moveToInsertRow();
                resultl.updateString(, username);
                resultl.updateString(2, password);
                resultl.insertRow();
*/
				$check=mysql_query("describe details");
					if(!$check)
						$create=mysql_query("create table details (username varchar(20) not null primary key, name varchar(30), password varchar(20), email varchar(30), address varchar(50), date date, mobile varchar(13), sex varchar(6))");
                $result = mysql_query("insert into details values ('".$username."','".$name."','".$password."','".$email."','".$address."',".$date.",'".$mobile."','".$sex."')");
		if($result) echo "personal details added<br>";
		if(!$result) echo("<br>DETAILS INSERT ERROR".mysql_error());


				$check=mysql_query("describe events");
					if(!$check)
						$create=mysql_query("create table events (username varchar(20) not null primary key, event1 char(1), event2 char(1), event3 char(1), event4 char(1), event5 char(1), event6 char(1), event7 char(1), event8 char(1), event9 char(1), event10 char(1), event11 char(1), event12 char(1), event13 char(1), event14 char(1), event15 char(1), event16 char(1), event17 char(1), event18 char(1), event19 char(1), event20 char(1), event21 char(1), event22 char(1), event23 char(1), event24 char(1), event25 char(1), event26 char(1), event27 char(1), event28 char(1), event29 char(1), event30 char(1), event31 char(1), event32 char(1), event33 char(1), event34 char(1), event35 char(1), event36 char(1), event37 char(1), event38 char(1), event39 char(1), event40 char(1), event41 char(1), event42 char(1), event43 char(1), event44 char(1), event45 char(1), event46 char(1), event47 char(1), event48 char(1), event49 char(1), event50 char(1), event51 char(1), event52 char(1), event53 char(1), event54 char(1), event55 char(1), event56 char(1), event57 char(1), event58 char(1), event59 char(1), event60 char(1) )");

                $result = mysql_query("insert into events values ('".$username."', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x' )");

		if($result) echo "events details added<br>";
		if(!$result) echo("<br>EVENTS DETAILS INSERT ERROR".mysql_error());

/*
                resultd.moveToInsertRow();
                resultd.updateString(1, username);
                resultd.updateString(2, name);
                resultd.updateString(3, password);
                resultd.updateString(4, email);
                resultd.updateString(5, address);
                resultd.updateDate(6, date);
                resultd.updateString(7, mobile);
                resultd.updateString(8, sex);
                resultd.insertRow();
*/
                //QUALIFICATIONS
/*
                $e = ""+$_POST["q10"];

                $resultq = c.getResultSet("select * from qualifications");
                resultq.moveToInsertRow();
                resultq.updateString(1, username);                

                if(e == "2")
                resultq.updateBoolean(2, true)	;
*/

/*
		$q10=$q12=$q14=$q16=0;
		if($_POST['q10']!=null) $q10=1;
		if($_POST['q12']!=null) $q12=1;
		if($_POST['q14']!=null) $q14=1;
		if($_POST['q16']!=null) $q16=1;


			$check=mysql_query("describe qualifications");
			if(!$check)
				$create=mysql_query("create table qualifications (username varchar(20) not null primary key, q10 boolean, q12 boolean, q14 boolean, q16 boolean)");

		$result=mysql_query("insert into qualifications values ('".$username."',".$q10.",".$q12.",".$q14.",".$q16.")");
		if($result) echo "qualifications added<br>";
		if(!$result) echo("<br>QUALIFICATIONS ERROR".mysql_error());
*/

                /*
                resultq.updateBoolean(3, q[1]);
                resultq.updateBoolean(4, q[2]);
                resultq.updateBoolean(5, q[3]);
                */
 //               resultq.insertRow();
                

                //HOBBIES
		echo
/*		
		$check=mysql_query("describe hobbies");
		if(!$check)
			$create=mysql_query("create table hobbies (username varchar(20) not null primary key, stamp boolean, chess boolean, coin boolean, dancing boolean, singing boolean)");
		$hob = $_POST['hobbies'];
		//echo count($hob);
		$hobbies=array("stamp","chess","coin","dancing","singing");
		//echo $hobbies[4];
		$result=mysql_query("insert into hobbies (username) values ('".$username."')");
		if(!$result) echo "<br>HOBBIES INSERT ERROR".mysql_error();
		for($i=0;$i<=count($hob);$i++)
			{
				//echo $hobbies[$hob[$i]-2]." ";
				$result=mysql_query("update hobbies set ".$hobbies[$hob[$i]-2]."=true where username='".$username."'");
				if(!$result) echo "<br>HOBBIES INSERT ERROR".mysql_error();
			}
			if($result) echo "<br>hobbies inserted successfully<br>";
*/
		
/*                
                $resulth = c.getResultSet("select * from hobbies");
                resulth.moveToInsertRow();
                resulth.updateString(1, username);
                if(hobbies != null)
                for($i=0; i<hobbies.length; i++)
                    {
                        resulth.updateBoolean(parse_str((hobbies[i]), true);
                    }
                resulth.insertRow();
*/
/*
           }
         catch(Exception e)
                 {out.println(""+e);}
*/
            $_SESSION['username']= $username;
                
        ?>
        <h2>Please wait ... </h2> <h1> <?php echo $_SESSION['username']; ?></h1><h2> Registering you on our site! ... </h2>

        <br><br><br>
        <script language="javascript" >

            document.write("<input type = button value = \"click here\" onclick=\"parent.location= './welcome.php'\">");
        </script>
        to take you to your profile page...
		Taking you to your profile page in <div id=time></div>seconds...
		<?php mysql_close($conn); ?>
    </body>
</html>

<!-- 
    Document   : welcome
    Created on : Jan 25, 2012, 12:19:01 PM
    Author     : Shanky
-->
<?php session_start(); ?>
<?php include("database.php") ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Welcome <?php echo $_SESSION['username']; ?></title>
        <script language="javascript" src="../javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
        <table width="100%">
            <tr>
                <td colspan="5">
                    <?php include("shashank.php"); ?>
                </td>
            </tr>
            <tr>
                <td width="5%"></td>
                <td width="25%"></td>
                <td width="">
                    <table>
            <?php
                
                 $username = $_SESSION["username"];
                 //$password = $_SESSION["password"];
                //echo("password is : ".$password);
                
                     
                    
			$c=mysql_connect("localhost",$dbusername,$dbpassword);
			mysql_select_db("anukriti13",$c);
			
			
					$q = "select * from details where username ='".$username."'";
					$result=mysql_query($q);
					if(!$result) echo "error accessing database for details<br>".mysql_error();

                    while($row=mysql_fetch_array($result))
                    {
                        
                        echo("<br><br>");
                        
                        echo("<h2><tr><td>Your name </td><td>: ".$row["name"]."</td></tr>");
                        echo("<br><tr><td>Your password </td><td>: "."##########"."</td></tr>");
                        echo("<br><tr><td><br>Your e mail </td><td>: ".$row["email"]."</td></tr>");
                        echo("<br><tr><td>Your address </td><td>: ".$row["address"]."</td></tr>");
                        echo("<br><tr><td>Your birth date </td><td>: ".$row["date"]."</td></tr>");
                        echo("<br><tr><td>Your mobile </td><td>: ".$row["mobile"]."</td></tr>");
                        echo("<br><tr><td>Your sex </td><td>: ".$row["sex"]."</td></tr>");
                    }

				$q="select * from events where username='".$username."'";
				$result=mysql_query($q);
					if(!$result) echo "error accessing database for details<br>".mysql_error();
				

            ?>


                    </table>
                </td>
                <td width="25%"></td>
                <td width="5%"></td>

            </tr>
	    <tr>
		<td></td>
		<td colspan=3>
	       <br />>
		      echo "You are registered in the following events under the following category. jhfj hfjshfjkhdsfjkshfhakhfjhajhfjhfhjksahfkhakfagkjfhkagfgakfkh";
	       <br />
                
                <table>
                    <tr>
                        <td>Commitee 1</td>
                        <td>Commitee 2</td>
                        <td>Committee 3</td>
                        <td>Committee 4</td>
                        <td>Commiittee 5</td>
                    </tr>
                    <tr>
                        <td>
                            <table>	
                            			
                            <?php
                   				while($row=mysql_fetch_array($result))
                				{							
							//echo(mysql_field_name($result,0));
				                	for($i=1;$i<13;$i++)
					                   {
						                  if($row[$i]=='t')
							                 {
							                  echo("<tr><td>");
                                              $colname=mysql_field_name($result,$i);
                                              $qry="select * from eventmapping where dbname = '".$colname."'";
                                              $res=mysql_query($qry);
                                              while($ro=mysql_fetch_array($res))
                                                echo($ro['originalname']);
                                              echo("</td></tr>");   
							                 }
                                             				
					                   }
				                }

                            ?>
                            </table>                       
                        </td>
                        <td>
                            
                        
                        </td>
                        <td>
                        
                        </td>
                        <td>
                        
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                </table>
           
		</td>
		<td></td>
	    </tr>
        
        </table>
	click <a href="./event1.php">here</a> to  take you take event1.

            <?php	
				mysql_close($c);
            ?>

    </body>
</html>

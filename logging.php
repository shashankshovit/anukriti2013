<!--
    Document   : login
    Created on : Jan 24, 2012, 4:42:57 PM
    Author     : Shanky
-->
<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>logging in ...</title>


    </head>
    <body >
        <h1>validating your login! Please wait ...</h1>
        
        <div></div>
        <br>
        <br>
         <?php
				
				include("database.php");
				$uname = $_POST['uname'];
		            	 $pass = $_POST['pass'];
				
				$c = mysql_connect("localhost",$dbusername,$dbpassword);
				if(!$c){die("connection failed .... ".mysql_error());}		
				mysql_select_db("anukriti13",$c);
						$qry="select * from login where (username='".$uname."' && password='".$pass."');";
					
					$result=mysql_query($qry);
			            while($row=mysql_fetch_array($result))
							{
								
								$_SESSION['username']=$row['username'];						
								$_SESSION['password']=$row['password'];

                                    $arr = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9");

                                     
                                    $rpassword = "";
                                    for($i=1;$i<=8;$i++)
                                        {
                                        $y=rand(0,61);
                                        $rpassword=$rpassword.$arr[$y];
                                        }

								$_SESSION['rpassword'] = $rpassword;
							}
							if($uname==$_SESSION['username'] && $pass==$_SESSION['password'])
								{
								header('Location: ./event1.php');			
								//header('Location: ./password.php');
								}
                            //out.println("<jsp:forward page = \"welcome.jsp\" flush = \"true\" />");
							else
								header('Location: ../invalid.php');
                    //System.out.println("<br>name : " + result.getString(1) + " &nbsp;  &nbsp;  &nbsp; password : " + result.getString(2));
                    //return;
                //}
				

				
            //out.println("<jsp:forward page = \"../invalid.jsp\" flush = \"true\" />");
            
//            catch(Exception e)
  //          {System.out.println(""+e);}
         ?>
    </body>
</html>

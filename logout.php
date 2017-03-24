<!-- 
    Document   : logout
    Created on : Jan 31, 2012, 11:09:36 PM
    Author     : Shanky
-->
	<?php session_start(); ?> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>logging out ... </title>
	<script language="javascript">
        	function display()
		{
			alert("You have been logged out successfully.");
		}
	</script>
    </head>
    <body onunload="display()">
        <?php session_destroy(); ?>
        <h3 align="right">Logging you out! Please wait ...</h3>
        <div id="wait"></div>
	<?php header('Location: ./index.php');	?>

        
    </body>
</html>

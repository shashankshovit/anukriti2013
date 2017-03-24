

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   <?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>password</title>
    </head>
    <body>

        <form action="rpassword.php" method=post>
            <?php
                $rpassword = $_SESSION["rpassword"];
                echo("Your random password generated is : ".$rpassword);
            ?>
            <table width="100%">
                <tr align="right">
                    <td>Enter the random password : </td>
                    <td><input type="password" id="rpassword" name="rpassword"></td>
                    <td><input type="submit" value="login"></td>

                </tr>
            </table>
        </form>

            
    </body>
</html>

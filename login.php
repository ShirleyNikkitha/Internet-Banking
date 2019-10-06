<html>
    <head>
        <style>
body {
        background-image: url("homepage.png");
} 
 
</style>

    </head>
    <body>
        <form action="login.php" method="POST"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div style='text-align:center'>
                <font face="timesroman" size="4">
            LOGIN ID:&nbsp;&nbsp;<input type="text" name="id"><br><br><br>
            PASSWORD:<input type="password" name="pwd1"><br><br><br>
            <input type="submit" value="SUBMIT" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" value="RESET">
            </font>
            </div>
        </form>
        <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        new user?<a href="register.php">REGISTER</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="forgot.php">FORGOT PASSWORD?</a>
        <br><br><br><br><br><br><br><br><br>
        <div style='text-align:right'>
        <a href="help1.php">help?</a>   
        </div>
        <?php
        if(isset($_POST['submit']))
        {
        $id=$_POST['id'];
        $pwd1=$_POST['pwd1'];
        include_once('config.php');
        $db_handle=mysqli_connect($host,$db_user,$db_pass,$db_name) or die("unable to connect");
        $query="select id,pwd1 from user where id='$id' AND pwd1='$pwd1'";
        $check=mysqli_query($db_handle,$query);
        if(mysqli_num_rows($check)>0)
        {
        header("location: login2.php");
        }
        else {
        header("location: login.php");
       
        }
        }
        ?>
    </body>
</html>
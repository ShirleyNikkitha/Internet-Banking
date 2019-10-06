<html>
    <head>
        <style>
        body 
        {
        background-image: url("homepage.png");
        } 
 
        </style>

    </head>
    <body>
        <div style="text-align:center"><br><br><br><br><br><br><br><br><br><br><br><br>
        Welcome ADMIN!!Please enter your password...
        <form action="admin.php" method="POST">
        <br><br><br>
        <input type="password" width="50" height="20" name="pwd" ><br><br>
        <input type="submit" value="submit" name="submit" >&nbsp;&nbsp;
        <input type="reset" value="reset" name="reset"><br><br>
        </div>
        </form>
    </body>
    <?php
        if(isset($_POST['submit']))
        {
        $pwd=$_POST['pwd'];
        if($_POST['pwd']=='admin')
        {
            header("location: admin2.php");
        }
 else {
     header("location: admin.php");
 }
        }
            ?>
</html>

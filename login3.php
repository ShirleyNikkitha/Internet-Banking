<html>
    <head>
        <style>
body {
        background-image: url("homepage.png");
} 
 
</style>

    </head>
    <body>
        <form method ="POST" action="login3.php">
        <div style="text-align:center">
        
            <br><br><br><br><br><br><br><br><br><br><br>
            Select an image!!!
            <br><br>
       
            <button name="" type="button" value="aaaaa" onclick="document.getElementById('result').value += this.value"><img src="pic1.jpg" width="75" height="75"></button>&nbsp;&nbsp;&nbsp;
            <button name="" type="button" value="bbbbb" onclick="document.getElementById('result').value += this.value"><img src="pic2.jpg" width="75" height="75"></button>&nbsp;&nbsp;&nbsp;
            <button name="" type="button" value="ccccc" onclick="document.getElementById('result').value += this.value"><img src="pic3.jpg" width="75" height="75"></button>&nbsp;&nbsp;&nbsp;
            <button name="" type="button" value="ddddd" onclick="document.getElementById('result').value += this.value"><img src="pic4.jpg" width="75" height="75"></button>&nbsp;&nbsp;&nbsp;
            <button name="" type="button" value="eeeee" onclick="document.getElementById('result').value += this.value"><img src="pic6.jpg" width="75" height="75"></button>
            <br><br>
            <button name="" type="button" value="fffff" onclick="document.getElementById('result').value += this.value"><img src="pic7.jpeg" width="75" height="75"></button>&nbsp;&nbsp;&nbsp;
            <button name="" type="button" value="ggggg" onclick="document.getElementById('result').value += this.value"><img src="pic8.jpg" width="75" height="75"></button>&nbsp;&nbsp;&nbsp;
            <button name="" type="button" value="hhhhh" onclick="document.getElementById('result').value += this.value"><img src="pic9.jpg" width="75" height="75"></button>&nbsp;&nbsp;&nbsp;
            <button name="" type="button" value="iiiii" onclick="document.getElementById('result').value += this.value"><img src="pic11.jpg" width="75" height="75"></button>&nbsp;&nbsp;&nbsp;
            <button name="" type="button" value="jjjjj" onclick="document.getElementById('result').value += this.value"><img src="pic12.jpg" width="75" height="75"></button>
            <br><br>
            
            
         <br><br>
         <input type="submit" value="submit" name="submit" >&nbsp;&nbsp;
         <input type="reset" value="reset" name="reset"><br><br>
         <input id='result' type="password" width="50" height="20" name="pwd3" >
         
         <br><br>
         <a href="forgot.php">FORGOT PASSWORD?</a>
         </div>
        <br><br><br>
        <div style='text-align:right'>
        <a href="help1.php">help?</a>   
        </div>
 </form>
        <?php
        if(isset($_POST['submit']))
        {
        $pwd3=$_POST['pwd3'];
        include_once('config.php');
        $db_handle=mysqli_connect($host,$db_user,$db_pass,$db_name) or die("unable to connect");
        $query="select pwd3 from user where pwd3='$pwd3'";
        $check=mysqli_query($db_handle,$query);
        if(mysqli_num_rows($check)>0)
        {
        header("location: bank.php");
        }
        else {
        header("location: login3.php");
       
        }
        }
        ?>
    </body>
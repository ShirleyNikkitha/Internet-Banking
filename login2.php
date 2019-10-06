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
 <form method ="POST" action="login2.php">
        <div style="text-align:center">
        
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
       
        <button type="button" name="blue" value="blue" onClick="document.getElementById('result').value += this.value" style="font-size:7pt;color:blue;background-color:blue;border:2px solid ;padding:3px;width:50;height:50;">7</button>&nbsp;&nbsp;&nbsp;
        <button type="button" name="yellow" value="yellow" onClick="document.getElementById('result').value += this.value" style="font-size:7pt;color:yellow;background-color:yellow;border:2px solid ;padding:3px;width:50;height:50;">8</button>&nbsp;&nbsp;&nbsp;
        <button type="button" name="green" value="green" onClick="document.getElementById('result').value += this.value" style="font-size:7pt;color:green;background-color:green;border:2px solid ;padding:3px;width:50;height:50;">9</button>&nbsp;&nbsp;&nbsp;
       
        <br> <br>

        <button type="button" name="red" value="red" onClick="document.getElementById('result').value += this.value" style="font-size:7pt;color:red;background-color:red;border:2px solid ;padding:3px;width:50;height:50;">4</button>&nbsp;&nbsp;&nbsp;
        <button type="button" name="pink" value="pink" onClick="document.getElementById('result').value += this.value" style="font-size:7pt;color:pink;background-color:pink;border:2px solid ;padding:3px;width:50;height:50;">5</button>&nbsp;&nbsp;&nbsp;
        

        
         <br><br>
         <input type="submit" value="submit" name="submit" >&nbsp;&nbsp;
         <input type="reset" value="reset" name="reset"><br><br>
         <input id='result' type="password" width="50" height="20" name="pwd2" >
         
         <br><br>
         <a href="forgot.php">FORGOT PASSWORD?</a>
         </div>
        <br><br><br><br><br><br><br><br>
        <div style='text-align:right'>
        <a href="help1.php">help?</a>   
        </div>
 </form>
        <?php
        if(isset($_POST['submit']))
        {
        $pwd2=$_POST['pwd2'];
        include_once('config.php');
        $db_handle=mysqli_connect($host,$db_user,$db_pass,$db_name) or die("unable to connect");
        $query="select pwd2 from user where pwd2='$pwd2'";
        $check=mysqli_query($db_handle,$query);
        if(mysqli_num_rows($check)>0)
        {
        header("location: login3.php");
        }
        else {
        header("location: login2.php");
       
        }
        }
        ?>
</body>

</html>

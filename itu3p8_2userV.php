<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> 
        <form method="POST">
            Enter Your Name.
             <input type="text" name="name" required>
             <br><br>
             <input type ="submit" name="submit" value="submit">
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                $name=$_POST['name'];
                if($_COOKIE['username']==$name)
                {
                    echo "<h3>Welcome, " .$name. "!</h3>";
                    echo"<h3> You are a Repeated user.</h3>";
                }
            else
                {
                    setcookie("username",$name,time() + (30 * 24 * 60 * 60),"/");
                    echo"<h3>Welcome," . $name . "!</h3>";
                    echo"<h3> You are a New user.</h3>";
                }
            }
        ?>
    </center>    
</body>
</html>
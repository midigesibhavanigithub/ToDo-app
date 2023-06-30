<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="container">
        <form method="post" action="login.php">
            <h1>Login</h1>
            <div class="textBoxdiv">
                <input type="text" placeholder="username" name="username" >
            </div>
<div class="textBodydiv">
    <input type="password" placeholder="password" name="password" >
</div>
<input type="submit" value="Login" class="loginBtn" name="login_Btn">
<div class="signup">
    Don't have an account ?
</br>
<a href="#">Sign up</a>
</div>
</form>
</div>
</body>
</html>
<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName= "todo-app";
 
try{
    $con =new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);

    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connection success";
}
catch(PDOException $e){
    echo "Error in connection" .$e->getMessage();
}
?>

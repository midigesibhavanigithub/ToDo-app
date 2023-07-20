<!DOCTYPE html>
<html>
<head>
<title>ToDo App-Home</title>
    </head>
    <body>
    <h1> Welcome To ToDo APP</h2>
    <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo'<p>Hello, ' .$_SESSION['username'].'!</p>';
        echo'<a href="index.html">ToDo-List</a>';
        echo '<a href="logout.php"><br><br>Logout</a>';
        echo '<a href="ChangePassword.php"><br><br>ChangePassword</a>';
    }else{
        echo'<p>You are not logged in.Please <a href="Login.php">Login</a>.</p>';
    }
    ?>
    </body>

</html>

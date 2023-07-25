<!DOCTYPE html>
<html>
<head>
<title>ToDo App-Home</title>
<style>
body{
    font-family:Arial,sans-serif;
    margin:0;
    padding: 0;
    background-color: #f0f0f0;
    text-align: center;
    justify-content: center;
    background:url('https://media.gettyimages.com/id/1221309165/photo/illustration-geometric-abstract-background-with-connected-line-and-dots-futuristic-digital.jpg?s=612x612&w=0&k=20&c=rufNYemSFsbe9Xkf14T3yOpDKg8sdF5rJ6BdGb1Rv88=');
    background-size: 100%;
    background-repeat:no-repeat; 
}
header{
    color:white;
    padding: 10px;
    text-align: center;
}
main{
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}
p{
    color: white;
}
a{ 
    color: white;
}
</style>
    </head>
    <body> 
    
    <header>
    <h1> Welcome To ToDo APP</h2>
    </header>
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

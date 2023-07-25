<!DOCTYPE html>
<html>
<head>
<title>ToDo App-Logout</title>
<style>
body{
    font: 14px sans-serif;
        margin:0;
        padding: 0;
        justify-content: center;
        background-color: white;
        text-align: center;
        background:url('https://media.gettyimages.com/id/1221309165/photo/illustration-geometric-abstract-background-with-connected-line-and-dots-futuristic-digital.jpg?s=612x612&w=0&k=20&c=rufNYemSFsbe9Xkf14T3yOpDKg8sdF5rJ6BdGb1Rv88=');
        background-size: 100%;
        background-repeat:no-repeat; 
        color: white;
} 
a{ 
    color: white;
}
</style>
</head>
<body>
<?php
session_start();
session_unset();
session_destroy();
?>
<h1> You have been logged out successfully.</h1>
<p><a href="welcome.php">Go to Home page</a></p>
</body>
</html>  
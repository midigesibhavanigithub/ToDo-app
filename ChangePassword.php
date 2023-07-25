<?php
session_start();
// check if the user is logged in
if(!isset($_SESSION["username"])) {
    header("Location:login.php");
    exit();
}

//Database connection configuration
$servername ="localhost";
$username = "root";
$password ="";
$dbname = "signup validation";

// create a database connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check the connection
if ($conn->connect_error) {
    die("connection failed:" .$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] =="POST"){
    //Get form data
    $currentpassword = $_POST["current_password"];
    $newpassword = $_POST["new_password"];

    // Retrive hashed password from the database based on the current user
    $username = $_SESSION["username"];
    $sql = "SELECT password FROM validation WHERE username ='$username'";
    $result = $conn->query($sql);
    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPasswordFromDatabase = $row["password"];
        
        //verify the current Password
        if (password_verify($currentpassword,$hashedPasswordFromDatabase)){
            //current password is correct,update the password in the dadtabase
            $hashedNewPassword = password_hash($newpassword,PASSWORD_DEFAULT);
            $updateSql = "UPDATE validation SET password ='$hashedNewPassword' WHERE username = '$username'";
            if($conn->query($updateSql) === TRUE) {
                //password updated successfully,redirect to the login page
                header("Location:login.php");
                exit();
            }else{
                //error updating password
                $passwordChangeError = "Error updating password:" .$conn->error;
            }
        } else{
            //current password is incorrect
            $passwordChangeError = " Incorrect current password";  
    }

    }else{
        //user not found in the database
        $passwordChangeError ="user not found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Password change</title>
<style>
body {
    display: flex;
    height: 100vh;
    flex-direction: column;
    font: 14px;
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: white;
    background:url('https://media.gettyimages.com/id/1221309165/photo/illustration-geometric-abstract-background-with-connected-line-and-dots-futuristic-digital.jpg?s=612x612&w=0&k=20&c=rufNYemSFsbe9Xkf14T3yOpDKg8sdF5rJ6BdGb1Rv88=');
    background-size: 100%;
    background-repeat:no-repeat; 
}

*{
    font-family: sans-serif;
    box-sizing:border-box;
}
form{
    width: 300px;
    border:2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
}
h2{
    margin-bottom: 30px;
    color: white;
    margin-left: 10px;
}
input{
    display: block;
    border: 2px solid #ccc;
    width: 80%;
    padding: 10px;
    margin: 8px auto;
    border-radius: 5px;
}
label{
    color: black;
    font-size: 15px;
    padding: 8px;
    margin-right:30px;
}
button{
    float: right;
    background: blue;
    padding: 10px 15px;
    color: white;
    border-radius: 5px;
    margin-right: 48px;
    border:none;
} 
button:hover{
    opacity: .7;
}
</style>
</head>
<body>
   <h2>Change Password</h2>
    <?php if(isset($passwordChangeError)) {?>
    <p><?php echo $passwordChangeError; ?></p>
     <?php } ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
   <label for="current_password">Current Password:</label>
   <input type="text" name="current_password" required>
   <br>
   <label for="new_password">New Password:</label>
   <input type="text" name="new_password" required>
   <br>
   <button type="submit">Change Password</button>
</form>
</body>
</html>
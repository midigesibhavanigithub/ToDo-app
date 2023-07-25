<!DOCTYPE html> 
<head>
<title>How to make a website</title>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.banner{
    width:100%;
    height: 100vh;
    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(https://media.gettyimages.com/id/1221309165/photo/illustration-geometric-abstract-background-with-connected-line-and-dots-futuristic-digital.jpg?s=612x612&w=0&k=20&c=rufNYemSFsbe9Xkf14T3yOpDKg8sdF5rJ6BdGb1Rv88=);
    background-size: cover;
    background-position: center;
    }
    .navbar{
        width: 85%;
        margin: auto;
        padding: 35px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .logo{
        width: 120px;
        cursor: pointer;
    }
    .navbar ul li{
        list-style: none;
        display: inline-block;
        margin: 0 20px;
        position: relative;
    }
    .navbar ul li a{
        text-decoration: none;
        color: white;
        text-transform: uppercase;
    }
    .navbar ul li::after{
        content:'';
        height: 3px;
        width: 0;
        background: white;
        position: absolute;
        left:0;
        bottom: -10px;
        transition: 0.5s;
    }
    .navbar ul li:hover::after{
        width: 100%;

    }
    .content{
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        color: #fff;
    }
    .content h1{
        font-size: 70px;
        margin-top: 80px;
    }
    .content p{
        margin: 20px auto;
        font-weight: 100;
        line-height: 25px;
        font-size: 20px;
    }
   
    
</style>
</head>
<body> 
<div class="banner">
<div class="navbar">
<img src="data:image/png;base64,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" class="logo">
<ul>
<li><a href="index.html">ToDo-List</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="ChangePassword.php">ChangePassword</a></li>
</ul>
</div>
<div class="content">
<h1> WELCOME TO TODO APP </h1>
<p>In this version of the ToDo list,the user will be getting four options:</p>
<p>* Create a new task or adding a new ToDo in the ToDo List App.</p>
<p>*See all the tasks or view all the ToDos that were added to the app.</p>
<p>*Delete any ToDo from the list of ToDos.</p>
<p>* Exit from the app </p>

</div>
</body>
</html>



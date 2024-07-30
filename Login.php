<?php
    include("connection.php");
    if(isset($_POST['submit']))
    {
        $username=$_POST['user'];
        $password=$_POST['password'];

        $sql="select * from users where UserID ='$username' and Password='$password'"; 
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        if($count==1){
            header("Location:index.php");
        }
        else{
            echo '<script>
                window.location.href="Login.php";
                alert( "Invalid username or password" );
            </script>';
        }
    }
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: domain;
            background: rgb(187,94,224);
            background: radial-gradient(circle, rgba(187,94,224,1) 0%, rgba(11,42,80,1) 100%);
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .center{
           position: absolute;
           width: 400px;
           height: 500px;
           background-color: rgb(240, 255, 255);
           border-radius: 10px;
        }
        .center h1{
            text-align: center;
            font-size: 50px;
            color: rgb(96, 78, 215);
            padding: 0 0 2px 0;
            border-bottom: 2px solid slateblue;
        }
        .center form{
            padding: 0 40px;
            box-sizing: border-box;
        }
        form .txt_field{
           position: relative;
           border-bottom: 1px solid slateblue; 
           margin: 30px 0;
        }
        .txt_field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background-color: transparent;
            outline: none;
        }
        .txt_field label{
            color: slateblue;
        }
        .pass{
            max-width: -5px 0 20px 5px;
            color: slateblue;
            cursor: pointer;
        }
        .pass:hover{
            text-decoration: underline;
        }
        input[type="submit"]{
            width: 100%;
            height: 50px;
            margin-top: 30px;
            bottom: 1px solid;
            background-color: slateblue;
            border-radius: 25px;
            color: aliceblue;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            border-color: slateblue;
            transition: -5s;
        }
        .signup_link{
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: slateblue;
        }
        .signup_link a{
            color: slateblue;
            text-decoration: none;
        }
        .signup_link a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post" action="login.php" onsubmit="return isvalid()">
            <div class="txt_field">
               <input type="text" id="userid" name="user">
               <label>UserID</label> 
            </div>
            <div class="txt_field">
                <input type="password" id="password" name="password">
                <label>Password</label> 
             </div>
             <div class="pass">Forgot Password?</div>
             <input type="submit" id="submit" value="Login" name="submit">
             <div class="signup_link">
                Not a member? <a href="register.php">Signup</a>
             </div>
        </form>
    </div>
    <script>
        function isvalid() {
        let userid = document.getElementById('userid').value;
        let password = document.getElementById('password').value;

        if (userid === '' || password === '') {
            alert('Please enter a username and password');
            return false;
        }
        return true;
        }
    </script>
</body>
</html>
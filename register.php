<?php
    include("connection.php");
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
           height: 600px;
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
        <h1>Register</h1>
        <form method="post" action="connect.php">
            <div class="txt_field">
               <input type="text" id="name" name="name">
               <label>Name</label> 
            </div>
            <div class="txt_field">
                <input type="text" id="email" name="email">
                <label>Email</label> 
             </div>
            <div class="txt_field">
                <input type="password" id="password" name="password">
                <label>Password</label> 
             </div>
             <div class="txt_field">
                <input type="password" id="cpassword" name="cpassword">
                <label>Confirm Password</label> 
             </div>
             <input type="submit" value="Submit" id="submit" name="submit">
        </form>
    </div>
    <script>
        const form = document.getElementById('registerForm');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const cpasswordInput = document.getElementById('cpassword');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = nameInput.value.trim();
            const email = emailInput.value.trim();
            const password = passwordInput.value.trim();
            const cpassword = cpasswordInput.value.trim();

            if (name === '' || email === '' || password === '' || cpassword === '') {
                alert('Please fill in all fields');
                return;
            }

            if (password !== cpassword) {
                alert('Passwords do not match');
                return;
            }

            form.submit();
        });
    </script>
</body>
</html>
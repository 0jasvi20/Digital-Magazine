<?php
    include("connection.php");
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        $sql="select * from users where Name='$name'";
        $result=mysqli_query($conn,$sql);
        $count_user=mysqli_num_rows($result);

        $sql="select * from users where Email='$email'";
        $result=mysqli_query($conn,$sql);
        $count_email=mysqli_num_rows($result);

        if($count_user == 0 && $count_email==0){
            if($password!=$cpassword) {
                echo "<script>alert('Password and Confirm Password does not match')</script>";
            }
            else{
                $sql="insert into users(Name,Email,Password) values('$name','$email','$password')";
                $result=mysqli_query( $conn , $sql );
                if ($result) {
                    header( "Location: login.php" ) ;
                }
            }
        }
        else
        {
            if($count_user>0)
            {
                echo '<script>
                    window.location.href = "register.php";
                    alert("User already exists!");
                </script>';
            }
            else if($count_email>0)
            {
                echo '<script>
                    window.location.href = "register.php";
                    alert("Email already exists!");
                </script>';
            }
        }

    }
?>
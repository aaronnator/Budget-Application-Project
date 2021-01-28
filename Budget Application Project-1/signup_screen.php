<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <script type="text/javascript" src="js/signup.js"></script>
</head>

<body>
    <div id="loginbox">
        <div class="leftbox">
            <h1> Sign Up </h1>
            <form action="" method="POST">
                <div class="inputbox">
                    <input type="text" name="user" required="required" />
                    <label>Username</label>
                </div>
               <!-- <div class="inputbox"> commenting this out until it's needed
                    <input type="text" name="email" required="required" />
                    <label>E-mail</label>
                </div> -->
                <div class="inputbox">
                    <input type="password" name="pass" required="required" />
                    <label>Password</label>
                </div>
                <div class="inputbox">
                    <input type="password" name="password1" required="required" />
                    <label>Retype assword</label>
                </div>
                <input type="submit" name="submit" value="Sign Up" />
                <p>If you already have an account and want to log in, <a href="login_screen.php">click here</a>.</p><br>
                <p><a href="mainProject.php">Click here</a> if you wish to return to the homepage.</p>
            </form>

            <?php
                if(isset($_POST["submit"])){
                    if(!empty($_POST['user']) && !empty($_POST['pass'] && $_POST['pass'] == $_POST['password1'])) {
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $hash = password_hash($pass, PASSWORD_DEFAULT);
                        $con=mysqli_connect('localhost','root','') or die(mysql_error());
                        mysqli_select_db($con,'user-database') or die("cannot select DB");
                    
                        $query=mysqli_query($con,"SELECT * FROM users WHERE username='".$user."'");
                        $numrows=mysqli_num_rows($query);
                        if($numrows==0) {
                            $sql="INSERT INTO users(username,pass) VALUES('$user', '$hash')";
                        
                            $result=mysqli_query($con,$sql);
                            if($result) {
                                header("refresh:3;url=login_screen.php");
                                echo "Account Successfully Created";
                            }
                            else {
                                echo "Failed to create account. Please try again.";
                            }
                        
                        }
                        else {
                            echo "That username already exists! Please try again with another.";
                        }
                    
                    }
                    else {
                        echo "All fields are required!";
                    }
                }
            ?>

        </div>
    </div>
</body>

</html>
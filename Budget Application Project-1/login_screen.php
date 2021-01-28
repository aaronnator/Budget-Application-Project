<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <div class="box">
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="inputbox">
                    <input type="text" name="user" required="required">
                    <label>Username</label>
                </div>
                <div class="inputbox">
                    <input type="password" name="pass" required="required">
                    <label>Password</label>
                </div>
                <input type="submit" name="submit" value="Log in">
                <p>Don't have an account?<a href="signup_screen.php">Sign up</a></p><br>
                <p>Click <a href="mainProject.php">here</a> if you wish to return to the homepage.</p>
            </form>

            <?php
                try {
                    $connection = new PDO("mysql:host=localhost;dbname=user-database", "root", "");
                }
                catch (PDOException $e) {
                    echo 'Cannot connect to database';
                    exit;
                }


                if(isset($_POST["submit"])) {
                
                    if(!empty($_POST['user']) && !empty($_POST['pass'])) {
                        /*
                        $result = $connection->prepare("SELECT 1 FROM users WHERE username= ? AND password=PASSWORD(?)");

                        $result->execute(array($_POST["user"], $_POST["pass"])) or die($result->errorInfo());

                        if ($result->rowCount() == 1) {
                            // remember that user's logged in
                            $_SESSION["authenticated"] = true;

                            // redirect user to home page, using absolute path, per
                            // http://us2.php.net/manual/en/function.header.php
                            $host = $_SERVER["HTTP_HOST"];
                            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
                            header("Location: http://$host$path/mainProject.php");
                            exit;
                        }
                    }
                } */
                        
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $dbusername="NULL";
                        $dbpassword="NULL";

                        $con=mysqli_connect('localhost','root','') or die(mysql_error());
                        mysqli_select_db($con,'user-database') or die("cannot select DB");


                        $query = mysqli_query($con, "SELECT * FROM users WHERE username='".$user."'");
                        
                        $numrows=mysqli_num_rows($query);
                        echo($pass);
                        
                        if($numrows!=0) {
                            while($row=mysqli_fetch_assoc($query)) {
                                echo($pass);
                                echo($row['pass']);
                                $yesno = password_verify($pass, $row['pass']);
                                echo($yesno);
                                if(password_verify($pass, $row['pass'])) {
                                    $dbusername=$row['username'];
                                    echo($pass);
                                }
                            }
                    
                            if($user == $dbusername) {
                                session_start();
                                $_SESSION['sess_user']=$user;
                            
                                /* Redirect browser */
                                header("Location: mainProject.php");
                            }
                        }
                        else {
                            echo "Invalid username or password!";
                        }
                    
                    }
                    else {
                        echo "All fields are required!";
                    }
                }
            ?>
            
        </div>
        
    </body>
</html>
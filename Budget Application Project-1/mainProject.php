<?php
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Budgeting</title>
        <body>
            <div class="box">
                <h1>Welcome to our budgeting website!</h1>
                
                <?php
                session_start();
                if(isset($_SESSION['sess_user'])) {
                    echo "Welcome " . $_SESSION['sess_user'] . "!";
                }
                ?>
                <p>This website will allow you to use our tools to help you better understand and plan for your financial future.</p>
                <!--Image source: https://i0.wp.com/financialwellness.org/wp-content/uploads/2017/12/Personal-Finance-Tips-Piggy-Bank-Coins-Personal-Finances-in-2018-SS-Feature.jpg?fit=750%2C420-->
                <!--<img src="Finances.jpeg" alt="Money" style="float: right; margin-right: 100px" width="525" height="294">-->
                <div style="text-align: center;">
                    <button onclick="window.location.href = 'tool1.php'">Tool for Debts/Daily Budgeting</button>
                    <button onclick="window.location.href = 'tool2.php'">Tool for Review and Planning</button>
                    <button onclick="window.location.href = 'tool3.php'">Tool for Investments &nbsp;</button>
                    <button onclick="window.location.href = 'login_screen.php'">Log in and save your data</button>
                </div>
            </div>
        </body>
</html>
<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/tool1.css">
     
    
    <script type="text/javascript" src="js/navb.js"></script>
        <title>Budgeting tool</title>
    <script type="text/javascript" src="js/tool1.js"></script>
    <script>$ lessc build/build_standalone.less datepicker.css</script>
    <title>Budgeting tool</title>

    <body>
        <div id="content">
            <span class="slide">
                <a href="#" onclick="openSlideMenu()">
                    <i><img id="mic" src="pic/menuic.png" width="40px" height="40px"></i>
                </a>
            </span>

            <div id="menu" class="navb">
                <a href="#" class="close" onclick="closeSideMenu()">
                    <i><img id="mic" src="pic/closeic.png" width="30px" height="30px"></i>
                </a></br>
                <a href="mainProject.php">Home</a>
                <a class="active" href="tool1.php">Tool1</a>
                <a href="tool2.php">Tool2</a>
                <a href="tool3.php">Tool3</a>
            </div>

            <!--<form id="calc" action="" method="get">
            <h1>This will be a tool for projecting debt and day-to-day budgeting</h1>
                <div id="menu" class="navb">
                    <a href="#" class="close" onclick="closeSideMenu()">
                        <i><img id="mic" src="pic/closeic.png" width="30px" height="30px"></i>
                    </a>
                    <a href="mainProject.html">Home</a>
                    <a class="active" href="tool1.php">Tool1</a>
                    <a href="tool2.php">Tool2</a>
                    <a href="tool3.php">Tool3</a>
                </div>
            </form>-->

            <form id="calc" action="" method="POST">
                <h1>Budgeting Tool</h1>

                <label>One time or recurring?</label>
                <select class="form-control" id="budgetType">
                    <option>   </option>
                    <option>Single instance</option>
                    <option>Recurring instance</option>
                </select>

                <label>If recurring, select frequency</label>
                <select class="form-control" id="budgetFreq">
                    <option>None</option>
                    <option>Daily</option>
                    <option>Weekly</option>
                    <option>Biweekly</option>
                    <option>Monthly</option>
                    <option>Annually</option>
                </select>
                    
                <div class="form-group">
                    <label for="exampleInputPassword1">Expense\Income total</label>
                    <input type="number" class="form-control" id="budgetNum" placeholder="Enter positive for income; negative for expense.">
                </div>

                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Enter a description of the entry.</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Groceries, paycheck, etc."></textarea>
                </div>
            
                


                <label for="income">Please enter income in dollars (round cents down)</label>
                <input name="income" required="required" type="text" placeholder="$"/>
                <label for="expenses">Please enter your expenses in dollars (round cents up)</label>
                <input name="expenses" required="required" type="text" placeholder="$"/>
                <button name="smb" type="submit">Calculate your net gains/losses</button>
                <p>Net gains/losses</p>
                <!--<button type="button" class="btn btn-primary" id="budgetElementSubmit">Submit budget element</button></br></br>-->
            
                <p><a href="mainProject.html">Back to home</a></p>
            </form>
        </div>

        <?php
            $net = 0;
            $plus = 0;
            $less = 0;
            
            $plus = $_POST['income'];
            $less = $_POST['expenses'];

            $net = $plus - $less;
            
            if(isset($plus) && isset($less)) {
                echo("$" . $net);        
            }
        ?>
    
        <!-- Additional Bootstrap Functionality scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>